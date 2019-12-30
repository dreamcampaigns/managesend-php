<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\SmsCampaign;

/**
 * Class SentCampaign
 * @package Managesend\DataClass\SmsCampaign
 */
class SentCampaign extends BaseCampaign
{
    /** @var string */
    protected $sentDate;

    /**
     * @return string
     */
    public function getSentDate()
    {
        return $this->sentDate;
    }
}