<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Managesend\RestClient;

$apiKey = "ACXXXXXX";
$apiSecret = "YXYXYX";
$clientId = "a6hsgw74dw0001om4yrgfen8";

$restClient = new RestClient($apiKey,$apiSecret,$clientId);

//send a revenue data
$result = $restClient->revenue()->trackRevenue(10,array(
    "email"=>"john@example.com",
    "orderNum"=>"878458",
    "productKey"=>"ABC-784",
    "totalRevenue"=>"120.54",
    "startDate"=>"2018-05-01"
));
$revenue = $result->getData();
print $revenue->isValid();
print $revenue->isAbandoned();
print_r($revenue->toArray());

//get revenue transactions
$result = $restClient->revenue()->getRevenueTransactions(10,array("from_date"=>"2018-10-01","to_date"=>"2018-10-30","page"=>1,"order_by"=>"email"));
$revenues = $result->getData();
foreach ($revenues as $revenue){
    print $revenue->getStatus();
    print $revenue->getEmail();
    print $revenue->getCreateDate();
    print $revenue->getListId();
    print $revenue->getOrderNum();
    //or
    print_r($revenue->toArray());
}
$pageInfo = $result->getPageInfo();
print $pageInfo->getTotalPages();

//get revenue summary
$result = $restClient->revenue()->getRevenueSummary(10);
$revenue = $result->getData();
print $revenue->getAbandonedCount();
print $revenue->getAbandonedRevenue();
print $revenue->getRecoveredCount();
print $revenue->getRecoveredRevenue();
