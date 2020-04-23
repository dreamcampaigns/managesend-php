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
    protected $event;

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
    public function getEvent()
    {
        return $this->event;
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