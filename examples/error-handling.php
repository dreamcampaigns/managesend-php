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

try {
    $restClient = new RestClient($apiKey,$apiSecret,$clientId);
    $result = $restClient->emailCampaign()->getCampaignsSent();
    $campaigns = $result->getData();
} catch (\Managesend\Exceptions\ConfigurationException $e) {
    //apiKey, apiSecret or client id is missing
} catch (\Managesend\Exceptions\RestException $e) {
    // api returned an error
    print $e->getStatusCode();
    print $e->getMessage();
}

// catch all
try {
    $restClient = new RestClient($apiKey,$apiSecret,$clientId);
    $result = $restClient->emailCampaign()->getCampaignsSent();
    $campaigns = $result->getData();
} catch (\Exception $e) {
    // api returned an error or apiKey, apiSecret or client id is missing
    print $e->getCode();
    print $e->getMessage();
}