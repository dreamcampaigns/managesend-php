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
 * Class ClickSummary
 * @package Managesend\DataClass\SiteMessage
 */
class ClickSummary extends AbstractHydrator
{
    /** @var string */
    protected $keyword;

    /** @var integer */
    protected $clickCount;

    /**
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @return int
     */
    public function getClickCount()
    {
        return $this->clickCount;
    }
}