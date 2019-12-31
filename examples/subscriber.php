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

//create a subscriber
$result = $restClient->subscriber()->addUpdateSubscriber(10,array(
    "email"=>"john@example.com",
    "mobile"=>"+11234567891",
    "customFields"=>array("custom_10"=>"Yes","custom_33"=>"1999-01-01"),
    "strict"=>true
));
print $result->getData()->getJoinDate();

//find a subscriber by email
$result = $restClient->subscriber()->getSubscriberDetails(1,"john@example.com");
$subscribers = $result->getData();
print_r($subscribers[0]->toArray());

//find a subscriber by mobile
$result = $restClient->subscriber()->getSubscriberDetails(1,"+11234567891");
$subscribers = $result->getData();
print_r($subscribers[0]->toArray());

//manually unsubscribe an email subscriber
$result = $restClient->subscriber()->unsubscribeEmailSubscriber(1,"john@example.com");
$subscriber = $result->getData();
print $subscriber->getStatus();

//manually unsubscribe a sms subscriber
$result = $restClient->subscriber()->optoutSmsSubscriber(1,"+11234567891");
$subscriber = $result->getData();
print $subscriber[0]->getSmsStatus();

//get email suppression list
$result = $restClient->subscriber()->getEmailSuppressionlist(10,array("page"=>1,"order_by"=>"email"));
$subscribers = $result->getData();
foreach ($subscribers as $subscriber){
    print $subscriber->getStatus();
    print $subscriber->getEmail();
    print $subscriber->getStatusDate();
    print $subscriber->getBounceType();
    print $subscriber->getBounceReason();
    //or
    print_r($subscriber->toArray());
}
$pageInfo = $result->getPageInfo();
print $pageInfo->getTotalPages();

//get sms suppression list
$result = $restClient->subscriber()->getSmsSuppressionlist(10,array("page"=>1,"order_by"=>"status"));
$subscribers = $result->getData();
foreach ($subscribers as $subscriber){
    print $subscriber->getMobile();
    print $subscriber->getEmail();
    print $subscriber->getStatusDate();
    //or
    print_r($subscriber->toArray());
}
$pageInfo = $result->getPageInfo();
print $pageInfo->getTotalPages();