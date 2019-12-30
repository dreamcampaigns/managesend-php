<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Journey;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class JourneySummary
 * @package Managesend\DataClass\Journey
 */
class JourneySummary extends AbstractHydrator
{
    /** @var string */
    protected $email;

    /** @var string */
    protected $mobile;

    /** @var integer */
    protected $clicked;

    /** @var integer */
    protected $opened;

    /** @var integer */
    protected $totalEmailSent;

    /** @var integer */
    protected $totalSmsSent;

    /** @var integer */
    protected $totalCompleted;

    /** @var integer */
    protected $bounced;

    /** @var integer */
    protected $unsubscribed;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
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
    public function getOpened()
    {
        return $this->opened;
    }

    /**
     * @return int
     */
    public function getTotalEmailSent()
    {
        return $this->totalEmailSent;
    }

    /**
     * @return int
     */
    public function getTotalSmsSent()
    {
        return $this->totalSmsSent;
    }

    /**
     * @return int
     */
    public function getTotalCompleted()
    {
        return $this->totalCompleted;
    }

    /**
     * @return int
     */
    public function getBounced()
    {
        return $this->bounced;
    }

    /**
     * @return int
     */
    public function getUnsubscribed()
    {
        return $this->unsubscribed;
    }
}