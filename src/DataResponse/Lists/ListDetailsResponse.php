<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Lists;

use Managesend\Hydrator\ResourceResponse;
use Managesend\HttpClient\Response;

/**
 * Class ListDetailsResponse
 * @package Managesend\DataResponse\Lists
 *
 * @method  \Managesend\DataClass\Lists\ListDetails getData()
 */
class ListDetailsResponse extends ResourceResponse
{
    public function __construct(Response $response)
    {
        parent::__construct($response,"\Managesend\DataClass\Lists\ListDetails");
    }
}