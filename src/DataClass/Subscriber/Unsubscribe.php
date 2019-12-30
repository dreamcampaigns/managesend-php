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
 * Class Unsubscribe
 * @package Managesend\DataClass\Subscriber
 */
class Unsubscribe extends AbstractHydrator
{
    /** @var string */
    protected $email;

    /** @var string */
    protected $statusDate;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }
}