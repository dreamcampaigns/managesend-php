<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\SiteMessage;

use Managesend\Hydrator\ResourceResponseCollection;
use Managesend\HttpClient\Response;

/**
 * Class SiteMessagesResponse
 * @package Managesend\DataResponse\SiteMessage
 *
 * @method  \Managesend\DataClass\SiteMessage\SiteMessage[] getData()
 */
class SiteMessagesResponse extends ResourceResponseCollection
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\SiteMessage\SiteMessage");
    }
}