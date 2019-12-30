<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Managesend\Hydrator;

use Managesend\Exceptions\ManagesendException;

/**
 * Class ResourceResponseCollection
 * @package Managesend\Hydrator
 */
class ResourceResponseCollection extends ResourceResponse
{
    /** @var \Managesend\Hydrator\HydratorInterface[] $data */
    protected $data = array();

    /**
     * @param \Managesend\Hydrator\HydratorInterface $hydratorClass
     */
    protected function setHydratorClass($hydratorClass)
    {
        if (!in_array("Managesend\Hydrator\HydratorInterface", class_implements($hydratorClass))) {
            throw new ManagesendException(sprintf("invalid %s hydrator class", $hydratorClass));
        }
        $content = is_array($this->response->getContent()) ? $this->response->getContent() : array();
        foreach ($content as $resource) {
            $hydrator = new $hydratorClass($resource);
            array_push($this->data, $hydrator->hydrate());
            unset($hydrator);
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('[%s_ResponseCollections]', get_called_class());
    }
}