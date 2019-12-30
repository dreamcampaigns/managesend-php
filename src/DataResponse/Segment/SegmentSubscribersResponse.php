<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Segment;

use Managesend\HttpClient\Response;
use Managesend\Hydrator\ResourceResponsePage;

/**
 * Class SegmentSubscribersResponse
 * @package Managesend\DataResponse\EmailCampaign
 *
 * @method  \Managesend\Hydrator\ResultHydrator getPageInfo()
 * @method  \Managesend\DataClass\Subscriber\Subscriber[] getData()
 */
class SegmentSubscribersResponse extends ResourceResponsePage
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\Hydrator\ResultHydrator");
        $this->setResultsHydratorClass("\Managesend\DataClass\Subscriber\Subscriber");
    }
}