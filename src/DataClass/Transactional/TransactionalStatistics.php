<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Transactional;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class TransactionalStatistics
 * @package Managesend\DataClass\Transactional
 */
class TransactionalStatistics extends AbstractHydrator
{
    /** @var string */
    protected $transactionalId;

    /** @var string */
    protected $name;

    /** @var string */
    protected $type;

    /** @var string */
    protected $fromDate;

    /** @var string */
    protected $toDate;

    /** @var int */
    protected $totalSent;

    /** @var int */
    protected $totalDelivered;

    /** @var int */
    protected $totalBounced;

    /** @var int */
    protected $totalFailed;

    /** @var int */
    protected $totalUnsubscribed;

    /** @var int */
    protected $totalOpened;

    /** @var int */
    protected $totalClicked;

    /**
     * @return string
     */
    public function getTransactionalId()
    {
        return $this->transactionalId;
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
    public function getTotalSent()
    {
        return $this->totalSent;
    }

    /**
     * @return int
     */
    public function getTotalDelivered()
    {
        return $this->totalDelivered;
    }

    /**
     * @return int
     */
    public function getTotalBounced()
    {
        return $this->totalBounced;
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
    public function getTotalUnsubscribed()
    {
        return $this->totalUnsubscribed;
    }

    /**
     * @return int
     */
    public function getTotalOpened()
    {
        return $this->totalOpened;
    }

    /**
     * @return int
     */
    public function getTotalClicked()
    {
        return $this->totalClicked;
    }
}