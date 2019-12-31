<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

class Subscriber extends AbstractRest
{
    /**
     * @param int $listId
     * @param array $data = [
     *  'oldEmail' => 'string',
     *  'email' => 'string',
     *  'mobile' => 'string',
     *  'company' => 'string',
     *  'firstName' => 'string',
     *  'lastName' => 'string',
     *  'address' => 'string',
     *  'city' => 'string',
     *  'state' => 'string',
     *  'postalCode' => 'string',
     *  'country' => 'string',
     *  'customFields' => 'array',
     *  'strict' => 'true|false',
     *  'resubscribe' => 'true|false',
     *  'reoptin' => 'true|false'
     * ]
     *
     * @return \Managesend\DataResponse\Subscriber\SubscriberResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function addUpdateSubscriber($listId, array $data=array())
    {
        $url = $this->getRestUrl("/subscriber/create/{clientId}/{listId}", array("{listId}"=> $listId));
        $response = $this->post($url,array(),$data);
        return new \Managesend\DataResponse\Subscriber\SubscriberResponse($response);
    }

    /**
     * @param $listId
     * @param $subscriber email or mobile
     *
     * @return \Managesend\DataResponse\Subscriber\FindSubscribersResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getSubscriberDetails($listId,$subscriber)
    {
        $url = $this->getRestUrl("/subscriber/details/{clientId}/{listId}", array("{listId}" => $listId));
        $response = $this->get($url,array("subscriber"=>$subscriber));
        return new \Managesend\DataResponse\Subscriber\FindSubscribersResponse($response);
    }

    /**
     * @param $listId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Subscriber\SubscribersResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getActiveSubscribers($listId,array $params=array())
    {
        $url = $this->getRestUrl("/subscribers/active/{clientId}/{listId}", array("{listId}" => $listId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\Subscriber\SubscribersResponse($response);
    }

    /**
     * @param $listId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Subscriber\SubscribersResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getInactiveSubscribers($listId,array $params=array())
    {
        $url = $this->getRestUrl("/subscribers/inactive/{clientId}/{listId}", array("{listId}" => $listId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\Subscriber\SubscribersResponse($response);
    }

    /**
     * @param $listId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Subscriber\SubscribersResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getEmailUnsubscribedSubscribers($listId,array $params=array())
    {
        $url = $this->getRestUrl("/subscribers/email/unsubscribed/{clientId}/{listId}", array("{listId}" => $listId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\Subscriber\SubscribersResponse($response);
    }

    /**
     * @param $listId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Subscriber\SubscribersResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getEmailBouncedSubscribers($listId,array $params=array())
    {
        $url = $this->getRestUrl("/subscribers/email/bounced/{clientId}/{listId}", array("{listId}" => $listId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\Subscriber\SubscribersResponse($response);
    }

    /**
     * @param $listId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Subscriber\SubscribersResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getSmsOptinSubscribers($listId,array $params=array())
    {
        $url = $this->getRestUrl("/subscribers/sms/subscribed/{clientId}/{listId}", array("{listId}" => $listId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\Subscriber\SubscribersResponse($response);
    }

    /**
     * @param $listId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Subscriber\SubscribersResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getSmsOptoutSubscribers($listId,array $params=array())
    {
        $url = $this->getRestUrl("/subscribers/sms/unsubscribed/{clientId}/{listId}", array("{listId}" => $listId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\Subscriber\SubscribersResponse($response);
    }

    /**
     * @param $listId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Subscriber\SubscribersResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getSmsFailedSubscribers($listId,array $params=array())
    {
        $url = $this->getRestUrl("/subscribers/sms/failed/{clientId}/{listId}", array("{listId}" => $listId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\Subscriber\SubscribersResponse($response);
    }

    /**
     * @param $listId
     * @param $email
     *
     * @return \Managesend\DataResponse\Subscriber\EmailUnsubscribeResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function unsubscribeEmailSubscriber($listId, $email)
    {
        $url = $this->getRestUrl("/subscriber/email/unsubscribe/{clientId}/{listId}", array("{listId}"=> $listId));
        $response = $this->post($url,array(),array("email"=>$email));
        return new \Managesend\DataResponse\Subscriber\EmailUnsubscribeResponse($response);
    }

    /**
     * @param $listId
     * @param $mobile
     *
     * @return \Managesend\DataResponse\Subscriber\SmsOptoutsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function optoutSmsSubscriber($listId, $mobile)
    {
        $url = $this->getRestUrl("/subscriber/sms/unsubscribe/{clientId}/{listId}", array("{listId}"=> $listId));
        $response = $this->post($url,array(),array("mobile"=>$mobile));
        return new \Managesend\DataResponse\Subscriber\SmsOptoutsResponse($response);
    }

    /**
     * @param $listId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Subscriber\EmailSuppressionsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getEmailSuppressionlist($listId,array $params=array())
    {
        $url = $this->getRestUrl("/subscribers/email/suppressionlist/{clientId}", array("{listId}" => $listId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\Subscriber\EmailSuppressionsResponse($response);
    }

    /**
     * @param $listId
     * @param array $params = [
     *  'page' => 'int',
     *  'page_size' => 'int',
     *  'order_by' => 'string',
     *  'direction' => 'asc|desc'
     * ]
     *
     * @return \Managesend\DataResponse\Subscriber\SmsSuppressionsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getSmsSuppressionlist($listId,array $params=array())
    {
        $url = $this->getRestUrl("/subscribers/sms/suppressionlist/{clientId}", array("{listId}" => $listId));
        $response = $this->get($url,$this->readLimits($params));
        return new \Managesend\DataResponse\Subscriber\SmsSuppressionsResponse($response);
    }

    /**
     * @param $email
     *
     * @return \Managesend\DataResponse\Subscriber\SuppressEmailsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function suppressEmailSubscriber($email)
    {
        $url = $this->getRestUrl("/subscriber/email/suppress/{clientId}");
        $response = $this->post($url,array(),array("email"=>$email));
        return new \Managesend\DataResponse\Subscriber\SuppressEmailsResponse($response);
    }

    /**
     * @param $email
     *
     * @return \Managesend\DataResponse\Subscriber\SuppressEmailsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function unsuppressEmailSubscriber($email)
    {
        $url = $this->getRestUrl("/unsubscriber/email/suppress/{clientId}");
        $response = $this->post($url,array(),array("email"=>$email));
        return new \Managesend\DataResponse\Subscriber\SuppressEmailsResponse($response);
    }

    /**
     * @param $mobile
     *
     * @return \Managesend\DataResponse\Subscriber\SuppressSmsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function suppressSmsSubscriber($mobile)
    {
        $url = $this->getRestUrl("/subscriber/sms/suppress/{clientId}");
        $response = $this->post($url,array(),array("mobile"=>$mobile));
        return new \Managesend\DataResponse\Subscriber\SuppressSmsResponse($response);
    }

    /**
     * @param $mobile
     *
     * @return \Managesend\DataResponse\Subscriber\SuppressSmsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function unsuppressSmsSubscriber($mobile)
    {
        $url = $this->getRestUrl("/subscriber/sms/unsuppress/{clientId}");
        $response = $this->post($url,array(),array("mobile"=>$mobile));
        return new \Managesend\DataResponse\Subscriber\SuppressSmsResponse($response);
    }
}