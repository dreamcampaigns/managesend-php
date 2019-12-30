<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\Revenue;

use Managesend\Hydrator\ResourceResponsePage;
use Managesend\HttpClient\Response;

/**
 * Class TransactionsResponse
 * @package Managesend\DataResponse\Revenue
 *
 * @method  \Managesend\Hydrator\ResultDateHydrator getPageInfo()
 * @method  \Managesend\DataClass\Revenue\Transaction[] getData()
 */
class TransactionsResponse extends ResourceResponsePage
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\Hydrator\ResultDateHydrator");
        $this->setResultsHydratorClass("\Managesend\DataClass\Revenue\Transaction");
    }
}