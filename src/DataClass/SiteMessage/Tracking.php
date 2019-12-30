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
 * Class Tracking
 * @package Managesend\DataClass\SiteMessage
 */
class Tracking extends AbstractHydrator
{
    /** @var string */
    protected $trackingId;

    /**
     * @return string
     */
    public function getTrackingId()
    {
        return $this->trackingId;
    }
}