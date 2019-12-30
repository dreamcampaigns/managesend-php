<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Journey;

use Managesend\Hydrator\ResourceResponsePage;
use Managesend\HttpClient\Response;

/**
 * Class JourneyStatisticsResponse
 * @package Managesend\DataResponse\Journey
 *
 * @method  \Managesend\Hydrator\ResultHydrator getPageInfo()
 * @method  \Managesend\DataClass\Subscriber\Statistics[] getData()
 */
class JourneyStatisticsResponse extends ResourceResponsePage
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\Hydrator\ResultHydrator");
        $this->setResultsHydratorClass("\Managesend\DataClass\Subscriber\Statistics");
    }
}