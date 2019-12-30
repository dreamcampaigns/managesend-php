<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\SiteMessage;

use Managesend\HttpClient\Response;
use Managesend\Hydrator\ResourceResponsePage;

/**
 * Class ClickSummariesResponse
 * @package Managesend\DataResponse\SiteMessage
 *
 * @method  \Managesend\Hydrator\ResultDateRangeHydrator getPageInfo()
 * @method  \Managesend\DataClass\SiteMessage\ClickSummary[] getData()
 */
class ClickSummariesResponse extends ResourceResponsePage
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\Hydrator\ResultDateRangeHydrator");
        $this->setResultsHydratorClass("\Managesend\DataClass\SiteMessage\ClickSummary");
    }
}