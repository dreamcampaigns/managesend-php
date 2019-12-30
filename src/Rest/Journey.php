<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

class Journey extends AbstractRest
{
    /**
     * @return \Managesend\DataResponse\Journey\JourneysResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getJourneys()
    {
        $url = $this->getRestUrl("/journeys/{clientId}");
        $response = $this->get($url);
        return new \Managesend\DataResponse\Journey\JourneysResponse($response);
    }

    /**
     * @param $journeyId
     * @param array $params = [
     *    'page' => 'int',
     *    'page_size' => 'int',
     *    'order_by' => 'string',
     *    'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Journey\JourneysSummaryResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getJourneySummary($journeyId, array $params = array())
    {
        $url = $this->getRestUrl("/journey/summary/{clientId}/{journeyId}", array("{journeyId}" => $journeyId));
        $response = $this->get($url, $this->readLimits($params));
        return new \Managesend\DataResponse\Journey\JourneysSummaryResponse($response);
    }

    /**
     * @param $journeyId
     * @param array $params = [
     *    'page' => 'int',
     *    'page_size' => 'int',
     *    'order_by' => 'string',
     *    'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Journey\JourneyRecipientsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getJourneyRecipients($journeyId, array $params = array())
    {
        $url = $this->getRestUrl("/journey/recipients/{clientId}/{journeyId}", array("{journeyId}" => $journeyId));
        $response = $this->get($url, $this->readLimits($params));
        return new \Managesend\DataResponse\Journey\JourneyRecipientsResponse($response);
    }

    /**
     * @param $journeyId
     * @param array $params = [
     *    'page' => 'int',
     *    'page_size' => 'int',
     *    'order_by' => 'string',
     *    'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Journey\JourneyStatisticsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getJourneyOpens($journeyId, array $params = array())
    {
        $url = $this->getRestUrl("/journey/opens/{clientId}/{journeyId}", array("{journeyId}" => $journeyId));
        $response = $this->get($url, $this->readLimits($params));
        return new \Managesend\DataResponse\Journey\JourneyStatisticsResponse($response);
    }

    /**
     * @param $journeyId
     * @param array $params = [
     *    'page' => 'int',
     *    'page_size' => 'int',
     *    'order_by' => 'string',
     *    'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Journey\JourneyStatisticsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getJourneyClicks($journeyId, array $params = array())
    {
        $url = $this->getRestUrl("/journey/clicks/{clientId}/{journeyId}", array("{journeyId}" => $journeyId));
        $response = $this->get($url, $this->readLimits($params));
        return new \Managesend\DataResponse\Journey\JourneyStatisticsResponse($response);
    }

    /**
     * @param $journeyId
     * @param array $params = [
     *    'page' => 'int',
     *    'page_size' => 'int',
     *    'order_by' => 'string',
     *    'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Journey\JourneyUnsubscribesResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getJourneyUnsubscribes($journeyId, array $params = array())
    {
        $url = $this->getRestUrl("/journey/unsubscribes/{clientId}/{journeyId}", array("{journeyId}" => $journeyId));
        $response = $this->get($url, $this->readLimits($params));
        return new \Managesend\DataResponse\Journey\JourneyUnsubscribesResponse($response);
    }

    /**
     * @param $journeyId
     * @param array $params = [
     *    'page' => 'int',
     *    'page_size' => 'int',
     *    'order_by' => 'string',
     *    'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Journey\JourneyBouncesResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getJourneyBounces($journeyId, array $params = array())
    {
        $url = $this->getRestUrl("/journey/bounces/{clientId}/{journeyId}", array("{journeyId}" => $journeyId));
        $response = $this->get($url, $this->readLimits($params));
        return new \Managesend\DataResponse\Journey\JourneyBouncesResponse($response);
    }

    /**
     * @param $journeyId
     * @param array $params = [
     *    'page' => 'int',
     *    'page_size' => 'int',
     *    'order_by' => 'string',
     *    'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Journey\JourneyUnsubscribesResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getJourneySpams($journeyId, array $params = array())
    {
        $url = $this->getRestUrl("/journey/spams/{clientId}/{journeyId}", array("{journeyId}" => $journeyId));
        $response = $this->get($url, $this->readLimits($params));
        return new \Managesend\DataResponse\Journey\JourneyUnsubscribesResponse($response);
    }
}