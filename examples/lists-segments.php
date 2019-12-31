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

//get lists
$result = $restClient->lists()->getLists();
$lists = $result->getData();
foreach ($lists as $list){
    print $list->getListName();
    print $list->getListId();
    //or
    print_r($list->toArray());
}

//get segments
$result = $restClient->segment()->getListSegments(10);
$segments = $result->getData();
foreach ($segments as $segment){
    print $segment->getName();
    print $segment->getSegmentId();
    print $segment->getSubscriberCount();
    //or
    print_r($segment->toArray());
}

//create a list
$result = $restClient->lists()->createList(array(
    "listName"=>"new list",
    "unsubscribeType"=>"all",
));
print $result->getData()->getListId();

//get custom fields
$result = $restClient->lists()->getListCustomfields(1);
$customFields = $result->getData();
foreach ($customFields as $customField){
    print $customField->getFieldName();
    print $customField->getName();
    print $customField->getType();
    print_r($customField->getOptions());
    print $customField->getTagName();
}

//create custom field
$result = $restClient->lists()->createCustomfield(10,array(
    "type"=>"date",
    "name"=>"birthDay",
    "visible"=>true,
    "required"=>false
));
print $result->getData()->getTagName();

//get segment subscribers
$result = $restClient->segment()->getActiveSubscribers(10,array("page"=>1,"order_by"=>"mobile"));
$subscribers = $result->getData();
foreach ($subscribers as $subscriber){
    print $subscriber->getMobile();
    print $subscriber->getEmail();
    print $subscriber->getSmsStatus();
    print $subscriber->getStatus();
    print_r($subscriber->getCustomFields());
    print $subscriber->getCustomFieldValue("custom_33");
    //or
    print_r($subscriber->toArray());
}
$pageInfo = $result->getPageInfo();
print $pageInfo->getTotalPages();