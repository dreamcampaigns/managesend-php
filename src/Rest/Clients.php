<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

class Clients extends AbstractRest
{
    /**
     * @return \Managesend\DataResponse\Clients\ClientsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getClients()
    {
        $url = $this->getRestUrl("/clients");
        $response = $this->get($url);
        return new \Managesend\DataResponse\Clients\ClientsResponse($response);
    }

    /**
     * @param string $clientId
     *
     * @return \Managesend\DataResponse\Clients\ClientDetailsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getClientDetails($clientId)
    {
        $url = $this->getRestUrl("/client/details/{clientId}", array("{clientId}" => $clientId));
        $response = $this->get($url);
        return new \Managesend\DataResponse\Clients\ClientDetailsResponse($response);
    }

    /**
     * @param array $data = [
     *                    'name' => 'string',
     *                    'firstName' => 'string',
     *                    'lastName' => 'string',
     *                    'email' => 'string',
     *                    'phone' => 'string',
     *                    'address' => 'string',
     *                    'city' => 'string',
     *                    'state' => 'string',
     *                    'postalCode' => 'string',
     *                    'country' => 'string',
     *                    'timeZone' => 'string'
     *                    ]
     *
     * @return \Managesend\DataResponse\Clients\ClientResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function createClient(array $data = array())
    {
        $url = $this->getRestUrl("/client/create");
        $response = $this->post($url, array(), $data);
        return new \Managesend\DataResponse\Clients\ClientResponse($response);
    }

    /**
     * @param $clientId
     * @param array $data = [
     *                    'name' => 'string',
     *                    'firstName' => 'string',
     *                    'lastName' => 'string',
     *                    'email' => 'string',
     *                    'phone' => 'string',
     *                    'address' => 'string',
     *                    'city' => 'string',
     *                    'state' => 'string',
     *                    'postalCode' => 'string',
     *                    'country' => 'string',
     *                    'timeZone' => 'string'
     *                    ]
     *
     * @return \Managesend\DataResponse\Clients\ClientResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function updateClient($clientId, array $data = array())
    {
        $url = $this->getRestUrl("/client/update/{clientId}", array("{clientId}" => $clientId));
        $response = $this->patch($url, array(), $data);
        return new \Managesend\DataResponse\Clients\ClientResponse($response);
    }

    /**
     * @param $clientId
     *
     * @return bool
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function deleteClient($clientId)
    {
        $url = $this->getRestUrl("/client/delete/{clientId}", array("{clientId}" => $clientId));
        return $this->delete($url);
    }

    /**
     * @param $clientId
     *
     * @return \Managesend\DataResponse\Account\UsersResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getUsers($clientId)
    {
        $url = $this->getRestUrl("/client/users/{clientId}", array("{clientId}" => $clientId));
        $response = $this->get($url);
        return new \Managesend\DataResponse\Account\UsersResponse($response);
    }

    /**
     * @param $clientId
     *
     * @return \Managesend\DataResponse\Clients\FromEmailsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getFromEmails($clientId)
    {
        $url = $this->getRestUrl("/client/fromemails/{clientId}", array("{clientId}" => $clientId));
        $response = $this->get($url);
        return new \Managesend\DataResponse\Clients\FromEmailsResponse($response);
    }

    /**
     * @param $clientId
     *
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getSystemdate($clientId)
    {
        $url = $this->getRestUrl("/client/systemdate/{clientId}", array("{clientId}" => $clientId));
        return $this->get($url);
    }
}