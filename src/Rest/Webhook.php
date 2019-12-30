<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

class Webhook extends AbstractRest
{
    /**
     * @param $listId
     *
     * @return \Managesend\DataResponse\Webhook\WebhooksResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getWebhooks($listId)
    {
        $url = $this->getRestUrl("/lists/webhooks/{clientId}/{listId}", array("{listId}" => $listId));
        $response = $this->get($url);
        return new \Managesend\DataResponse\Webhook\WebhooksResponse($response);
    }

    /**
     * @param $listId
     * @param array $data = [
     *  'events' => 'array',
     *  'url' => 'string',
     *  'active' => 'true|false',
     * ]
     *
     * @return \Managesend\DataResponse\Webhook\WebhookResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function createWebhook($listId,array $data)
    {
        $url = $this->getRestUrl("/lists/webhook/create/{clientId}/{listId}", array("{listId}" => $listId));
        $response = $this->post($url,array(),$data);
        return new \Managesend\DataResponse\Webhook\WebhookResponse($response);
    }

    /**
     * @param $webhookId
     *
     * @return \Managesend\DataResponse\Webhook\WebhookResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function activateWebhook($webhookId)
    {
        $url = $this->getRestUrl("/lists/webhook/activate/{clientId}/{webhookId}", array("{webhookId}"=> $webhookId));
        $response = $this->patch($url);
        return new \Managesend\DataResponse\Webhook\WebhookResponse($response);
    }

    /**
     * @param $webhookId
     *
     * @return \Managesend\DataResponse\Webhook\WebhookResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function deactivateWebhook($webhookId)
    {
        $url = $this->getRestUrl("/lists/webhook/deactivate/{clientId}/{webhookId}", array("{webhookId}"=> $webhookId));
        $response = $this->patch($url);
        return new \Managesend\DataResponse\Webhook\WebhookResponse($response);
    }

    /**
     * @param $webhookId
     *
     * @return bool
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function deleteWebhook($webhookId)
    {
        $url = $this->getRestUrl("/lists/webhook/delete/{clientId}/{webhookId}", array("{webhookId}"=> $webhookId));
        return $this->delete($url);
    }

    /**
     * @param $webhookId
     *
     * @return bool
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function testWebhook($webhookId)
    {
        $url = $this->getRestUrl("/lists/webhook/test/{clientId}/{webhookId}", array("{webhookId}"=> $webhookId));
        $response = $this->get($url);
        return $response->getStatusCode() == 200;
    }
}