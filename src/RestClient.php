<?php
/*
 * A client for accessing the Managesend API.
 *
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Managesend;

use Managesend\Exceptions\ConfigurationException;
use Managesend\HttpClient\CurlHttpClient;
use Managesend\HttpClient\HttpClient;

/**
 * Class RestClient
 * @package Managesend
 */
class RestClient
{
    const VERSION = "1.0.0";
    const ENV_TOKEN_KEY = "MANAGESEND_TOKEN_KEY";
    const ENV_TOKEN_SECRET = "MANAGESEND_TOKEN_SECRET";
    const ENV_CLIENT_ID = "MANAGESEND_CLIENT_ID";

    protected $baseUrl = "https://api.managesend.com/api/v1";
    protected $apiTokenKey;
    protected $apiTokenSecret;
    protected $clientId;
    protected $httpClient;
    protected $account = NULL;
    protected $clients = NULL;
    protected $emailCampaign = NULL;
    protected $smsCampaign = NULL;
    protected $journey = NULL;
    protected $list = NULL;
    protected $webhook = NULL;
    protected $segment = NULL;
    protected $subscriber = NULL;
    protected $template = NULL;
    protected $transactional = NULL;
    protected $revenue = NULL;
    protected $smsKeyword = NULL;
    protected $form = NULL;
    protected $siteMessage = NULL;
    protected $utility = NULL;

    /**
     * Initializes the Managesend RestClient
     *
     * @param string $apiTokenKey                           apiTokenKey to authenticate with
     * @param string $apiTokenSecret                        apiTokenSecret to authenticate with
     * @param string $clientId                              Client id to get data for
     * @param \Managesend\HttpClient\HttpClient $httpClient HttpClient, defaults to CurlClient
     * @param mixed[] $environment                          Environment to look for auth details, defaults to $_ENV
     *
     * @return \Managesend\HttpClient\HttpClient
     * @throws ConfigurationException If valid authentication is not present
     */
    public function __construct($apiTokenKey = NULL, $apiTokenSecret = NULL, $clientId = NULL, HttpClient $httpClient = NULL, $environment = NULL)
    {
        if (\is_null($environment)) {
            $environment = $_ENV;
        }

        if ($apiTokenKey) {
            $this->apiTokenKey = $apiTokenKey;
        } else {
            if (\array_key_exists(self::ENV_TOKEN_KEY, $environment)) {
                $this->apiTokenKey = $environment[self::ENV_TOKEN_KEY];
            }
        }

        if ($apiTokenSecret) {
            $this->apiTokenSecret = $apiTokenSecret;
        } else {
            if (\array_key_exists(self::ENV_TOKEN_SECRET, $environment)) {
                $this->apiTokenSecret = $environment[self::ENV_TOKEN_SECRET];
            }
        }

        if ($clientId) {
            $this->clientId = $clientId;
        } else {
            if (\array_key_exists(self::ENV_CLIENT_ID, $environment)) {
                $this->clientId = $environment[self::ENV_CLIENT_ID];
            }
        }

        if (!$this->apiTokenKey || !$this->apiTokenSecret) {
            throw new ConfigurationException("Credentials are required to create a RestClient");
        }

        if ($httpClient) {
            $this->httpClient = $httpClient;
        } else {
            $this->httpClient = new CurlHttpClient();
        }
    }

    /**
     * Makes a request to the Managesend API using the configured http client
     * Authentication information is automatically added if none is provided
     *
     * @param string $method         HTTP Method
     * @param string $uri            Fully qualified url
     * @param string[] $params       Query string parameters
     * @param string[] $data         POST body data
     * @param string[] $headers      HTTP Headers
     * @param string $apiTokenKey    User for Authentication
     * @param string $apiTokenSecret apiTokenSecret for Authentication
     * @param int $timeout           Timeout in seconds
     *
     * @return \Managesend\HttpClient\Response Response from the Managesend API
     */
    public function request($method, $uri, $params = array(), $data = array(), $headers = array(), $apiTokenKey = NULL, $apiTokenSecret = NULL, $timeout = NULL)
    {
        $apiTokenKey = $apiTokenKey ? $apiTokenKey : $this->apiTokenKey;
        $apiTokenSecret = $apiTokenSecret ? $apiTokenSecret : $this->apiTokenSecret;

        $headers['User-Agent'] = 'managesend-php/' . self::VERSION . ' (PHP ' . \phpversion() . ')';
        $headers['Accept-Charset'] = 'utf-8';

        if ($method == 'POST' && !\array_key_exists('Content-Type', $headers)) {
            $headers['Content-Type'] = 'application/x-www-form-urlencoded';
        }

        if (!\array_key_exists('Accept', $headers)) {
            $headers['Accept'] = 'application/json';
        }

        return $this->getHttpClient()->request($method, $uri, $params, $data, $headers, $apiTokenKey, $apiTokenSecret, $timeout);
    }

    /**
     * Retrieve the apiTokenKey
     *
     * @return string Current apiTokenKey
     */
    public function getApiTokenKey()
    {
        return $this->apiTokenKey;
    }

