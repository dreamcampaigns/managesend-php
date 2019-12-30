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
 * Class SitemessageResponse
 * @package Managesend\DataResponse\SiteMessage
 *
 * @method  \Managesend\DataClass\SiteMessage\SiteMessage getData()
 */
class SitemessageResponse extends ResourceResponse
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\SiteMessage\SiteMessage");
    }
}