<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\EmailCampaign;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class BaseCampaign
 * @package Managesend\DataClass\EmailCampaign
 */
class BaseCampaign extends AbstractHydrator
{
    /** @var integer */
    protected $id;

    /** @var string */
    protected $name;

    /** @var string */
    protected $fromName;

    /** @var string */
    protected $fromEmail;

    /** @var string */
    protected $subject;

    /** @var array */
    protected $listIds;

    /** @var array */
    protected $segmentIds;

    /** @var integer */
    protected $templateId;

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
     * @return string
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * @return string
     */
    public function getFromEmail()
    {
        return $this->fromEmail;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
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
     * @return int
     */
    public function getTemplateId()
    {
        return $this->templateId;
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