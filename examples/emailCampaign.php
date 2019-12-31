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
$result = $restClient->emailCampaign()->getCampaignsSent();
$campaigns = $result->getData();
foreach ($campaigns as $campaign){
    print $campaign->getCampaignId();
    print $campaign->getSentDate();
    print $campaign->getCampaignType();
    print $campaign->getTemplateId();
    print $campaign->getTotalRecipients();
    //or
    print_r($campaign->toArray());
}

//get scheduled campaigns
$result = $restClient->emailCampaign()->getCampaignsScheduled();
$campaigns = $result->getData();
foreach ($campaigns as $campaign){
    print $campaign->getCampaignId();
    print $campaign->getCreateDate();
    print $campaign->getSubject();
    print $campaign->getFromEmail();
    print $campaign->getTotalRecipients();
}

//unschedule a campaign
$result = $restClient->emailCampaign()->unscheduleCampaign(1);
$campaign = $result->getData();
print $campaign->getCreateDate();

//create new campaign
$result = $restClient->emailCampaign()->createCampaign(array(
    "campaignName"=>"test campaign",
    "subject"=>"test",
    "fromName"=>"test company",
    "fromEmail"=>"test@example.com",
    "templateId"=>"1",
    "segmentIds"=>array("2"),
    "sendDateTime"=>"2018-12-23 09:10"
));
$campaign = $result->getData();
print $campaign->getCampaignId();

//delete a campaign
$campaignDeleted = $restClient->emailCampaign()->deleteCampaign(1);
if($campaignDeleted){
    print "campaign deleted successfully";
}

//get campaign recipients
$result = $restClient->emailCampaign()->getCampaignRecipients(1, array("page" => 1, "order_by" => "email"));
$campaigns = $result->getData();
foreach ($campaigns as $campaign){
    print $campaign->getEmail();
    print $campaign->getListId();
    print $campaign->getStatus();
}
$campaignPages = $result->getPageInfo();
print $campaignPages->getTotalCount();
print $campaignPages->getTotalPages();

