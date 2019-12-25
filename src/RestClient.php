<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Managesend;

use Managesend\Exceptions\ConfigurationException;
use Managesend\HttpClient\CurlHttpClient;
use Managesend\HttpClient\HttpClient;
use Managesend\Exceptions\ManagesendException;

/**
 * A client for accessing the Managesend API.
 *
 *
 */
class RestClient
{
    const VERSION = "1.0.0";
    const ENV_TOKEN_KEY = "DREAM_TOKEN_KEY";
    const ENV_TOKEN_SECRET = "DREAM_TOKEN_SECRET";
    const ENV_CLIENT_ID = "DREAM_CLIENT_ID";

    protected $baseUrl = "http://api.managesend.local/api/v1";
    protected $apiTokenKey;
    protected $apiTokenSecret;
    protected $clientId;
    protected $httpClient;
    protected $account = NULL;
    protected $emailCampaign = NULL;

    /**
     * Initializes the Managesend RestClient
     *
     * @param string $apiTokenKey                              apiTokenKey to authenticate with
     * @param string $apiTokenSecret                              apiTokenSecret to authenticate with
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
     * @param string $method    HTTP Method
     * @param string $uri       Fully qualified url
     * @param string[] $params  Query string parameters
     * @param string[] $data    POST body data
     * @param string[] $headers HTTP Headers
     * @param string $apiTokenKey  User for Authentication
     * @param string $apiTokenSecret  apiTokenSecret for Authentication
     * @param int $timeout      Timeout in seconds
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