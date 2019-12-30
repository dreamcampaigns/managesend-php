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
 * Class ListSubscriber
 * @package Managesend\DataClass\Subscriber
 */
class ListSubscriber extends AbstractHydrator
{
    /** @var integer */
    protected $listId;

    /** @var string */
    protected $listName;

    /** @var string */
    protected $createDate;

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
    public function getListName()
    {
        return $this->listName;
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
}