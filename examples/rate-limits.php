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

//get transactional messages
$result = $restClient->transactional()->getMessages("c5is8tltkk00018k9ype5lg741",array("page"=>1,"page_size"=>250));
print $result->getResponse()->isRatelimitExceeded();
print_r($result->getResponse()->getRateLimits());
$messages = $result->getData();
print_r($messages[0]->toArray());

try {
    //get transactional messages
    $result = $restClient->transactional()->getMessageDetails("c5is8tltkk00018k9ype5lg741");
    $message = $result->getData();
    print $message->getStatus();
} catch (\Managesend\Exceptions\RestException $e) {
    if($result->getResponse()->isRatelimitExceeded()){
        print_r($result->getResponse()->getRateLimits());
    }
}