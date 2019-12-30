<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\SmsCampaign;

/**
 * Class DraftCampaign
 * @package Managesend\DataClass\SmsCampaign
 */
class DraftCampaign extends BaseCampaign
{
    /** @var string */
    protected $createDate;

    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
}