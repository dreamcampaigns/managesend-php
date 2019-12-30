<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Clients;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class FromEmail
 * @package Managesend\DataClass\Clients
 *
 */
class FromEmail extends AbstractHydrator
{
    /** @var string */
    protected $emailId;

    /** @var string */
    protected $email;

    /** @var boolean */
    protected $verified;

    /**
     * @return string
     */
    public function getEmailId()
    {
        return $this->emailId;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return bool
     */
    public function isVerified()
    {
        return $this->verified;
    }
}