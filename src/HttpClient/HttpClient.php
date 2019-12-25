<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\HttpClient;


interface HttpClient
{
    public function request($method, $url, $params = array(), $data = array(),
                            $headers = array(), $user = NULL, $password = NULL,
                            $timeout = NULL);
}