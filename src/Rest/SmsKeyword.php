<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

class SmsKeyword extends AbstractRest
{
    /**
     * @return \Managesend\DataResponse\SmsKeyword\SmsKeywordsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getKeywords()
    {
        $url = $this->getRestUrl("/smskeywords/{clientId}");
        $response = $this->get($url);
        return new \Managesend\DataResponse\SmsKeyword\SmsKeywordsResponse($response);
    }

    /**
     * @param $keywordId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\SmsKeyword\SubscribersResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getKeywordSubscribers($keywordId, array $params=array())
    {
        $url = $this->getRestUrl("/smskeyword/subscribers/{clientId}/{keywordId}", array("{keywordId}"=> $keywordId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\SmsKeyword\SubscribersResponse($response);
    }

    /**
     * @param $keywordId
     * @param null $fromDate filter from date
     * @param null $toDate filter to date
     *
     * @return \Managesend\DataResponse\SmsKeyword\SmsKeywordSummaryResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getKeywordSummary($keywordId,$fromDate=null,$toDate=null)
    {
        $url = $this->getRestUrl("/smskeyword/summary/{clientId}/{keywordId}", array("{keywordId}"=> $keywordId));
        $response = $this->get($url,array("from_date"=>$fromDate,"to_date"=>$toDate));
        return new \Managesend\DataResponse\SmsKeyword\SmsKeywordSummaryResponse($response);
    }
}