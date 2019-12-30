<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\SmsCampaign;

use Managesend\Hydrator\ResourceResponseCollection;
use Managesend\HttpClient\Response;
use Managesend\DataResponse\EmailCampaign\SentCampaign;

/**
 * Class DraftCampaignsResponse
 * @package Managesend\DataResponse\SmsCampaign
 *
 * @method  \Managesend\DataClass\SmsCampaign\DraftCampaign[] getData()
 */
class DraftCampaignsResponse extends ResourceResponseCollection
{
    public function __construct(Response $response)
    {
        parent::__construct($response,"\Managesend\DataClass\SmsCampaign\DraftCampaign");
    }
}