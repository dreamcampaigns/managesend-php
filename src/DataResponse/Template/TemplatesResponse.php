<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Template;

use Managesend\Hydrator\ResourceResponseCollection;
use Managesend\HttpClient\Response;

/**
 * Class TemplatesResponse
 * @package Managesend\DataResponse\Template
 *
 * @method  \Managesend\DataClass\Template\Template[] getData()
 */
class TemplatesResponse extends ResourceResponseCollection
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\Template\Template");
    }
}