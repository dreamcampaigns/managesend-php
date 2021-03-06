<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\SiteMessage;

use Managesend\Hydrator\ResourceResponse;
use Managesend\HttpClient\Response;

/**
 * Class TrackingResponse
 * @package Managesend\DataResponse\SiteMessage
 *
 * @method  \Managesend\DataClass\SiteMessage\Tracking getData()
 */
class TrackingResponse extends ResourceResponse
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\SiteMessage\Tracking");
    }
}