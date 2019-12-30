<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Clients;

use Managesend\HttpClient\Response;
use Managesend\Hydrator\ResourceResponseCollection;

/**
 * Class FromEmailsResponse
 * @package Managesend\DataResponse\Clients
 *
 * @method  \Managesend\DataClass\Clients\FromEmail[] getData()
 */
class FromEmailsResponse extends ResourceResponseCollection
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\Clients\FromEmail");
    }
}