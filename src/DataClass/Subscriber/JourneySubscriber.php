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
 * Class JourneySubscriber
 * @package Managesend\DataClass\Subscriber
 */
class JourneySubscriber extends AbstractHydrator
{
    /** @var string */
    protected $email;

    /** @var string */
    protected $mobile;

    /** @var string */
    protected $emailDate;

    /** @var string */
    protected $smsDate;

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
    public function getEmailDate()
    {
        return $this->emailDate;
    }

    /**
     * @return string
     */
    public function getSmsDate()
    {
        return $this->smsDate;
    }
}