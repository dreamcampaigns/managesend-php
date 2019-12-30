<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

class Transactional extends AbstractRest
{
    /**
     * @return \Managesend\DataResponse\Transactional\TransactionalsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getTransactionals()
    {
        $url = $this->getRestUrl("/transactional/{clientId}");
        $response = $this->get($url);
        return new \Managesend\DataResponse\Transactional\TransactionalsResponse($response);
    }

    /**
     * @param $transactionalId
     *
     * @return \Managesend\DataResponse\Transactional\TransactionalDetailResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getTransactionalDetails($transactionalId)
    {
        $url = $this->getRestUrl("/transactional/details/{clientId}/{transactionalId}", array("{transactionalId}" => $transactionalId));
        $response = $this->get($url);
        return new \Managesend\DataResponse\Transactional\TransactionalDetailResponse($response);
    }

    /**
     * @param $transactionalId
     * @param null $fromDate filter from data
     * @param null $toDate filter to data
     *
     * @return \Managesend\DataResponse\Transactional\TransactionalStatisticsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getTransactionalStatistics($transactionalId, $fromDate=null, $toDate=null)
    {
        $url = $this->getRestUrl("/transactional/statistics/{clientId}/{transactionalId}", array("{transactionalId}" => $transactionalId));
        $response = $this->get($url, array("from_date" => $fromDate, "to_date" => $toDate));
        return new \Managesend\DataResponse\Transactional\TransactionalStatisticsResponse($response);
    }

    /**
     * @param $transactionalId
     * @param array $data = [
     *  'toEmail' => 'string',
     *  'toName' => 'string',
     *  'data' => ['string'=>'string']
     *  'attachments' => ['string'],
     * ]
     *
     * @return \Managesend\DataResponse\Transactional\MessageEmailResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function sendSmartEmail($transactionalId,array $data)
    {
        $url = $this->getRestUrl("/transactional/email/{clientId}/{transactionalId}", array("{transactionalId}" => $transactionalId));
        $response = $this->post($url,array(),$data);
        return new \Managesend\DataResponse\Transactional\MessageEmailResponse($response);
    }

    /**
     * @param $transactionalId
     * @param array $data = [
     *  'subject' => 'string',
     *  'content' => 'string',
     *  'toEmail' => 'string',
     *  'toName' => 'string',
     *  'data' => ['string'=>'string']
     *  'attachments' => ['string'],
     * ]
     *
     * @return \Managesend\DataResponse\Transactional\MessageEmailResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function sendDynamicEmail($transactionalId,array $data)
    {
        $url = $this->getRestUrl("/transactional/email/dynamic/{clientId}/{transactionalId}", array("{transactionalId}" => $transactionalId));
        $response = $this->post($url,array(),$data);
        return new \Managesend\DataResponse\Transactional\MessageEmailResponse($response);
    }

    /**
     * @param $messageId
     *
     * @return \Managesend\DataResponse\Transactional\MessageEmailResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function resendEmail($messageId)
    {
        $url = $this->getRestUrl("/transactional/email/resend/{clientId}/{messageId}", array("{messageId}" => $messageId));
        $response = $this->post($url);
        return new \Managesend\DataResponse\Transactional\MessageEmailResponse($response);
    }

    /**
     * @param $transactionalId
     * @param array $data = [
     *  'toNumber' => 'string',
     *  'data' => ['string'=>'string']
     * ]
     *
     * @return \Managesend\DataResponse\Transactional\MessageSmsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function sendSmartSms($transactionalId,array $data)
    {
        $url = $this->getRestUrl("/transactional/sms/{clientId}/{transactionalId}", array("{transactionalId}" => $transactionalId));
        $response = $this->post($url,array(),$data);
        return new \Managesend\DataResponse\Transactional\MessageSmsResponse($response);
    }

    /**
     * @param $transactionalId
     * @param array $data = [
     *  'toNumber' => 'string',
     *  'content' => 'string',
     *  'data' => ['string'=>'string']
     * ]
     *
     * @return \Managesend\DataResponse\Transactional\MessageSmsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function sendDynamicSms($transactionalId,array $data)
    {
        $url = $this->getRestUrl("/transactional/sms/dynamic/{clientId}/{transactionalId}", array("{transactionalId}" => $transactionalId));
        $response = $this->post($url,array(),$data);
        return new \Managesend\DataResponse\Transactional\MessageSmsResponse($response);
    }

    /**
     * @param $messageId
     *
     * @return \Managesend\DataResponse\Transactional\MessageSmsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function resendSms($messageId)
    {
        $url = $this->getRestUrl("/transactional/sms/resend/{clientId}/{messageId}", array("{messageId}" => $messageId));
        $response = $this->post($url);
        return new \Managesend\DataResponse\Transactional\MessageSmsResponse($response);
    }

    /**
     * @param $transactionalId
     * @param array $params = [
     *  'status' => 'all | queued | delivered | failed | unsubscribed | bounced',
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Transactional\MessagesResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getMessages($transactionalId, array $params=array())
    {
        $url = $this->getRestUrl("/transactional/messages/{clientId}/{transactionalId}", array("{transactionalId}"=> $transactionalId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\Transactional\MessagesResponse($response);
    }

    /**
     * @param $messageId
     *
     * @return \Managesend\DataResponse\Transactional\MessageDetailsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getMessageDetails($messageId)
    {
        $url = $this->getRestUrl("/transactional/message/details/{clientId}/{messageId}", array("{messageId}"=> $messageId));
        $response = $this->get($url);
        return new \Managesend\DataResponse\Transactional\MessageDetailsResponse($response);
    }
}