<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Subscriber;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class SmsUnsubscribe
 * @package Managesend\DataClass\Subscriber
 */
class SmsUnsubscribe extends AbstractHydrator
{
    /** @var string */
    protected $mobile;

    /** @var string */
    protected $statusDate;

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @return string
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }
}