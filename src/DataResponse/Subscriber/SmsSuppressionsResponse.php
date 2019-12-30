<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Subscriber;

use Managesend\Hydrator\ResourceResponsePage;
use Managesend\HttpClient\Response;

/**
 * Class SmsSuppressionsResponse
 * @package Managesend\DataResponse\Subscriber
 *
 * @method  \Managesend\Hydrator\ResultHydrator getPageInfo()
 * @method  \Managesend\DataClass\Subscriber\SmsFail[] getData()
 */
class SmsSuppressionsResponse extends ResourceResponsePage
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\Hydrator\ResultHydrator");
        $this->setResultsHydratorClass("\Managesend\DataClass\Subscriber\SmsFail");
    }
}