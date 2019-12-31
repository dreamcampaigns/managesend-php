# managesend-php

![Packagist](https://img.shields.io/packagist/l/dreamcampaigns/managesend-php)
![Packagist Version](https://img.shields.io/packagist/v/dreamcampaigns/managesend-php)
![Packagist](https://img.shields.io/packagist/dt/dreamcampaigns/managesend-php)

## Documentation

The documentation for the DreamCampaigns API can be found [here][apidocs].

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

You can install **managesend-php** via composer or by downloading the source.

### Via Composer:

**managesend-php** is available on Packagist as the
[`dreamcampaigns/managesend-php`](https://packagist.org/packages/dreamcampaigns/managesend-php) package:

```
composer require dreamcampaigns/managesend-php
```
## Authenticating

The DreamCampaigns API uses Basic authentication using an API key and API secret.

## Quickstart

### Send a Transactional Smart SMS

```php
// Send a Smart email using DreamCampaigns's REST API and PHP
<?php
$apiKey = "ACXXXXXX"; // Your Account/Client API Key from https://login.managesend.com/myaccount/apikeys
$apiSecret = "YXYXYX"; // Your Account/Client API Secret from https://login.managesend.com/myaccount/apikeys
$clientId = "a5hsgw89dw0001om9yrgfen8ob";

$restClient = new \Managesend\RestClient\RestClient($apiKey, $apiSecret, $clientId);
$result = $restClient->transactional()->sendSmartEmail("c5is7tltkk00016k9ype5lg735",array(
    "toEmail"=>"joe@example.com",
    "toName"=>"Joe Smith",
    "data"=>array("promoCode"=>"XYZ"),
));
$newEmail = $result->getData();

print $newEmail->getMessageId();
print $newEmail->getStatus();

//or if you preffer arrays

print_r($newEmail->toArray());

```

### Send a Transactional Smart SMS

```php
// Send a Smart SMS using DreamCampaigns's REST API and PHP
<?php
$sid = "ACXXXXXX"; // Your Account SID from www.twilio.com/console
$token = "YYYYYY"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);

// Read TwiML at this URL when a call connects (hold music)
$call = $client->calls->create(
  '8881231234', // Call this number
  '9991231234', // From a valid Twilio number
  array(
      'url' => 'https://twimlets.com/holdmusic?Bucket=com.twilio.music.ambient'
  )
);
```

### Generating TwiML

To control phone calls, your application needs to output .

Use `Twilio\TwiML\(Voice|Messaging|Fax)Response` to easily chain said responses.

```php
<?php
$response = new Twilio\TwiML\VoiceResponse();
$response->say('Hello');
$response->play('https://api.twilio.com/cowbell.mp3', array("loop" => 5));
print $response;
```

That will output XML that looks like this:

```xml
<?xml version="1.0" encoding="utf-8"?>
<Response>
    <Say>Hello</Say>
    <Play loop="5">https://api.twilio.com/cowbell.mp3</Play>
</Response>
```

## Docker Image

The `Dockerfile` present in this repository and its respective `twilio/twilio-php` Docker image are currently used by Twilio for testing purposes only.

## Getting help

If you need help installing or using the library, please check the [Twilio Support Help Center](https://support.twilio.com) first, and [file a support ticket](https://twilio.com/help/contact) if you don't find an answer to your question.

If you've instead found a bug in the library or would like new features added, go ahead and open issues or pull requests against this repo!

[apidocs]: https://api.managesend.com/
