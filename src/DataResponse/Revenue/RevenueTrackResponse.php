<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Revenue;

use Managesend\Hydrator\ResourceResponse;
use Managesend\HttpClient\Response;

/**
 * Class RevenueTrackResponse
 * @package Managesend\DataResponse\Revenue
 *
 * @method  \Managesend\DataClass\Revenue\RevenueTrack getData()
 */
class RevenueTrackResponse extends ResourceResponse
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\Revenue\RevenueTrack");
    }
}