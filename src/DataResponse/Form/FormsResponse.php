<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Form;

use Managesend\Hydrator\ResourceResponseCollection;
use Managesend\HttpClient\Response;

/**
 * Class FormsResponse
 * @package Managesend\DataResponse\Form
 *
 * @method  \Managesend\DataClass\Form\Form[] getData()
 */
class FormsResponse extends ResourceResponseCollection
{
    public function __construct(Response $response)
    {
        parent::__construct($response,"\Managesend\DataClass\Form\Form");
    }
}