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
 * Class RevenueSummary
 * @package Managesend\DataClass\Revenue
 */
class RevenueSummary extends AbstractHydrator
{
    /** @var string */
    protected $fromDate;

    /** @var string */
    protected $toDate;

    /** @var float */
    protected $totalRevenue;

    /** @var integer */
    protected $revenueCount;

    /** @var integer */
    protected $validCount;

    /** @var integer */
    protected $recoveredCount;

    /** @var integer */
    protected $abandonedCount;

    /** @var float */
    protected $successRate;

    /** @var float */
    protected $recoveredRate;

    /** @var float */
    protected $abandonedRate;

    /** @var float */
    protected $validRevenue;

    /** @var float */
    protected $recoveredRevenue;

    /** @var float */
    protected $abandonedRevenue;

    /** @var float */
    protected $averageValue;

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
     * @return float
     */
    public function getTotalRevenue()
    {
        return $this->totalRevenue;
    }

    /**
     * @return int
     */
    public function getRevenueCount()
    {
        return $this->revenueCount;
    }

    /**
     * @return int
     */
    public function getValidCount()
    {
        return $this->validCount;
    }

    /**
     * @return int
     */
    public function getRecoveredCount()
    {
        return $this->recoveredCount;
    }

    /**
     * @return int
     */
    public function getAbandonedCount()
    {
        return $this->abandonedCount;
    }

    /**
     * @return float
     */
    public function getSuccessRate()
    {
        return $this->successRate;
    }

    /**
     * @return float
     */
    public function getRecoveredRate()
    {
        return $this->recoveredRate;
    }

    /**
     * @return float
     */
    public function getAbandonedRate()
    {
        return $this->abandonedRate;
    }

    /**
     * @return float
     */
    public function getValidRevenue()
    {
        return $this->validRevenue;
    }

    /**
     * @return float
     */
    public function getRecoveredRevenue()
    {
        return $this->recoveredRevenue;
    }

    /**
     * @return float
     */
    public function getAbandonedRevenue()
    {
        return $this->abandonedRevenue;
    }

    /**
     * @return float
     */
    public function getAverageValue()
    {
        return $this->averageValue;
    }
}