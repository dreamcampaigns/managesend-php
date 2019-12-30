<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

class Form extends AbstractRest
{
    /**
     * @return \Managesend\DataResponse\Form\FormsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getForms()
    {
        $url = $this->getRestUrl("/forms/{clientId}");
        $response = $this->get($url);
        return new \Managesend\DataResponse\Form\FormsResponse($response);
    }

    /**
     * @param $formId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Form\FormSubscribersResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getFormSubscribers($formId, array $params=array())
    {
        $url = $this->getRestUrl("/form/subscribers/{formId}", array("{formId}"=> $formId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\Form\FormSubscribersResponse($response);
    }

    /**
     * @param $formId
     * @param null $fromDate filter from date
     * @param null $toDate filter to date
     *
     * @return \Managesend\DataResponse\Form\FormSummary
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getFormSummary($formId,$fromDate=null,$toDate=null)
    {
        $url = $this->getRestUrl("/form/summary/{formId}", array("{formId}"=> $formId));
        $response = $this->get($url,array("from_date"=>$fromDate,"to_date"=>$toDate));
        return new \Managesend\DataResponse\Form\FormSummary($response);
    }
}