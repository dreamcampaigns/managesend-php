<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Utility;

use Managesend\Hydrator\ResourceResponse;
use Managesend\HttpClient\Response;

/**
 * Class TestConnectionResponse
 * @package Managesend\DataResponse\Utility
 *
 * @method  \Managesend\DataClass\Utility\TestConnection getData()
 */
class TestConnectionResponse extends ResourceResponse
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\Utility\TestConnection");
    }
}