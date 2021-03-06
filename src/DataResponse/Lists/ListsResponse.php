<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Lists;

use Managesend\Hydrator\ResourceResponseCollection;
use Managesend\HttpClient\Response;

/**
 * Class ListsResponse
 * @package Managesend\DataResponse\Lists
 *
 * @method  \Managesend\DataClass\Lists\Lists[] getData()
 */
class ListsResponse extends ResourceResponseCollection
{
    public function __construct(Response $response)
    {
        parent::__construct($response,"\Managesend\DataClass\Lists\Lists");
    }
}