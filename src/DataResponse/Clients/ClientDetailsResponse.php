<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Clients;

use Managesend\Hydrator\ResourceResponse;
use Managesend\HttpClient\Response;

/**
 * Class ClientDetailsResponse
 * @package Managesend\DataResponse\Clients
 *
 * @method  \Managesend\DataClass\Clients\ClientDetails getData()
 */
class ClientDetailsResponse extends ResourceResponse
{
    public function __construct(Response $response)
    {
        parent::__construct($response,"\Managesend\DataClass\Clients\ClientDetails");
    }
}