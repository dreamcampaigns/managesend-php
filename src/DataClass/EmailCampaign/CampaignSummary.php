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
 * Class CampaignSummary
 * @package Managesend\DataClass\EmailCampaign
 */
class CampaignSummary extends AbstractHydrator
{
    /** @var integer */
    protected $recipients;

    /** @var integer */
    protected $opened;

    /** @var integer */
    protected $clicked;

    /** @var integer */
    protected $uniqueOpened;

    /** @var integer */
    protected $uniqueClicked;

    /** @var integer */
    protected $viewed;

    /** @var integer */
    protected $unsubscribed;

    /** @var integer */
    protected $spamComplaints;

    /** @var integer */
    protected $desktop;

    /** @var float */
    protected $desktopPercentage;

    /** @var integer */
    protected $tablet;

    /** @var float */
    protected $tabletPercentage;

    /** @var integer */
    protected $mobile;

    /** @var float */
    protected $mobilePercentage;

    /** @var array */
    protected $emailClients;

    /** @var array */
    protected $operatingSystems;

    /** @var array */
    protected $browsers;

    /**
     * @return int
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @return int
     */
    public function getOpened()
    {
        return $this->opened;
    }

    /**
     * @return int
     */
    public function getClicked()
    {
        return $this->clicked;
    }

    /**
     * @return int
     */
    public function getUniqueOpened()
    {
        return $this->uniqueOpened;
    }

    /**
     * @return int
     */
    public function getUniqueClicked()
    {
        return $this->uniqueClicked;
    }

    /**
     * @return int
     */
    public function getViewed()
    {
        return $this->viewed;
    }

    /**
     * @return int
     */
    public function getUnsubscribed()
    {
        return $this->unsubscribed;
    }

    /**
     * @return int
     */
    public function getSpamComplaints()
    {
        return $this->spamComplaints;
    }

    /**
     * @return int
     */
    public function getDesktop()
    {
        return $this->desktop;
    }

    /**
     * @return float
     */
    public function getDesktopPercentage()
    {
        return $this->desktopPercentage;
    }

    /**
     * @return int
     */
    public function getTablet()
    {
        return $this->tablet;
    }

    /**
     * @return float
     */
    public function getTabletPercentage()
    {
        return $this->tabletPercentage;
    }

    /**
     * @return int
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @return float
     */
    public function getMobilePercentage()
    {
        return $this->mobilePercentage;
    }

    /**
     * @return array
     */
    public function getEmailClients()
    {
        return $this->emailClients;
    }

    /**
     * @return array
     */
    public function getOperatingSystems()
    {
        return $this->operatingSystems;
    }

    /**
     * @return array
     */
    public function getBrowsers()
    {
        return $this->browsers;
    }
}