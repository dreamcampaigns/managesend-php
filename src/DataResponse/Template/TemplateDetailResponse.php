<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Template;

use Managesend\Hydrator\ResourceResponse;
use Managesend\HttpClient\Response;

/**
 * Class TemplateDetailResponse
 * @package Managesend\DataResponse\Template
 *
 * @method  \Managesend\DataClass\Template\TemplateDetails getData()
 */
class TemplateDetailResponse extends ResourceResponse
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\Template\TemplateDetails");
    }
}