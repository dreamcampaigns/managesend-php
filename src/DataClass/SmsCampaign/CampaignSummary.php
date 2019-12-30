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
 * Class CampaignSummary
 * @package Managesend\DataClass\SmsCampaign
 */
class CampaignSummary extends AbstractHydrator
{
    /** @var integer */
    protected $totalRecipients;

    /** @var integer */
    protected $totalSms;

    /** @var integer */
    protected $totalSent;

    /** @var integer */
    protected $totalReceived;

    /** @var integer */
    protected $totalFailed;

    /** @var integer */
    protected $internationalCount;

    /** @var integer */
    protected $usaCount;

    /** @var float */
    protected $perPerson;

    /** @var integer */
    protected $optOutCount;

    /** @var integer */
    protected $optInCount;

    /** @var string */
    protected $sentDate;

    /**
     * @return int
     */
    public function getTotalRecipients()
    {
        return $this->totalRecipients;
    }

    /**
     * @return int
     */
    public function getTotalSms()
    {
        return $this->totalSms;
    }

    /**
     * @return int
     */
    public function getTotalSent()
    {
        return $this->totalSent;
    }

    /**
     * @return int
     */
    public function getTotalReceived()
    {
        return $this->totalReceived;
    }

    /**
     * @return int
     */
    public function getTotalFailed()
    {
        return $this->totalFailed;
    }

    /**
     * @return int
     */
    public function getInternationalCount()
    {
        return $this->internationalCount;
    }

    /**
     * @return int
     */
    public function getUsaCount()
    {
        return $this->usaCount;
    }

    /**
     * @return float
     */
    public function getPerPerson()
    {
        return $this->perPerson;
    }

    /**
     * @return int
     */
    public function getOptOutCount()
    {
        return $this->optOutCount;
    }

    /**
     * @return int
     */
    public function getOptInCount()
    {
        return $this->optInCount;
    }

    /**
     * @return string
     */
    public function getSentDate()
    {
        return $this->sentDate;
    }
}