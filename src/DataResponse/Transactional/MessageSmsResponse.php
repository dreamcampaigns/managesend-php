<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Transactional;

use Managesend\Hydrator\ResourceResponse;
use Managesend\HttpClient\Response;

/**
 * Class MessageSmsResponse
 * @package Managesend\DataResponse\Transactional
 *
 * @method  \Managesend\DataClass\Transactional\MessageSms getData()
 */
class MessageSmsResponse extends ResourceResponse
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\Transactional\MessageSms");
    }
}