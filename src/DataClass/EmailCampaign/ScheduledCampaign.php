<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\EmailCampaign;

/**
 * Class ScheduledCampaign
 * @package Managesend\DataClass\EmailCampaign
 */
class ScheduledCampaign extends BaseCampaign
{
    /** @var string */
    protected $scheduledDate;

    /** @var string */
    protected $scheduledTimezone;

    /** @var string */
    protected $createDate;

    /**
     * @return string
     */
    public function getScheduledDate()
    {
        return $this->scheduledDate;
    }

    /**
     * @return string
     */
    public function getScheduledTimezone()
    {
        return $this->scheduledTimezone;
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
}