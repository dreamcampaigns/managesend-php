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

//get sent campaigns
$result = $restClient->smsCampaign()->getCampaignsSent();
$campaigns = $result->getData();
foreach ($campaigns as $campaign){
    print $campaign->getCampaignId();
    print $campaign->getSentDate();
    print $campaign->getCampaignType();
    print_r($campaign->getListIds());
    print $campaign->getTotalRecipients();
    //or
    print_r($campaign->toArray());
}

//get scheduled campaigns
$result = $restClient->smsCampaign()->getCampaignsScheduled();
$campaigns = $result->getData();
foreach ($campaigns as $campaign){
    print $campaign->getCampaignId();
    print $campaign->getCreateDate();
    print $campaign->getScheduledDate();
    print $campaign->getScheduledTimezone();
    print $campaign->getTotalRecipients();
}

//unschedule a campaign
$result = $restClient->smsCampaign()->unscheduleCampaign(1);
$campaign = $result->getData();
print $campaign->getCreateDate();

//create new campaign
$result = $restClient->smsCampaign()->createCampaign(array(
    "campaignName"=>"test campaign",
    "campaignType"=>"sms",
    "content"=>"Hi Joe, here's a promo code for you on your birthday. THANKS20",
    "segmentIds"=>array("2"),
    "sendDateTime"=>"2018-12-23 09:10",
    "confirmationEmail"=>"test@example.com",
    "shortenUrls"=>true
));
$campaign = $result->getData();
print $campaign->getCampaignId();

//delete a campaign
$campaignDeleted = $restClient->smsCampaign()->deleteCampaign(1);
if($campaignDeleted){
    print "campaign deleted successfully";
}

//get campaign recipients
$result = $restClient->smsCampaign()->getCampaignRecipients(1, array("page" => 1, "order_by" => "email"));
$campaigns = $result->getData();
foreach ($campaigns as $campaign){
    print $campaign->getMobile();
    print $campaign->getListId();
    print $campaign->getStatus();
}
$campaignPages = $result->getPageInfo();
print $campaignPages->getTotalCount();
print $campaignPages->getTotalPages();

//get campaign summary
$result = $restClient->smsCampaign()->getCampaignSummary(1);
$campaign = $result->getData();
print $campaign->getTotalSent();
print $campaign->getOptOutCount();