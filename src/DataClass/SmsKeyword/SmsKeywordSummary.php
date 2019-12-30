<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\SmsKeyword;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class SmsKeywordSummary
 * @package Managesend\DataClass\Segment
 */
class SmsKeywordSummary extends AbstractHydrator
{
    /** @var string */
    protected $fromDate;

    /** @var string */
    protected $toDate;

    /** @var integer */
    protected $totalSms;

    /** @var integer */
    protected $totalSent;

    /** @var integer */
    protected $totalReceived;

    /** @var integer */
    protected $totalFailed;

    /** @var integer */
    protected $totalSubscribers;

    /** @var integer */
    protected $usaCount;

    protected $internationalCount;

    /** @var integer */
    protected $perPerson;

    /** @var integer */
    protected $optOutCount;

    /** @var integer */
    protected $optOnCount;

    /**
     * @return string
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * @return string
     */
    public function getToDate()
    {
        return $this->toDate;
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
    public function getTotalSubscribers()
    {
        return $this->totalSubscribers;
    }

    /**
     * @return int
     */
    public function getUsaCount()
    {
        return $this->usaCount;
    }

    /**
     * @return mixed
     */
    public function getInternationalCount()
    {
        return $this->internationalCount;
    }

    /**
     * @return int
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
    public function getOptOnCount()
    {
        return $this->optOnCount;
    }
}