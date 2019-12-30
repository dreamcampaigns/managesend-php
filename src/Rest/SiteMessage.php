<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

class SiteMessage extends AbstractRest
{
    /**
     * @return \Managesend\DataResponse\SiteMessage\SiteMessagesResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getSitemessages()
    {
        $url = $this->getRestUrl("/sitemessages/{clientId}");
        $response = $this->get($url);
        return new \Managesend\DataResponse\SiteMessage\SiteMessagesResponse($response);
    }

    /**
     * @return \Managesend\DataResponse\SiteMessage\TrackingResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getTrackingcode()
    {
        $url = $this->getRestUrl("/sitemessage/trackingid/{clientId}");
        $response = $this->get($url);
        return new \Managesend\DataResponse\SiteMessage\TrackingResponse($response);
    }

    /**
     * @param $sitemessageId
     *
     * @return bool
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function deleteSitemessage($sitemessageId)
    {
        $url = $this->getRestUrl("/sitemessage/delete/{clientId}/{sitemessageId}", array("{sitemessageId}"=> $sitemessageId));
        return $this->delete($url);
    }

    /**
     * @param $sitemessageId
     *
     * @return \Managesend\DataResponse\SiteMessage\SitemessageResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function activateSitemessage($sitemessageId)
    {
        $url = $this->getRestUrl("/sitemessage/activate/{clientId}/{sitemessageId}", array("{sitemessageId}"=> $sitemessageId));
        $response = $this->patch($url);
        return new \Managesend\DataResponse\SiteMessage\SitemessageResponse($response);
    }

    /**
     * @param $sitemessageId
     *
     * @return \Managesend\DataResponse\SiteMessage\SitemessageResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function deactivateSitemessage($sitemessageId)
    {
        $url = $this->getRestUrl("/sitemessage/deactivate/{clientId}/{sitemessageId}", array("{sitemessageId}"=> $sitemessageId));
        $response = $this->patch($url);
        return new \Managesend\DataResponse\SiteMessage\SitemessageResponse($response);
    }

    /**
     * @param $sitemessageId
     * @param null $fromDate filter from date
     * @param null $toDate filter to date
     *
     * @return \Managesend\DataResponse\SiteMessage\LinkSummariesResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getSitemessageRefferingSummary($sitemessageId,$fromDate=null,$toDate=null)
    {
        $url = $this->getRestUrl("/sitemessage/linksummary/{clientId}/{sitemessageId}", array("{sitemessageId}"=> $sitemessageId));
        $response = $this->get($url,array("from_date"=>$fromDate,"to_date"=>$toDate));
        return new \Managesend\DataResponse\SiteMessage\LinkSummariesResponse($response);
    }

    /**
     * @param $sitemessageId
     * @param null $fromDate filter from date
     * @param null $toDate filter to date
     *
     * @return \Managesend\DataResponse\SiteMessage\ClickSummariesResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getSitemessageClickSummary($sitemessageId,$fromDate=null,$toDate=null)
    {
        $url = $this->getRestUrl("/sitemessage/clicksummary/{clientId}/{sitemessageId}", array("{sitemessageId}"=> $sitemessageId));
        $response = $this->get($url,array("from_date"=>$fromDate,"to_date"=>$toDate));
        return new \Managesend\DataResponse\SiteMessage\ClickSummariesResponse($response);
    }
}