<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

use Managesend\RestClient;

class EmailCampaign extends AbstarctRest
{
    /**
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignsSent()
    {
        $url = $this->getRestUrl("/emailcampaigns/sent/{clientId}");
        return $this->get($url);
    }

    /**
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignsScheduled()
    {
        $url = $this->getRestUrl("/emailcampaigns/scheduled/{clientId}");
        return $this->get($url);
    }

    /**
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignsDraft()
    {
        $url = $this->getRestUrl("/emailcampaigns/draft/{clientId}");
        return $this->get($url);
    }

    /**
     * @param $campaignId
     *
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignSummary($campaignId)
    {
        $url = $this->getRestUrl("/emailcampaign/summary/{clientId}/{campaignId}", array("{campaignId}"=> $campaignId));
        return $this->get($url);
    }

    /**
     * @param $campaignId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'string'
     * ]
     *
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignRecipients($campaignId, array $params=array())
    {
        $url = $this->getRestUrl("/emailcampaign/recipients/{clientId}/{campaignId}", array("{campaignId}"=> $campaignId));
        return $this->get($url,$this->readLimits($params));
    }

    /**
     * @param $campaignId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'string'
     * ]
     *
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignOpens($campaignId, array $params=array())
    {
        $url = $this->getRestUrl("/emailcampaign/opens/{clientId}/{campaignId}", array("{campaignId}"=> $campaignId));
        return $this->get($url,$this->readLimits($params));
    }

    /**
     * @param $campaignId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'string'
     * ]
     *
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignClicks($campaignId, array $params=array())
    {
        $url = $this->getRestUrl("/emailcampaign/clicks/{clientId}/{campaignId}", array("{campaignId}"=> $campaignId));
        return $this->get($url,$this->readLimits($params));
    }

    /**
     * @param $campaignId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'string'
     * ]
     *
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignUnsubscribes($campaignId, array $params=array())
    {
        $url = $this->getRestUrl("/emailcampaign/unsubscribes/{clientId}/{campaignId}", array("{campaignId}"=> $campaignId));
        return $this->get($url,$this->readLimits($params));
    }

    /**
     * @param $campaignId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'string'
     * ]
     *
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignBounces($campaignId, array $params=array())
    {
        $url = $this->getRestUrl("/emailcampaign/bounces/{clientId}/{campaignId}", array("{campaignId}"=> $campaignId));
        return $this->get($url,$this->readLimits($params));
    }

    /**
     * @param $campaignId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'string'
     * ]
     *
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignSpams($campaignId, array $params=array())
    {
        $url = $this->getRestUrl("/emailcampaign/spams/{clientId}/{campaignId}", array("{campaignId}"=> $campaignId));
        return $this->get($url,$this->readLimits($params));
    }

    /**
     * @param array $data = [
     *  'campaignName' => 'string',
     *  'subject' => 'string',
     *  'fromName' => 'string',
     *  'fromEmail' => 'string',
     *  'templateId' => 'int',
     *  'preheader' => 'string'
     *  'listIds' => 'array',
     *  'segmentIds' => 'array',
     *  'sendDateTime' => 'datetime 2016-12-23 09:10' ,
     *  'confirmationEmail' => 'string',
     *  'confirmationPhone' => 'string'
     * ]
     *
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function createCampaign(array $data)
    {
        $url = $this->getRestUrl("/emailcampaign/create/{clientId}");
        return $this->post($url,array(),$data);
    }

    /**
     * @param $campaignId
     *
     * @return bool
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function deleteCampaign($campaignId)
    {
        $url = $this->getRestUrl("/emailcampaign/delete/{clientId}/{campaignId}", array("{campaignId}"=> $campaignId));
        return $this->delete($url);
    }

    /**
     * @param $campaignId
     *
     * @return bool
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function unscheduleCampaign($campaignId)
    {
        $url = $this->getRestUrl("/emailcampaign/unschedule/{clientId}/{campaignId}", array("{campaignId}"=> $campaignId));
        $response = $this->post($url);
        return $response->getStatusCode() == 201;
    }
}