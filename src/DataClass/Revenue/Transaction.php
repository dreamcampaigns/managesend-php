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
 * Class Transaction
 * @package Managesend\DataClass\Revenue
 */
class Transaction extends AbstractHydrator
{
    /** @var string */
    protected $email;

    /** @var string */
    protected $mobile;

    /** @var string */
    protected $firstName;

    /** @var string */
    protected $lastName;

    /** @var integer */
    protected $listId;

    /** @var string */
    protected $status;

    /** @var string */
    protected $startDate;

    /** @var string */
    protected $endDate;

    /** @var string */
    protected $orderNum;

    /** @var string */
    protected $productKey;

    /** @var string */
    protected $productName;

    /** @var string */
    protected $productUrl;

    /** @var string */
    protected $productImageUrl;

    /** @var float */
    protected $baseRevenue;

    /** @var float */
    protected $totalRevenue;

    /** @var string */
    protected $promoCode;

    /** @var string */
    protected $marketingCode;

    /** @var string */
    protected $createDate;

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
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @return string
     */
    public function getOrderNum()
    {
        return $this->orderNum;
    }

    /**
     * @return string
     */
    public function getProductKey()
    {
        return $this->productKey;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return string
     */
    public function getProductUrl()
    {
        return $this->productUrl;
    }

    /**
     * @return string
     */
    public function getProductImageUrl()
    {
        return $this->productImageUrl;
    }

    /**
     * @return float
     */
    public function getBaseRevenue()
    {
        return $this->baseRevenue;
    }

    /**
     * @return float
     */
    public function getTotalRevenue()
    {
        return $this->totalRevenue;
    }

    /**
     * @return string
     */
    public function getPromoCode()
    {
        return $this->promoCode;
    }

    /**
     * @return string
     */
    public function getMarketingCode()
    {
        return $this->marketingCode;
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
}