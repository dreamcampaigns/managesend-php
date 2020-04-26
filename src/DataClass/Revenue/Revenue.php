<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Revenue;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class Revenue
 * @package Managesend\DataClass\Revenue
 */
class Revenue extends AbstractHydrator
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $name;

    /** @var integer */
    protected $listId;

    /** @var boolean */
    protected $isActive;

    /** @var array */
    protected $captureFields;

    /** @var string */
    protected $createDate;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * @return array
     */
    public function getCaptureFields()
    {
        return $this->captureFields;
    }

    /**
     * @param string $captureField
     *
     * @return bool
     */
    public function hasCaptureField($captureField)
    {
        return \in_array($captureField,$this->captureFields);
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
}