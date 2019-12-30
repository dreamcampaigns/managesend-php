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
 * Class MessageSms
 * @package Managesend\DataClass\Transactional
 */
class MessageSms extends AbstractHydrator
{
    /** @var string */
    protected $messageId;

    /** @var string */
    protected $type;

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