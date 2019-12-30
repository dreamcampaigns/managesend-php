<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\SmsCampaign;

use Managesend\HttpClient\Response;
use Managesend\Hydrator\ResourceResponse;

/**
 * Class CampaignResponse
 * @package Managesend\DataResponse\SmsCampaign
 *
 * @method  \Managesend\DataClass\SmsCampaign\ScheduledCampaign getData()
 */
class CampaignResponse extends ResourceResponse
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\SmsCampaign\ScheduledCampaign");
    }
}