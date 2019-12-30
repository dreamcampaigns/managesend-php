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
 * Class Bounce
 * @package Managesend\DataClass\Subscriber
 */
class Bounce extends AbstractHydrator
{
    /** @var integer */
    protected $listId;

    /** @var string */
    protected $email;

    /** @var string */
    protected $status;

    /** @var string */
    protected $bounceType;

    /** @var string */
    protected $bounceReason;

    /** @var string */
    protected $statusDate;

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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getBounceType()
    {
        return $this->bounceType;
    }

    /**
     * @return string
     */
    public function getBounceReason()
    {
        return $this->bounceReason;
    }

    /**
     * @return string
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }
}