<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\SmsCampaign;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class BaseCampaign
 * @package Managesend\DataClass\SmsCampaign
 */
class BaseCampaign extends AbstractHydrator
{
    /** @var integer */
    protected $id;

    /** @var string */
    protected $name;

    /** @var array */
    protected $listIds;

    /** @var array */
    protected $segmentIds;

    /** @var string */
    protected $campaignType;

    /** @var integer */
    protected $totalRecipients;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getListIds()
    {
        return $this->listIds;
    }

    /**
     * @param int $listId
     *
     * @return bool
     */
    public function hasListId($listId)
    {
        return \in_array($listId,$this->listIds);
    }

    /**
     * @return array
     */
    public function getSegmentIds()
    {
        return $this->segmentIds;
    }

    /**
     * @param int $segmentId
     *
     * @return bool
     */
    public function hasSegmentId($segmentId)
    {
        return \in_array($segmentId,$this->segmentIds);
    }

    /**
     * @return string
     */
    public function getCampaignType()
    {
        return $this->campaignType;
    }

    /**
     * @return int
     */
    public function getTotalRecipients()
    {
        return $this->totalRecipients;
    }
}