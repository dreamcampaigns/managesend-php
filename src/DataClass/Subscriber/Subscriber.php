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
 * Class BaseSubscriber
 * @package Managesend\DataClass\Subscriber
 */
class Subscriber extends AbstractHydrator
{
    /** @var string */
    protected $email;

    /** @var string */
    protected $mobile;

    /** @var string */
    protected $company;

    /** @var string */
    protected $firstName;

    /** @var string */
    protected $lastName;

    /** @var string */
    protected $address;

    /** @var string */
    protected $city;

    /** @var string */
    protected $state;

    /** @var string */
    protected $postalCode;

    /** @var string */
    protected $country;

    /** @var string */
    protected $status;

    /** @var string */
    protected $smsStatus;

    /** @var array */
    protected $customFields;

    /** @var string */
    protected $joinDate;

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
    public function getCompany()
    {
        return $this->company;
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
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
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
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
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
    public function getSmsStatus()
    {
        return $this->smsStatus;
    }

    /**
     * @return array
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param string $customField
     *
     * @return bool
     */
    public function hasCustomField($customField)
    {
        return \array_key_exists($customField,$this->customFields);
    }

    /**
     * @param string $customField
     *
     * @return mixed|null
     */
    public function getCustomFieldValue($customField)
    {
        if($this->hasCustomField($customField)){
            return $this->customFields[$customField];
        }
        return NULL;
    }

    /**
     * @return string
     */
    public function getJoinDate()
    {
        return $this->joinDate;
    }
}