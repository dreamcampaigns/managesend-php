<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Webhook;

use Managesend\Hydrator\ResourceResponseCollection;
use Managesend\HttpClient\Response;

/**
 * Class WebhooksResponse
 * @package Managesend\DataResponse\Webhook
 *
 * @method  \Managesend\DataClass\Webhook\Webhook[] getData()
 */
class WebhooksResponse extends ResourceResponseCollection
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\Webhook\Webhook");
    }
}