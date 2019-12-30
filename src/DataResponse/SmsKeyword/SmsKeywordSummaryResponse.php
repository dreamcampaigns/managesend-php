<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataResponse\SmsKeyword;

use Managesend\Hydrator\ResourceResponse;
use Managesend\HttpClient\Response;

/**
 * Class SmsKeywordSummaryResponse
 * @package Managesend\DataResponse\Segment
 *
 * @method  \Managesend\DataClass\SmsKeyword\SmsKeywordSummary getData()
 */
class SmsKeywordSummaryResponse extends ResourceResponse
{
    public function __construct(Response $response)
    {
        parent::__construct($response, "\Managesend\DataClass\SmsKeyword\SmsKeywordSummary");
    }
}