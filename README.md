# managesend-php

![Travis (.org)](https://img.shields.io/travis/dreamcampaigns/managesend-php)
![Packagist](https://img.shields.io/packagist/l/dreamcampaigns/managesend-php)
![Packagist Version](https://img.shields.io/packagist/v/dreamcampaigns/managesend-php)
![Packagist](https://img.shields.io/packagist/dt/dreamcampaigns/managesend-php)

A PHP library implementing the complete functionality of the [DreamCampaigns API](https://www.dreamcampaigns.com/). A complete suites of marketing tools for your business or website.

## Supported PHP Versions

This library supports the following PHP implementations:

* PHP 5.3
* PHP 5.4
* PHP 5.5
* PHP 5.6
* PHP 7.0
* PHP 7.1
* PHP 7.2
* PHP 7.3
* PHP 7.4

## Installation

You can install **managesend-php** via composer or by [`downloading`](https://github.com/dreamcampaigns/managesend-php/tags) the source.

### Via Composer
**managesend-php** is available on Packagist as the
[`dreamcampaigns/managesend-php`](https://packagist.org/packages/dreamcampaigns/managesend-php) package.

If you use [Composer](http://getcomposer.org/), you can run the following command from the root of your project to install:

```
composer require dreamcampaigns/managesend-php
```

### Manual Installation
If youn't use `Composer` you can simply [download](https://github.com/dreamcampaigns/managesend-php/tags) the library and include it in your project.

After you have installed the library, if you need an autoloader, simply include the managesend-php autoload class, as follows:

```php
require_once __DIR__ . '/../managesend-php/autoLoader/autoload.php';
```

## Authenticating

The DreamCampaigns API uses Basic authentication using an API key and API secret.

## Quickstart

### Send a Smart email

```php
// Send a Smart email using DreamCampaigns's REST API and PHP
<?php
$apiKey = "ACXXXXXX"; // Your Account/Client API Key from https://login.managesend.com/myaccount/apikeys
$apiSecret = "YXYXYX"; // Your Account/Client API Secret from https://login.managesend.com/myaccount/apikeys
$clientId = "a6hsgw74dw0001om4yrgfen8";

$restClient = new \Managesend\RestClient($apiKey, $apiSecret, $clientId);
$result = $restClient->transactional()->sendSmartEmail("c5is8tltkk00018k9ype5lg741",array(
    "toEmail"=>"joe@example.com",
    "toName"=>"Joe Smith",
    "data"=>array("promoCode"=>"XYZ"),
));
$newEmail = $result->getData();

//your IDE should auto generate all available getters for each call & results
print $newEmail->getMessageId();
print $newEmail->getStatus();

//or if you preffer arrays

print_r($newEmail->toArray());

//or you can get the response, where you can get all available data & headers as array

$response = $result->getResponse();

```

### Send a Smart SMS

```php
// Send a Dynamic SMS using DreamCampaigns's REST API and PHP
<?php
$apiKey = "ACXXXXXX"; // Your Account API Key from https://login.managesend.com/myaccount/apikeys
$apiSecret = "YXYXYX"; // Your Account API Secret from https://login.managesend.com/myaccount/apikeys

//if you are using your account level api keys you can set the client ids for each call.
$restClient = new \Managesend\RestClient($apiKey, $apiSecret);
$result = $restClient->setClientId("c5is8tltkk00018k9ype5lg741")->transactional()->sendDynamicSms("c5is8tltkk00018k9ype5lg741",array(
    "toNumber"=>"+1234567891",
    "content"=>"Hello Joe, your password has been reset.",
));
$newSms = $result->getData();

print $newEmail->getMessageId();
```

### Getting sent email campaigns

```php
<?php
$result = $restClient->emailCampaign()->getCampaignsSent();
$campaigns = $result->getData();
foreach ($campaigns as $campaign){
    print $campaign->getSentDate();
}
```

### Using .env

If you're using .env, you can set your API credentials in your .env.

```dotenv
MANAGESEND_TOKEN_KEY=ACXXXXXX
MANAGESEND_TOKEN_SECRET=YXYXYX
MANAGESEND_CLIENT_ID=c5is8tltkk00018k9ype5lg741
```
```php
<?php
$restClient = new \Managesend\RestClient();
$result = $restClient->lists()->getSubscriberList("joe@example.com");
```
## Examples

Samples for creating or accessing all resources can be found in the examples directory. 

## Documentation

For more details you can reffer to the [`DreamCampaigns API documentations`][apidocs]

[apidocs]: https://api.managesend.com/
