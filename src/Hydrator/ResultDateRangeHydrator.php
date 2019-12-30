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
 * Class ResultDateRangeHydrator
 * @package Managesend\Hydrator
 */
class ResultDateRangeHydrator extends AbstractHydrator
{
    /** @var string */
    protected $fromDate;

    /** @var string */
    protected $toDate;

    /**
     * @return string
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * @return string
     */
    public function getToDate()
    {
        return $this->toDate;
    }
}