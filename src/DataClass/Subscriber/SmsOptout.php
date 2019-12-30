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
 * Class SmsOptout
 * @package Managesend\DataClass\Subscriber
 */
class SmsOptout extends AbstractHydrator
{
    /** @var integer */
    protected $listId;

    /** @var string */
    protected $email;

    /** @var string */
    protected $mobile;

    /** @var string */
    protected $smsStatus;

    /** @var string */
    protected $statusDate;

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
    public function getSmsStatus()
    {
        return $this->smsStatus;
    }

    /**
     * @return string
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }
}