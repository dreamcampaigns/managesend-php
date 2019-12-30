<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Subscriber;

use Managesend\Hydrator\ResourceResponseCollection;
use Managesend\HttpClient\Response;

/**
 * Class SuppressSmsResponse
 * @package Managesend\DataResponse\Subscriber
 *
 * @method  \Managesend\DataClass\Subscriber\SmsOptout[] getData()
 */
class SuppressSmsResponse extends ResourceResponseCollection
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\Subscriber\SmsOptout");
    }
}