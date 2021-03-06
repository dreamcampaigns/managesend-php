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
 * Class SuppressEmailsResponse
 * @package Managesend\DataResponse\Subscriber
 *
 * @method  \Managesend\DataClass\Subscriber\EmailUnsubscribe[] getData()
 */
class SuppressEmailsResponse extends ResourceResponseCollection
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\Subscriber\EmailUnsubscribe");
    }
}