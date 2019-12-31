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

//get a transactional details
$result = $restClient->transactional()->getTransactionalDetails("sdaika76a7sdadsk");
$transactional = $result->getData();
if($transactional->getType() == "email") {
    print $transactional->getFromEmail();
    print $transactional->getTemplateId();
    print $transactional->getSubject();
}
if($transactional->getType() == "sms") {
    print $transactional->getSmsContent();
    print $transactional->isDynamicSmsContent();
    print $transactional->getListId();
}

//get a transactional summary
$result = $restClient->transactional()->getTransactionalStatistics("sdaika76a7sdadsk","2018-01-05","2018-02-05");
$transactional = $result->getData();
print $transactional->getFromDate();
print $transactional->getToDate();
print $transactional->getTotalSent();
print $transactional->getTotalClicked();
print $transactional->getTotalOpened();

//send a smart email
$result = $restClient->transactional()->sendSmartEmail("c5is8tltkk00018k9ype5lg741",array(
    "toEmail"=>"joe@example.com",
    "toName"=>"Joe Smith",
    "data"=>array("promoCode"=>"XYZ"),
    "attachments"=>"https://www.example.com/place/Taurus-Mountains.pdf"
));
$newEmail = $result->getData();
print $newEmail->getMessageId();
print $newEmail->getStatus();

//send a dynamic email
$result = $restClient->transactional()->sendDynamicEmail("c5is8tltkk00018k9ype5lg741",array(
    "toEmail"=>"joe@example.com",
    "toName"=>"Joe Smith",
    "subject"=>"Happy Birthday",
    "content"=>"<html><head></head><body></body></html>",
    "data"=>array("promoCode"=>"XYZ"),
    "attachments"=>"https://www.example.com/place/Taurus-Mountains.pdf"
));
$newEmail = $result->getData();
print $newEmail->getMessageId();
print $newEmail->getStatus();

//send a smart sms
$result = $restClient->transactional()->sendSmartSms("c5is8tltkk00018k9ype5lg741",array(
    "toNumber"=>"+1234567891",
    "data"=>array("promoCode"=>"BIRTH16"),
));
$newSms = $result->getData();
print $newSms->getMessageId();
print $newSms->getStatus();

//send a dynamic sms
$result = $restClient->transactional()->sendDynamicSms("c5is8tltkk00018k9ype5lg741",array(
    "toNumber"=>"+1234567891",
    "content"=>"Hello Joe, your password has been reset.",
));
$newSms = $result->getData();
print $newSms->getMessageId();
print $newSms->getStatus();