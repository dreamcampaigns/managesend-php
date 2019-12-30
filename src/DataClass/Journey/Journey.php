<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Journey;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class Journey
 * @package Managesend\DataClass\Journey
 */
class Journey extends AbstractHydrator
{
    /** @var integer */
    protected $journeyId;

    /** @var string */
    protected $journeyName;

    /** @var string */
    protected $triggerType;

    /** @var boolean */
    protected $isActive;

    /** @var string */
    protected $createDate;

    /**
     * @return int
     */
    public function getJourneyId()
    {
        return $this->journeyId;
    }

    /**
     * @return string
     */
    public function getJourneyName()
    {
        return $this->journeyName;
    }

    /**
     * @return string
     */
    public function getTriggerType()
    {
        return $this->triggerType;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
}