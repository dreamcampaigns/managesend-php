<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Webhook;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class Webhook
 * @package Managesend\DataClass\Webhook
 */
class Webhook extends AbstractHydrator
{
    /** @var string */
    protected $webhookId;

    /** @var string */
    protected $events;

    /** @var string */
    protected $url;

    /** @var boolean */
    protected $active;

    /** @var string */
    protected $createDate;

    /**
     * @return string
     */
    public function getWebhookId()
    {
        return $this->webhookId;
    }

    /**
     * @return string
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param string $event
     *
     * @return bool
     */
    public function hasEvent($event)
    {
        return \in_array($event,$this->events);
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
}