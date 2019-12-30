<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

class Revenue extends AbstractRest
{
    /**
     * @return \Managesend\DataResponse\Revenue\RevenuesResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getRevenues()
    {
        $url = $this->getRestUrl("/revenues/{clientId}");
        $response = $this->get($url);
        return new \Managesend\DataResponse\Revenue\RevenuesResponse($response);
    }

    /**
     * @param $revenueId
     * @param array $param
     *
     * @return \Managesend\DataResponse\Revenue\RevenueTrackResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function trackRevenue($revenueId,array $param)
    {
        $url = $this->getRestUrl("/revenue/track/{revenueId}", array("{revenueId}" => $revenueId));
        $response = $this->get($url,$param);
        return new \Managesend\DataResponse\Revenue\RevenueTrackResponse($response);
    }

    /**
     * @param $revenueId
     * @param array $params = [
     *  'from_date' => 'date',
     *  'to_date' => 'date',
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Revenue\TransactionsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getRevenueTransactions($revenueId, array $params=array())
    {
        $url = $this->getRestUrl("/revenue/transactions/{revenueId}", array("{revenueId}"=> $revenueId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\Revenue\TransactionsResponse($response);
    }

    /**
     * @param $revenueId
     * @param null $fromDate filter from date
     * @param null $toDate filter to date
     *
     * @return \Managesend\DataResponse\Revenue\RevenueSummaryResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getRevenueSummary($revenueId,$fromDate=null,$toDate=null)
    {
        $url = $this->getRestUrl("/revenue/summary/{revenueId}", array("{revenueId}"=> $revenueId));
        $response = $this->get($url,array("from_date"=>$fromDate,"to_date"=>$toDate));
        return new \Managesend\DataResponse\Revenue\RevenueSummaryResponse($response);
    }
}