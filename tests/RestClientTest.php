<?php
namespace Managesend\Tests;

use Managesend\RestClient;

class RestClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Managesend\Exceptions\ConfigurationException
     */
    public function testThrowsWhenApikeyAndApisecretMissing()
    {
        new RestClient(NULL, NULL, NULL, NULL, array());
    }

    /**
     * @expectedException \Managesend\Exceptions\ConfigurationException
     */
    public function testThrowsWhenApikeyMissing()
    {
        new RestClient(NULL, 'apisecret', NULL, NULL, array());
    }

    /**
     * @expectedException \Managesend\Exceptions\ConfigurationException
     */
    public function testThrowsWhenApisecretMissing()
    {
        new RestClient('apikey', NULL, NULL, NULL, array());
    }

    public function testApikeyPulledFromEnvironment()
    {
        $restClient = new RestClient(NULL, 'apisecret', NULL, NULL, array(
            RestClient::ENV_TOKEN_KEY => 'apikey',
        ));
        $this->assertEquals('apikey', $restClient->getApiTokenKey());
    }

    public function testApisecretPulledFromEnvironment()
    {
        $restClient = new RestClient('apikey', NULL, NULL, NULL, array(
            RestClient::ENV_TOKEN_SECRET => 'apisecret',
        ));
        $this->assertEquals('apisecret', $restClient->getApiTokenSecret());
    }

    public function testApikeyAndApisecretPulledFromEnvironment()
    {
        $restClient = new RestClient(NULL, NULL, NULL, NULL, array(
            RestClient::ENV_TOKEN_KEY => 'apikey',
            RestClient::ENV_TOKEN_SECRET => 'apisecret',
        ));
        $this->assertEquals('apikey', $restClient->getApiTokenKey());
        $this->assertEquals('apisecret', $restClient->getApiTokenSecret());
    }

    public function testApikeyParameterPreferredOverEnvironment()
    {
        $restClient = new RestClient('apikey', 'apisecret', NULL, NULL, array(
            RestClient::ENV_TOKEN_KEY => 'environmentApisecret',
        ));
        $this->assertEquals('apikey', $restClient->getApiTokenKey());
    }

    public function testApisecretParameterPreferredOverEnvironment()
    {
        $restClient = new RestClient('apikey', 'apisecret', NULL, NULL, array(
            RestClient::ENV_TOKEN_KEY => 'environmentApisecret',
        ));
        $this->assertEquals('apisecret', $restClient->getApiTokenSecret());
    }

    public function testApikeyAndApisecretParametersPreferredOverEnvironment()
    {
        $restClient = new RestClient('apikey', 'apisecret', NULL, NULL, array(
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
        $restClient = new RestClient('apikey', 'apisecret', NULL, NULL, array(
            RestClient::ENV_CLIENT_ID => 'clientId',
        ));
        $this->assertEquals('clientId', $restClient->getClientId());
    }

    /**
     * @expectedException \Managesend\Exceptions\RestException
     */
    public function testFailedRestcall()
    {
        $restClient = new RestClient('apikey', 'apisecret','clientId');
        $response = $restClient->clients()->getClients();
    }
}