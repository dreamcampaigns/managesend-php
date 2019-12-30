<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Journey;

use Managesend\Hydrator\ResourceResponseCollection;
use Managesend\HttpClient\Response;

/**
 * Class JourneysResponse
 * @package Managesend\DataResponse\Journey
 *
 * @method  \Managesend\DataClass\Journey\Journey[] getData()
 */
class JourneysResponse extends ResourceResponseCollection
{
    public function __construct(Response $response)
    {
        parent::__construct($response,"\Managesend\DataClass\Journey\Journey");
    }
}