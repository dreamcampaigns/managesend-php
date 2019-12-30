<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Managesend\Hydrator;

use Managesend\HttpClient\Response;
use Managesend\Exceptions\ManagesendException;

/**
 * Class ResourceResponse
 * @package Managesend\Hydrator
 */
class ResourceResponse
{
    /** @var \Managesend\HttpClient\Response $response */
    protected $response;
    /** @var \Managesend\Hydrator\HydratorInterface $data */
    protected $data;

    /**
     * ResourceResponse constructor.
     *
     * @param \Managesend\HttpClient\Response $response
     * @param null|\Managesend\Hydrator\HydratorInterface $hydratorClass
     */
    public function __construct(Response $response, $hydratorClass = NULL)
    {
        $this->response = $response;
        if ($hydratorClass) {
            $this->setHydratorClass($hydratorClass);
        }
    }

    /**
     * @return \Managesend\HttpClient\Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @inheritdoc
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \Managesend\Hydrator\HydratorInterface $hydratorClass
     */
    protected function setHydratorClass($hydratorClass)
    {
        if(!in_array("Managesend\Hydrator\HydratorInterface", class_implements($hydratorClass))){
            throw new ManagesendException(sprintf("invalid %s hydrator class",$hydratorClass));
        }
        $content = is_array($this->response->getContent()) ? $this->response->getContent() : array();
        $hydrator = new $hydratorClass($content);
        $this->data = $hydrator->hydrate();
        unset($hydrator);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('[%s_Response]', get_called_class());
    }
}