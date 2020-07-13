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
 * Class Lists
 * @package Managesend\DataClass\Lists
 */
class Lists extends AbstractHydrator
{
    /** @var integer */
    protected $id;

    /** @var string */
    protected $listName;

    /** @var int */
    protected $subscriberCount;

    /** @var string */
    protected $createDate;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getListName()
    {
        return $this->listName;
    }

    /**
     * @return int
     */
    public function getSubscriberCount()
    {
        return $this->subscriberCount;
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
}