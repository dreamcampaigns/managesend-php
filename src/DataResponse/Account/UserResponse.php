<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Account;

use Managesend\HttpClient\Response;
use Managesend\Hydrator\ResourceResponse;

/**
 * Class UsersResponse
 * @package Managesend\DataResponse\Account
 *
 * @method  \Managesend\DataClass\Account\User getData()
 */
class UserResponse extends ResourceResponse
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\Account\User");
    }
}