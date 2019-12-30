<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Lists;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class Customfield
 * @package Managesend\DataClass\Lists
 */
class Customfield extends AbstractHydrator
{
    /** @var string */
    protected $fieldName;

    /** @var string */
    protected $tagName;

    /** @var string */
    protected $name;

    /** @var string */
    protected $type;

    /** @var boolean */
    protected $visible;

    /** @var boolean */
    protected $required;

    /** @var array */
    protected $options;

    /**
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @return string
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function isVisible()
    {
        return $this->visible;
    }

    /**
     * @return bool
     */
    public function isRequired()
    {
        return $this->required;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }
}