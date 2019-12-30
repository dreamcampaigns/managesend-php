<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Form;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class FormSummary
 * @package Managesend\DataClass\Form
 */
class FormSummary extends AbstractHydrator
{
    /** @var string */
    protected $fromDate;

    /** @var string */
    protected $toDate;

    /** @var integer */
    protected $submitted;

    /** @var integer */
    protected $blocked;

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

    /**
     * @return int
     */
    public function getSubmitted()
    {
        return $this->submitted;
    }

    /**
     * @return int
     */
    public function getBlocked()
    {
        return $this->blocked;
    }
}