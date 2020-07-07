<?php
namespace Managesend\Tests;

use Managesend\RestClient;
use PHPUnit\Framework\TestCase;

class RestClientTest extends TestCase
{
    public function testThrowsWhenApikeyAndApisecretMissing()
    {
        try {
            new RestClient(NULL, NULL, NULL, NULL, NULL, array());
            $this->assertFalse(true);
        } catch (\Managesend\Exceptions\ConfigurationException $e) {
            $this->assertTrue(true);
        }
    }

    public function testThrowsWhenApikeyMissing()
    {
        try {
            new RestClient(NULL, 'apisecret', NULL, NULL, NULL, array());
            $this->assertFalse(TRUE);
        } catch (\Managesend\Exceptions\ConfigurationException $e) {
            $this->assertTrue(TRUE);
        }
    }

    public function testThrowsWhenApisecretMissing()
    {
        try {
            new RestClient('apikey', NULL, NULL, NULL, NULL, array());
            $this->assertFalse(TRUE);
        } catch (\Managesend\Exceptions\ConfigurationException $e) {
            $this->assertTrue(TRUE);
        }
    }

    public function testThrowsWhenClientidMissing()
    {
        try {
            $restClient = new RestClient('apikey', 'apisecret');
            $restClient->emailCampaign()->getCampaignSummary(1);
            $this->assertFalse(TRUE);
        } catch (\Managesend\Exceptions\ConfigurationException $e) {
            $this->assertTrue(TRUE);
        }
    }

    public function testApikeyPulledFromEnvironment()
    {
        $restClient = new RestClient(NULL, 'apisecret', NULL, NULL, NULL, array(
            RestClient::ENV_TOKEN_KEY => 'apikey',
        ));
        $this->assertEquals('apikey', $restClient->getApiTokenKey());
    }

    public function testApisecretPulledFromEnvironment()
    {
        $restClient = new RestClient('apikey', NULL, NULL, NULL, NULL, array(
            RestClient::ENV_TOKEN_SECRET => 'apisecret',
        ));
        $this->assertEquals('apisecret', $restClient->getApiTokenSecret());
    }

    public function testApikeyAndApisecretPulledFromEnvironment()
    {
        $restClient = new RestClient(NULL, NULL, NULL, NULL, NULL, array(
            RestClient::ENV_TOKEN_KEY => 'apikey',
            RestClient::ENV_TOKEN_SECRET => 'apisecret',
        ));
        $this->assertEquals('apikey', $restClient->getApiTokenKey());
        $this->assertEquals('apisecret', $restClient->getApiTokenSecret());
    }

    public function testApikeyParameterPreferredOverEnvironment()
    {
        $restClient = new RestClient('apikey', 'apisecret', NULL, NULL, NULL, array(
            RestClient::ENV_TOKEN_KEY => 'environmentApisecret',
        ));
        $this->assertEquals('apikey', $restClient->getApiTokenKey());
    }

    public function testApisecretParameterPreferredOverEnvironment()
    {
        $restClient = new RestClient('apikey', 'apisecret', NULL, NULL, NULL, array(
            RestClient::ENV_TOKEN_KEY => 'environmentApisecret',
        ));
        $this->assertEquals('apisecret', $restClient->getApiTokenSecret());
    }

    public function testApikeyAndApisecretParametersPreferredOverEnvironment()
    {
        $restClient = new RestClient('apikey', 'apisecret', NULL, NULL, NULL, array(
            RestClient::ENV_TOKEN_KEY => 'environmentApikey',
            RestClient::ENV_TOKEN_SECRET => 'environmentApisecret',
        ));
        $this->assertEquals('apikey', $restClient->getApiTokenKey());
        $this->assertEquals('apisecret', $restClient->getApiTokenSecret());
    }

    public function testClientidProvided()
    {
        $restClient = new RestClient('apikey', 'apisecret','clientId');
        $this->assertEquals('clientId', $restClient->getClientId());
    }

    public function testClientidPulledFromEnvironment()
    {
        $restClient = new RestClient('apikey', 'apisecret', NULL, NULL, NULL, array(
            RestClient::ENV_CLIENT_ID => 'clientId',
        ));
        $this->assertEquals('clientId', $restClient->getClientId());
    }

    public function testSetClientidPreferredOverParameter()
    {
        $restClient = new RestClient('apikey', 'apisecret','clientId');
        $restClient->setClientId('clientId2');
        $this->assertEquals('clientId2', $restClient->getClientId());
    }
}