    /**
     * Retrieve the apiTokenSecret
     *
     * @return string Current apiTokenSecret
     */
    public function getApiTokenSecret()
    {
        return $this->apiTokenSecret;
    }

    /**
     * Retrieve the clientId
     *
     * @return string Current clientId
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     *
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * Retrieve the HttpClient
     *
     * @return \Managesend\HttpClient\HttpClient Current HttpClient
     */
    public function getHttpClient()
    {
        return $this->httpClient;
    }

    /**
     * Set the HttpClient
     *
     * @param \Managesend\HttpClient\HttpClient $httpClient HttpClient to use
     *
     * @return $this
     */
    public function setHttpClient(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
        return $this;
    }

    /**
     * Access the Managesend Account
     *
     * @return \Managesend\Rest\Account
     */
    public function account()
    {
        if (!$this->account) {
            $this->account = new \Managesend\Rest\Account($this);
        }
        return $this->account;
    }

    /**
     * Access the Managesend Clients
     *
     * @return \Managesend\Rest\Clients
     */
    public function clients()
    {
        if (!$this->clients) {
            $this->clients = new \Managesend\Rest\Clients($this);
        }
        return $this->clients;
    }

    /**
     * Access the Managesend Email Campaign
     *
     * @return \Managesend\Rest\EmailCampaign
     */
    public function emailCampaign()
    {
        if (!$this->emailCampaign) {
            $this->emailCampaign = new \Managesend\Rest\EmailCampaign($this);
        }
        return $this->emailCampaign;
    }

    /**
     * Access the Managesend Sms Campaign
     *
     * @return \Managesend\Rest\SmsCampaign
     */
    public function smsCampaign()
    {
        if (!$this->smsCampaign) {
            $this->smsCampaign = new \Managesend\Rest\SmsCampaign($this);
        }
        return $this->smsCampaign;
    }

    /**
     * Access the Managesend Journey
     *
     * @return \Managesend\Rest\Journey
     */
    public function journey()
    {
        if (!$this->journey) {
            $this->journey = new \Managesend\Rest\Journey($this);
        }
        return $this->journey;
    }

    /**
     * Access the Managesend Lists
     *
     * @return \Managesend\Rest\Lists
     */
    public function lists()
    {
        if (!$this->list) {
            $this->list = new \Managesend\Rest\Lists($this);
        }
        return $this->list;
    }

    /**
     * Access the Managesend Webhooks
     *
     * @return \Managesend\Rest\Webhook
     */
    public function webhook()
    {
        if (!$this->webhook) {
            $this->webhook = new \Managesend\Rest\Webhook($this);
        }
        return $this->webhook;
    }

    /**
     * Access the Managesend Segments
     *
     * @return \Managesend\Rest\Segment
     */
    public function segment()
    {
        if (!$this->segment) {
            $this->segment = new \Managesend\Rest\Segment($this);
        }
        return $this->segment;
    }

    /**
     * Access the Managesend Subscribers
     *
     * @return \Managesend\Rest\Subscriber
     */
    public function subscriber()
    {
        if (!$this->subscriber) {
            $this->subscriber = new \Managesend\Rest\Subscriber($this);
        }
        return $this->subscriber;
    }

    /**
     * Access the Managesend Templates
     *
     * @return \Managesend\Rest\Template
     */
    public function template()
    {
        if (!$this->template) {
            $this->template = new \Managesend\Rest\Template($this);
        }
        return $this->template;
    }

    /**
     * Access the Managesend Transactionals
     *
     * @return \Managesend\Rest\Transactional
     */
    public function transactional()
    {
        if (!$this->transactional) {
            $this->transactional = new \Managesend\Rest\Transactional($this);
        }
        return $this->transactional;
    }

    /**
     * Access the Managesend Revenue Target
     *
     * @return \Managesend\Rest\Revenue
     */
    public function revenue()
    {
        if (!$this->revenue) {
            $this->revenue = new \Managesend\Rest\Revenue($this);
        }
        return $this->revenue;
    }

    /**
     * Access the Managesend SmsKeywords
     *
     * @return \Managesend\Rest\SmsKeyword
     */
    public function smsKeyword()
    {
        if (!$this->smsKeyword) {
            $this->smsKeyword = new \Managesend\Rest\SmsKeyword($this);
        }
        return $this->smsKeyword;
    }

    /**
     * Access the Managesend Forms
     *
     * @return \Managesend\Rest\Form
     */
    public function form()
    {
        if (!$this->form) {
            $this->form = new \Managesend\Rest\Form($this);
        }
        return $this->form;
    }

    /**
     * Access the Managesend Targeted Site Messages
     *
     * @return \Managesend\Rest\SiteMessage
     */
    public function siteMessage()
    {
        if (!$this->siteMessage) {
            $this->siteMessage = new \Managesend\Rest\SiteMessage($this);
        }
        return $this->siteMessage;
    }

    /**
     * Access the Managesend Miscellaneous Utility
     *
     * @return \Managesend\Rest\Utility
     */
    public function utility()
    {
        if (!$this->utility) {
            $this->utility = new \Managesend\Rest\Utility($this);
        }
        return $this->utility;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        return '[Client ' . $this->getClientId() . ']';
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }
}