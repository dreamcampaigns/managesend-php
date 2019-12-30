<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Managesend\Hydrator;

use Managesend\Hydrator\HydratorInterface;
use Managesend\Exceptions\ManagesendException;

class AbstractHydrator implements HydratorInterface
{
    /** @var array $properties */
    protected $properties = array();

    /**
     * AbstractHydrator constructor.
     *
     * @param array $properties
     */
    public function __construct(array $properties)
    {
        $this->properties = $properties;
    }

    /**
     * @return array|mixed
     */
    public function toArray()
    {
        return $this->properties;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('[%s_Resource]',get_called_class());
    }

    /**
     * @return $this|\Managesend\Hydrator\HydratorInterface
     */
    protected function hydrate()
    {
        foreach ($this->properties as $name => $value) {
            $property = $this->snakeToCamel($name);
            if (property_exists($this, $property)) {
                $this->{$property} = $value;
            }
        }
        return $this;
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     *
     * @return mixed The requested property
     * @throws ManagesendException For unknown properties
     */
    public function __get($name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        throw new ManagesendException('Unknown property: ' . $name);
    }

    /**
     * @param $method
     * @param $arguments
     *
     * @return mixed
     * @throws \Managesend\Exceptions\ManagesendException
     */
    public function __call($method, $arguments) {
        if (\method_exists($this, $method)) {
            return \call_user_func_array(array($this, $method), $arguments);
        }

        throw new ManagesendException('Unknown method ' . $method);
    }

    /**
     * Convert a value to lower camel case.
     *
     * @param  string $value
     * @return string
     */
    protected function snakeToCamel($value)
    {
        $value = ucwords(str_replace(array('-', '_'), ' ', $value));
        return lcfirst(str_replace(' ', '', $value));
    }
}