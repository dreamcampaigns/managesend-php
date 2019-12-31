<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

class EmailCampaign extends AbstractRest
{
    /**
     * @return \Managesend\DataResponse\EmailCampaign\SentCampaignsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignsSent()
    {
        $url = $this->getRestUrl("/emailcampaigns/sent/{clientId}");
        $response = $this->get($url);
        return new \Managesend\DataResponse\EmailCampaign\SentCampaignsResponse($response);
    }

    /**
     * @return \Managesend\DataResponse\EmailCampaign\ScheduledCampaignsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignsScheduled()
    {
        $url = $this->getRestUrl("/emailcampaigns/scheduled/{clientId}");
        $response = $this->get($url);
        return new \Managesend\DataResponse\EmailCampaign\ScheduledCampaignsResponse($response);
    }

    /**
     * @return \Managesend\DataResponse\EmailCampaign\DraftCampaignsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignsDraft()
    {
        $url = $this->getRestUrl("/emailcampaigns/draft/{clientId}");
        $response = $this->get($url);
        return new \Managesend\DataResponse\EmailCampaign\DraftCampaignsResponse($response);
    }

    /**
     * @param $campaignId
     *
     * @return \Managesend\DataResponse\EmailCampaign\CampaignSummaryResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignSummary($campaignId)
    {
        $url = $this->getRestUrl("/emailcampaign/summary/{clientId}/{campaignId}", array("{campaignId}" => $campaignId));
        $response = $this->get($url);
        return new \Managesend\DataResponse\EmailCampaign\CampaignSummaryResponse($response);
    }

    /**
     * @param int $campaignId
     * @param array $params = [
     *                      'page' => 'int',
     *                      'page_size' => 'int',
     *                      'order_by' => 'string',
     *                      'direction' => 'asc|desc'
     *                      ]
     *
     * @return \Managesend\DataResponse\EmailCampaign\RecipientsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignRecipients($campaignId, array $params = array())
    {
        $url = $this->getRestUrl("/emailcampaign/recipients/{clientId}/{campaignId}", array("{campaignId}" => $campaignId));
        $response = $this->get($url, $this->readLimits($params));
        return new \Managesend\DataResponse\EmailCampaign\RecipientsResponse($response);
    }

    /**
     * @param $campaignId
     * @param array $params = [
     *                      'page' => 'int',
     *                      'page_size' => 'int',
     *                      'order_by' => 'string',
     *                      'direction' => 'asc|desc'
     *                      ]
     *
     * @return \Managesend\DataResponse\EmailCampaign\CampaignStatisticsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignOpens($campaignId, array $params = array())
    {
        $url = $this->getRestUrl("/emailcampaign/opens/{clientId}/{campaignId}", array("{campaignId}" => $campaignId));
        $response = $this->get($url, $this->readLimits($params));
        return new \Managesend\DataResponse\EmailCampaign\CampaignStatisticsResponse($response);
    }

    /**
     * @param integer $campaignId
     * @param array $params = [
     *                      'page' => 'int',
     *                      'page_size' => 'int',
     *                      'order_by' => 'string',
     *                      'direction' => 'asc|desc'
     *                      ]
     *
     * @return \Managesend\DataResponse\EmailCampaign\CampaignStatisticsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignClicks($campaignId, array $params = array())
    {
        $url = $this->getRestUrl("/emailcampaign/clicks/{clientId}/{campaignId}", array("{campaignId}" => $campaignId));
        $response = $this->get($url, $this->readLimits($params));
        return new \Managesend\DataResponse\EmailCampaign\CampaignStatisticsResponse($response);
    }

    /**
     * @param $campaignId
     * @param array $params = [
     *                      'page' => 'int',
     *                      'page_size' => 'int',
     *                      'order_by' => 'string',
     *                      'direction' => 'asc|desc'
     *                      ]
     *
     * @return \Managesend\DataResponse\EmailCampaign\CampaignUnsubscribesResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignUnsubscribes($campaignId, array $params = array())
    {
        $url = $this->getRestUrl("/emailcampaign/unsubscribes/{clientId}/{campaignId}", array("{campaignId}" => $campaignId));
        $response = $this->get($url, $this->readLimits($params));
        return new \Managesend\DataResponse\EmailCampaign\CampaignUnsubscribesResponse($response);
    }

    /**
     * @param $campaignId
     * @param array $params = [
     *                      'page' => 'int',
     *                      'page_size' => 'int',
     *                      'order_by' => 'string',
     *                      'direction' => 'asc|desc'
     *                      ]
     *
     * @return \Managesend\DataResponse\EmailCampaign\CampaignBouncesResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignBounces($campaignId, array $params = array())
    {
        $url = $this->getRestUrl("/emailcampaign/bounces/{clientId}/{campaignId}", array("{campaignId}" => $campaignId));
        $response = $this->get($url, $this->readLimits($params));
        return new \Managesend\DataResponse\EmailCampaign\CampaignBouncesResponse($response);
    }

    /**
     * @param $campaignId
     * @param array $params = [
     *                      'page' => 'int',
     *                      'page_size' => 'int',
     *                      'order_by' => 'string',
     *                      'direction' => 'asc|desc'
     *                      ]
     *
     * @return \Managesend\DataResponse\EmailCampaign\CampaignUnsubscribesResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCampaignSpams($campaignId, array $params = array())
    {
        $url = $this->getRestUrl("/emailcampaign/spams/{clientId}/{campaignId}", array("{campaignId}" => $campaignId));
        $response = $this->get($url, $this->readLimits($params));
        return new \Managesend\DataResponse\EmailCampaign\CampaignUnsubscribesResponse($response);
    }

    /**
     * @param array $data = [
     *                    'campaignName' => 'string',
     *                    'subject' => 'string',
     *                    'fromName' => 'string',
     *                    'fromEmail' => 'string',
     *                    'templateId' => 'int',
     *                    'preheader' => 'string'
     *                    'listIds' => 'array',
     *                    'segmentIds' => 'array',
     *                    'sendDateTime' => 'datetime 2016-12-23 09:10' ,
     *                    'confirmationEmail' => 'string',
     *                    'confirmationPhone' => 'string'
     *                    ]
     *
     * @return \Managesend\DataResponse\EmailCampaign\CampaignResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function createCampaign(array $data)
    {
        $url = $this->getRestUrl("/emailcampaign/create/{clientId}");
        $response = $this->post($url, array(), $data);
        return new \Managesend\DataResponse\EmailCampaign\CampaignResponse($response);
    }

    /**
     * @param $campaignId
     *
     * @return bool
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function deleteCampaign($campaignId)
    {
        $url = $this->getRestUrl("/emailcampaign/delete/{clientId}/{campaignId}", array("{campaignId}" => $campaignId));
        return $this->delete($url);
    }

    /**
     * @param $campaignId
     *
     * @return \Managesend\DataResponse\EmailCampaign\UnscheduleCampaignResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function unscheduleCampaign($campaignId)
    {
        $url = $this->getRestUrl("/emailcampaign/unschedule/{clientId}/{campaignId}", array("{campaignId}" => $campaignId));
        $response = $this->post($url);
        return new \Managesend\DataResponse\EmailCampaign\UnscheduleCampaignResponse($response);
    }
}