<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Revenue;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class RevenueTrack
 * @package Managesend\DataClass\Revenue
 */
class RevenueTrack extends AbstractHydrator
{
    const STATUS_VALID = "valid";
    const STATUS_ABAN = "abandoned";

    /** @var string */
    protected $status;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return boolean
     */
    public function isAbandoned()
    {
        return $this->status == self::STATUS_ABAN;
    }

    /**
     * @return boolean
     */
    public function isValid()
    {
        return $this->status == self::STATUS_VALID;
    }
}