<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

class Account extends AbstractRest
{
    /**
     * @return \Managesend\DataResponse\Account\CreditResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getBalance()
    {
        $url = $this->getRestUrl("/account/balance");
        $response = $this->get($url);
        return new \Managesend\DataResponse\Account\CreditResponse($response);
    }

    /**
     * @param float $creditAmount
     *
     * @return \Managesend\DataResponse\Account\CreditResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function addCredit($creditAmount)
    {
        $url = $this->getRestUrl("/account/credit/add");
        $response = $this->post($url, array(), array("creditAmount" => $creditAmount));
        return new \Managesend\DataResponse\Account\CreditResponse($response);
    }

    /**
     * @return \Managesend\DataResponse\Account\UsersResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getUsers()
    {
        $url = $this->getRestUrl("/account/users");
        $response = $this->get($url);
        return new \Managesend\DataResponse\Account\UsersResponse($response);
    }

    /**
     * @return \Managesend\DataResponse\Account\SendingDomainsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getSendingDomains()
    {
        $url = $this->getRestUrl("/account/domains");
        $response = $this->get($url);
        return new \Managesend\DataResponse\Account\SendingDomainsResponse($response);
    }

    /**
     * @param $domainId
     *
     * @return \Managesend\DataResponse\Account\SendingDomainResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function verifySendingDomain($domainId)
    {
        $url = $this->getRestUrl("/account/domains/{domainId}", array("{domainId}" => $domainId));
        $response = $this->post($url);
        return new \Managesend\DataResponse\Account\SendingDomainResponse($response);
    }

    /**
     * @param $domain
     *
     * @return \Managesend\DataResponse\Account\SendingDomainResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function createSendingDomain($domain)
    {
        $url = $this->getRestUrl("/account/domain");
        $response = $this->post($url, array(), array("domain" => $domain));
        return new \Managesend\DataResponse\Account\SendingDomainResponse($response);
    }

    /**
     * @param $userId
     *
     * @return bool
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function deleteUser($userId)
    {
        $url = $this->getRestUrl("/account/user/delete/{userId}", array("{userId}" => $userId));
        return $this->delete($url);
    }

    /**
     * @param $userId
     *
     * @return \Managesend\DataResponse\Account\UserResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function deactivateUser($userId)
    {
        $url = $this->getRestUrl("/account/user/deactivate/{userId}", array("{userId}" => $userId));
        $response = $this->patch($url);
        return new \Managesend\DataResponse\Account\UserResponse($response);
    }

    /**
     * @param $userId
     *
     * @return \Managesend\DataResponse\Account\UserResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function activateUser($userId)
    {
        $url = $this->getRestUrl("/account/user/activate/{userId}", array("{userId}" => $userId));
        $response = $this->patch($url);
        return new \Managesend\DataResponse\Account\UserResponse($response);
    }

    /**
     * @param array $data = [
     *                    'username' => 'string',
     *                    'firstName' => 'string',
     *                    'lastName' => 'string'
     *                    ]
     *
     * @return \Managesend\DataResponse\Account\UserResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function createUserAdmin(array $data = array())
    {
        $url = $this->getRestUrl("/account/user/admin");
        $response = $this->post($url, array(), $data);
        return new \Managesend\DataResponse\Account\UserResponse($response);
    }
}