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
 * Class ResourceResponsePage
 * @package Managesend\Hydrator
 */
class ResourceResponsePage extends ResourceResponseCollection
{
    /** @var \Managesend\Hydrator\HydratorInterface $pageInfo */
    protected $pageInfo;

    /**
     * @param \Managesend\Hydrator\HydratorInterface $hydratorClass
     */
    protected function setHydratorClass($hydratorClass)
    {
        if (!in_array("Managesend\Hydrator\HydratorInterface", class_implements($hydratorClass))) {
            throw new ManagesendException(sprintf("invalid %s hydrator class", $hydratorClass));
        }
        $content = is_array($this->response->getContent()) ? $this->response->getContent() : array();
        unset($content["results"]);
        $hydrator = new $hydratorClass($content);
        $this->pageInfo = $hydrator->hydrate();
        unset($hydrator);
    }

    /**
     * @param \Managesend\Hydrator\HydratorInterface $hydratorClass
     */
    protected function setResultsHydratorClass($hydratorClass)
    {
        if(!in_array("Managesend\Hydrator\HydratorInterface", class_implements($hydratorClass))){
            throw new ManagesendException(sprintf("invalid %s hydrator class",$hydratorClass));
        }
        $content = is_array($this->response->getContent()) ? $this->response->getContent() : array();
        if(\array_key_exists("results",$content)) {
            foreach ($content["results"] as $resource) {
                $hydrator = new $hydratorClass($resource);
                array_push($this->data, $hydrator->hydrate());
                unset($hydrator);
            }
        }
    }

    /**
     * @return \Managesend\Hydrator\HydratorInterface
     */
    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('[%s_ResponsePage]',get_called_class());
    }
}