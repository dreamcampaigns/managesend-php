<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Segment;

use Managesend\Hydrator\ResourceResponseCollection;
use Managesend\HttpClient\Response;

/**
 * Class SegmentsResponse
 * @package Managesend\DataResponse\Segment
 *
 * @method  \Managesend\DataClass\Segment\Segment[] getData()
 */
class SegmentsResponse extends ResourceResponseCollection
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\Segment\Segment");
    }
}