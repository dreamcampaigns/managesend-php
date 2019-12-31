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

$restClient = new RestClient($apiKey,$apiSecret);

//get all account clients
$result = $restClient->clients()->getClients();
$clients = $result->getData();
foreach ($clients as $client){
    print $client->getClientId();
    print $client->getEmail();
    print $client->getTimeZone();
    print $client->getCountry();
}

//get a client details
$result = $restClient->clients()->getClientDetails($clientId);
$client = $result->getData();
print $client->getApiTokenSecret();
print $client->getApiTokenKey();
print_r($client->toArray());

//get a client details
$result = $restClient->clients()->updateClient($clientId,array(
    "name"=>"new name",
));
$client = $result->getData();
print $client->getName();

//get client users
$result = $restClient->setClientId($clientId)->clients()->getUsers();
$users = $result->getData();
foreach ($users as $user){
    print $user->getUserId();
    print $user->getUsername();
    print $user->isActive();
    print $user->getAccessLevel();
}