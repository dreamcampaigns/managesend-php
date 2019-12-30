<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\EmailCampaign;

use Managesend\Hydrator\ResourceResponseCollection;
use Managesend\HttpClient\Response;
use Managesend\DataResponse\EmailCampaign\SentCampaign;

/**
 * Class SentCampaignsResponse
 * @package Managesend\DataResponse\EmailCampaign
 *
 * @method  \Managesend\DataClass\EmailCampaign\SentCampaign[] getData()
 */
class SentCampaignsResponse extends ResourceResponseCollection
{
    public function __construct(Response $response)
    {
        parent::__construct($response,"\Managesend\DataClass\EmailCampaign\SentCampaign");
    }
}