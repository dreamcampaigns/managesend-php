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
 * Class LinkSummary
 * @package Managesend\DataClass\SiteMessage
 */
class LinkSummary extends AbstractHydrator
{
    /** @var string */
    protected $refferingUrl;

    /** @var integer */
    protected $displayCount;

    /**
     * @return string
     */
    public function getRefferingUrl()
    {
        return $this->refferingUrl;
    }

    /**
     * @return int
     */
    public function getDisplayCount()
    {
        return $this->displayCount;
    }
}