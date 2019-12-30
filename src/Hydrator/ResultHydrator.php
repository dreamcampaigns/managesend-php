<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Hydrator;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class ResultHydrator
 * @package Managesend\Hydrator
 */
class ResultHydrator extends AbstractHydrator
{
    /** @var integer */
    protected $totalCount;

    /** @var integer */
    protected $totalPages;

    /** @var integer */
    protected $pageNumber;

    /** @var integer */
    protected $pageSize;

    /** @var string */
    protected $orderBy;

    /** @var string */
    protected $direction;

    /**
     * @return int
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @return string
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }
}