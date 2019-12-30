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
 * Class Message
 * @package Managesend\DataClass\Transactional
 */
class Message extends AbstractHydrator
{
    /** @var string */
    protected $messageId;

    /** @var string */
    protected $type;

    /** @var string */
    protected $fromEmail;

    /** @var string */
    protected $fromName;

    /** @var string */
    protected $toEmail;

    /** @var string */
    protected $toName;

    /** @var string */
    protected $subject;

    /** @var string */
    protected $toNumber;

    /** @var string */
    protected $status;

    /** @var string */
    protected $date;

    /**
     * @return string
     */
    public function getMessageId()
    {
        return $this->messageId;
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
    public function getFromEmail()
    {
        return $this->fromEmail;
    }

    /**
     * @return string
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * @return string
     */
    public function getToEmail()
    {
        return $this->toEmail;
    }

    /**
     * @return string
     */
    public function getToName()
    {
        return $this->toName;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getToNumber()
    {
        return $this->toNumber;
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
    public function getDate()
    {
        return $this->date;
    }
}