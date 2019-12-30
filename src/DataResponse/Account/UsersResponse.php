<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Account;

use Managesend\Hydrator\ResourceResponseCollection;
use Managesend\HttpClient\Response;
use Managesend\DataResponse\Account\User;

/**
 * Class UsersResponse
 * @package Managesend\DataResponse\Account
 *
 * @method  \Managesend\DataClass\Account\User[] getData()
 */
class UsersResponse extends ResourceResponseCollection
{
    public function __construct(Response $response)
    {
        parent::__construct($response,"\Managesend\DataClass\Account\User");
    }
}