<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Subscriber;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class Statistics
 * @package Managesend\DataClass\Subscriber
 */
class Statistics extends AbstractHydrator
{
    /** @var integer */
    protected $listId;

    /** @var string */
    protected $email;

    /** @var string */
    protected $ipAddress;

    /** @var string */
    protected $latitude;

    /** @var string */
    protected $longitude;

    /** @var string */
    protected $timeZone;

    /** @var string */
    protected $regionName;

    /** @var string */
    protected $city;

    /** @var string */
    protected $countryCode;

    /** @var string */
    protected $countryName;

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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @return string
     */
    public function getRegionName()
    {
        return $this->regionName;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }
}