<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\SiteMessage;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class SiteMessage
 * @package Managesend\DataClass\SiteMessage
 */
class SiteMessage extends AbstractHydrator
{
    /** @var integer */
    protected $sitemessageId;

    /** @var integer */
    protected $listId;

    /** @var string */
    protected $name;

    /** @var string */
    protected $startDate;

    /** @var string */
    protected $endDate;

    /** @var boolean */
    protected $isActive;

    /** @var integer */
    protected $timeDelay;

    /** @var boolean */
    protected $leaveIntent;

    /** @var boolean */
    protected $useTheme;

    /** @var string */
    protected $theme;

    /** @var integer */
    protected $timeout;

    /** @var boolean */
    protected $isModal;

    /** @var string */
    protected $createDate;

    /**
     * @return int
     */
    public function getSitemessageId()
    {
        return $this->sitemessageId;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * @return int
     */
    public function getTimeDelay()
    {
        return $this->timeDelay;
    }

    /**
     * @return bool
     */
    public function isLeaveIntent()
    {
        return $this->leaveIntent;
    }

    /**
     * @return bool
     */
    public function isUseTheme()
    {
        return $this->useTheme;
    }

    /**
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @return int
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @return bool
     */
    public function isModal()
    {
        return $this->isModal;
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
}