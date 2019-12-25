<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

use Managesend\RestClient;

class Account extends AbstarctRest
{
    /**
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCredit()
    {
        $url = $this->getRestUrl("/account/credits");
        return $this->get($url);
    }

    /**
     * @param float $creditAmount
     *
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function addCredit($creditAmount)
    {
        $url = $this->getRestUrl("/account/credits/add");
        return $this->post($url, array(), array("creditAmount" => $creditAmount));
    }

    /**
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getUsers()
    {
        $url = $this->getRestUrl("/account/users");
        return $this->get($url);
    }

    /**
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getSendingDomains()
    {
        $url = $this->getRestUrl("/account/domains");
        return $this->get($url);
    }
}