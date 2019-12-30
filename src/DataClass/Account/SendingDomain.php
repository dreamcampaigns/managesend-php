<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Account;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class SendingDomain
 * @package Managesend\DataClass\Account
 *
 */
class SendingDomain extends AbstractHydrator
{
    /** @var string */
    protected $domain;

    /** @var boolean */
    protected $dkimVerified;

    /** @var boolean */
    protected $spfVerified;

    /** @var string */
    protected $modifyDate;

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @return bool
     */
    public function isDkimVerified()
    {
        return $this->dkimVerified;
    }

    /**
     * @return bool
     */
    public function isSpfVerified()
    {
        return $this->spfVerified;
    }

    /**
     * @return string
     */
    public function getModifyDate()
    {
        return $this->modifyDate;
    }
}