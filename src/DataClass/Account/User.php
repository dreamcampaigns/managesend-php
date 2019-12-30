<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Account;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class User
 * @package Managesend\DataClass\Account
 *
 */
class User extends AbstractHydrator
{
    /** @var string */
    protected $userId;

    /** @var string */
    protected $username;

    /** @var string */
    protected $accessLevel;

    /** @var string */
    protected $invitaion;

    /** @var string */
    protected $firstName;

    /** @var string */
    protected $lastName;

    /** @var boolean */
    protected $active;

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }

    /**
     * @return string
     */
    public function getInvitaion()
    {
        return $this->invitaion;
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
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }
}