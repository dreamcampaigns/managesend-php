<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\EmailCampaign;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class Recipient
 * @package Managesend\DataClass\EmailCampaign
 */
class Recipient extends AbstractHydrator
{
    /** @var integer */
    protected $listId;

    /** @var string */
    protected $email;

    /** @var string */
    protected $status;

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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}