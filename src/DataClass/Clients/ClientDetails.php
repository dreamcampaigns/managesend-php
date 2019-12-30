<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Clients;

/**
 * Class ClientDetails
 * @package Managesend\DataClass\Clients
 *
 */
class ClientDetails extends Client
{
    /** @var array */
    protected $apiTokens;

    /** @var array */
    protected $allowedDomains;

    /** @var boolean */
    protected $isGoogleAnalytics;

    /** @var string */
    protected $gaSource;

    /**
     * @return array
     */
    public function getApiTokens()
    {
        return $this->apiTokens;
    }

    /**
     * @return string
     */
    public function getApiTokenKey()
    {
        return $this->apiTokens["token_key"];
    }

    /**
     * @return string
     */
    public function getApiTokenSecret()
    {
        return $this->apiTokens["token_secret"];
    }

    /**
     * @return array
     */
    public function getAllowedDomains()
    {
        return $this->allowedDomains;
    }

    /**
     * @param $domain
     *
     * @return bool
     */
    public function isDomainAllowed($domain)
    {
        return \in_array($domain,$this->allowedDomains);
    }

    /**
     * @return bool
     */
    public function isGoogleAnalytics()
    {
        return $this->isGoogleAnalytics;
    }

    /**
     * @return string
     */
    public function getGaSource()
    {
        return $this->gaSource;
    }
}