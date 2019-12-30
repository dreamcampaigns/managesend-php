<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

use Managesend\RestClient;

class SmsCampaign extends AbstractRest
{
    /**
     * @return \Managesend\DataResponse\SmsCampaign\SentCampaignsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignsSent()
    {
        $url = $this->getRestUrl("/smscampaigns/sent/{clientId}");
        $response = $this->get($url);
        return new \Managesend\DataResponse\SmsCampaign\SentCampaignsResponse($response);
    }

    /**
     * @return \Managesend\DataResponse\SmsCampaign\ScheduledCampaignsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignsScheduled()
    {
        $url = $this->getRestUrl("/smscampaigns/scheduled/{clientId}");
        $response = $this->get($url);
        return new \Managesend\DataResponse\SmsCampaign\ScheduledCampaignsResponse($response);
    }

    /**
     * @return \Managesend\DataResponse\SmsCampaign\DraftCampaignsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignsDraft()
    {
        $url = $this->getRestUrl("/smscampaigns/draft/{clientId}");
        $response = $this->get($url);
        return new \Managesend\DataResponse\SmsCampaign\DraftCampaignsResponse($response);
    }

    /**
     * @param $campaignId
     *
     * @return \Managesend\DataResponse\SmsCampaign\CampaignSummaryResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignSummary($campaignId)
    {
        $url = $this->getRestUrl("/smscampaign/summary/{clientId}/{campaignId}", array("{campaignId}"=> $campaignId));
        $response = $this->get($url);
        return new \Managesend\DataResponse\SmsCampaign\CampaignSummaryResponse($response);
    }

    /**
     * @param $campaignId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\SmsCampaign\RecipientsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignRecipients($campaignId, array $params=array())
    {
        $url = $this->getRestUrl("/smscampaign/recipients/{clientId}/{campaignId}", array("{campaignId}"=> $campaignId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\SmsCampaign\RecipientsResponse($response);
    }

    /**
     * @param $campaignId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\SmsCampaign\CampaignUnsubscribesResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignUnsubscribes($campaignId, array $params=array())
    {
        $url = $this->getRestUrl("/smscampaign/unsubscribes/{clientId}/{campaignId}", array("{campaignId}"=> $campaignId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\SmsCampaign\CampaignUnsubscribesResponse($response);
    }

    /**
     * @param $campaignId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\SmsCampaign\CampaignFailsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignFails($campaignId, array $params=array())
    {
        $url = $this->getRestUrl("/smscampaign/fails/{clientId}/{campaignId}", array("{campaignId}"=> $campaignId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\SmsCampaign\CampaignFailsResponse($response);
    }

    /**
     * @param array $data = [
     *  'campaignName' => 'string',
     *  'campaignType' => 'sms',
     *  'content' => 'string',
     *  'listIds' => 'array',
     *  'segmentIds' => 'array',
     *  'sendDateTime' => 'datetime 2016-12-23 09:10' ,
     *  'confirmationEmail' => 'string',
     *  'confirmationPhone' => 'string',
     *  'media' => 'array',
     *  'shortenUrls' => 'true'
     * ]
     *
     * @return \Managesend\DataResponse\SmsCampaign\CampaignResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function createCampaign(array $data)
    {
        $url = $this->getRestUrl("/smscampaign/create/{clientId}");
        $response = $this->post($url,array(),$data);
        return new \Managesend\DataResponse\SmsCampaign\CampaignResponse($response);
    }

    /**
     * @param $campaignId
     *
     * @return bool
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function deleteCampaign($campaignId)
    {
        $url = $this->getRestUrl("/smscampaign/delete/{clientId}/{campaignId}", array("{campaignId}"=> $campaignId));
        return $this->delete($url);
    }

    /**
     * @param $campaignId
     *
     * @return \Managesend\DataResponse\SmsCampaign\UnscheduleCampaignResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function unscheduleCampaign($campaignId)
    {
        $url = $this->getRestUrl("/smscampaign/unschedule/{clientId}/{campaignId}", array("{campaignId}"=> $campaignId));
        $response = $this->post($url);
        return new \Managesend\DataResponse\SmsCampaign\UnscheduleCampaignResponse($response);
    }
}