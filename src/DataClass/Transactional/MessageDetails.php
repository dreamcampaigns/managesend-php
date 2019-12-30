<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Transactional;

/**
 * Class Message
 * @package Managesend\DataClass\Transactional
 */
class MessageDetails extends Message
{
    /** @var int */
    protected $totalOpens;

    /** @var int */
    protected $totalClicks;

    /** @var array */
    protected $attachments;

    /** @var array */
    protected $data;

    /** @var string */
    protected $content;

    /**
     * @return int
     */
    public function getTotalOpens()
    {
        return $this->totalOpens;
    }

    /**
     * @return int
     */
    public function getTotalClicks()
    {
        return $this->totalClicks;
    }

    /**
     * @return array
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}