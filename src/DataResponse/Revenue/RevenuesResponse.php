<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Revenue;

use Managesend\Hydrator\ResourceResponseCollection;
use Managesend\HttpClient\Response;

/**
 * Class RevenuesResponse
 * @package Managesend\DataResponse\Revenue
 *
 * @method  \Managesend\DataClass\Revenue\Revenue[] getData()
 */
class RevenuesResponse extends ResourceResponseCollection
{
    public function __construct(Response $response)
    {
        parent::__construct($response,"\Managesend\DataClass\Revenue\Revenue");
    }
}