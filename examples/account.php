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
$restClient = new RestClient($apiKey,$apiSecret);

//get account balance
$result = $restClient->account()->getBalance();
print $result->getData()->getAccountBalance();

//recharge account balance
$result = $restClient->account()->addCredit(100);
print $result->getData()->getAccountBalance();

//get account users
$result = $restClient->account()->getUsers();
$users = $result->getData();
foreach ($users as $user){
    print $user->getUserId();
    print $user->getUsername();
    print $user->isActive();
    print $user->getAccessLevel();
}

//delete a user
$userDeleted = $restClient->account()->deleteUser("dsasdadsad");
if($userDeleted){
    print "user deleted successfully";
}

//deactivate a user
$result = $restClient->account()->deactivateUser("dsasdadsad");
print $result->getData()->isActive();

//activate a user
$result = $restClient->account()->activateUser("dsasdadsad");
print $result->getData()->isActive();

//get account sending domains
$result = $restClient->account()->getSendingDomains();
$domains = $result->getData();
foreach ($domains as $domain){
    print $domain->getDomain();
    print $domain->getModifyDate();
    print $domain->isDkimVerified();
    print $domain->isSpfVerified();
}

//add new account sending domain
$result = $restClient->account()->createSendingDomain("example.com");
print $result->getData()->isDkimVerified();