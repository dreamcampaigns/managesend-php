<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Managesend\DataResponse\EmailCampaign;

use Managesend\HttpClient\Response;
use Managesend\Hydrator\ResourceResponseCollection;

/**
 * Class DraftCampaignsResponse
 * @package Managesend\DataResponse\EmailCampaign
 *
 * @method  \Managesend\DataClass\EmailCampaign\DraftCampaign[] getData()
 */
class DraftCampaignsResponse extends ResourceResponseCollection
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\EmailCampaign\DraftCampaign");
    }
}