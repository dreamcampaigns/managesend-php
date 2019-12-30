<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Segment;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class Segment
 * @package Managesend\DataClass\Segment
 */
class Segment extends AbstractHydrator
{
    /** @var integer */
    protected $segmentId;

    /** @var integer */
    protected $listId;

    /** @var string */
    protected $name;

    /** @var string */
    protected $segmentType;

    /** @var integer */
    protected $subscriberCount;

    /** @var string */
    protected $createDate;

    /**
     * @return int
     */
    public function getSegmentId()
    {
        return $this->segmentId;
    }

    /**
     * @return int
     */
    public function getListId()
    {
        return $this->listId;
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
    public function getSegmentType()
    {
        return $this->segmentType;
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