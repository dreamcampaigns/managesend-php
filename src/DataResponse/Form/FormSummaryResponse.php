<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Form;

use Managesend\HttpClient\Response;
use Managesend\Hydrator\ResourceResponse;

/**
 * Class FormSummary
 * @package Managesend\DataResponse\Form
 *
 * @method  \Managesend\DataClass\Form\FormSummary getData()
 */
class FormSummary extends ResourceResponse
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\Form\FormSummary");
    }
}