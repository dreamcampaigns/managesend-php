<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Managesend\Rest;

class Lists extends AbstractRest
{
    /**
     * @return \Managesend\DataResponse\Lists\ListsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getLists()
    {
        $url = $this->getRestUrl("/lists/{clientId}");
        $response = $this->get($url);
        return new \Managesend\DataResponse\Lists\ListsResponse($response);
    }

    /**
     * @param $listId
     *
     * @return \Managesend\DataResponse\Lists\ListDetailsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getListDetails($listId)
    {
        $url = $this->getRestUrl("/lists/detail/{clientId}/{listId}", array("{listId}" => $listId));
        $response = $this->get($url);
        return new \Managesend\DataResponse\Lists\ListDetailsResponse($response);
    }

    /**
     * @param array $data = [
     *                    'listName' => 'string',
     *                    'unsubscribeType' => 'all',
     *                    'unsubscribePage' => 'string',
     *                    ]
     *
     * @return \Managesend\DataResponse\Lists\ListDetailsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function createList(array $data)
    {
        $url = $this->getRestUrl("/lists/create/{clientId}");
        $response = $this->post($url, array(), $data);
        return new \Managesend\DataResponse\Lists\ListDetailsResponse($response);
    }

    /**
     * @param $listId
     * @param array $data = [
     *                    'listName' => 'string',
     *                    'unsubscribeType' => 'all',
     *                    'unsubscribePage' => 'string',
     *                    ]
     *
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function updateList($listId, array $data = array())
    {
        $url = $this->getRestUrl("/lists/update/{clientId}/{listId}", array("{listId}" => $listId));
        $response = $this->patch($url, array(), $data);
        return new \Managesend\DataResponse\Lists\ListDetailsResponse($response);
    }

    /**
     * @param $listId
     *
     * @return bool
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function deleteList($listId)
    {
        $url = $this->getRestUrl("/lists/delete/{clientId}/{listId}", array("{listId}" => $listId));
        return $this->delete($url);
    }

    /**
     * @param $listId
     *
     * @return \Managesend\DataResponse\Lists\CustomfieldsResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getListCustomfields($listId)
    {
        $url = $this->getRestUrl("/lists/customfields/{clientId}/{listId}", array("{listId}" => $listId));
        $response = $this->get($url);
        return new \Managesend\DataResponse\Lists\CustomfieldsResponse($response);
    }

    /**
     * @param int $listId
     * @param array $data = [
     *                    'type' => 'string',
     *                    'name' => 'string',
     *                    'visible' => 'true|false',
     *                    'required" => 'true|false',
     *                    'options' => 'array',
     *                    ]
     *
     * @return \Managesend\DataResponse\Lists\CustomfieldResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function createCustomfield($listId, array $data)
    {
        $url = $this->getRestUrl("/lists/customfield/create/{clientId}/{listId}", array("{listId}" => $listId));
        $response = $this->post($url, array(), $data);
        return new \Managesend\DataResponse\Lists\CustomfieldResponse($response);
    }

    /**
     * @param $listId
     * @param $fieldName
     * @param array $data = [
     *                    'name' => 'string',
     *                    'visible' => 'true|false',
     *                    'required" => 'true|false',
     *                    'options' => 'array'
     *                    ]
     *
     * @return \Managesend\DataResponse\Lists\CustomfieldResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function updateCustomfield($listId, $fieldName, array $data)
    {
        $url = $this->getRestUrl("/lists/customfield/update/{clientId}/{listId}/{fieldName}", array("{listId}" => $listId, "{fieldName}" => $fieldName));
        $response = $this->patch($url, array(), $data);
        return new \Managesend\DataResponse\Lists\CustomfieldResponse($response);
    }

    /**
     * @param $listId
     * @param $fieldName
     *
     * @return bool
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function deleteCustomfield($listId, $fieldName)
    {
        $url = $this->getRestUrl("/lists/customfield/delete/{clientId}/{listId}/{fieldName}", array("{listId}" => $listId, "{fieldName}" => $fieldName));
        return $this->delete($url);
    }

    /**
     * @param $subscriber email or mobile
     *
     * @return \Managesend\DataResponse\Lists\ListSubscribersResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getSubscriberList($subscriber)
    {
        $url = $this->getRestUrl("/lists/subscriber/{clientId}");
        $response = $this->get($url, array("subscriber" => $subscriber));
        return new \Managesend\DataResponse\Lists\ListSubscribersResponse($response);
    }
}