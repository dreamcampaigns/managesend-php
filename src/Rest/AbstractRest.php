<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Managesend\Rest;

use Managesend\Exceptions\ConfigurationException;
use Managesend\Exceptions\RestException;
use Managesend\HttpClient\Response;
use Managesend\RestClient;
use Managesend\Hydrator\ResponseResponse;
use Managesend\Hydrator\HydratorInterface;

abstract class AbstractRest
{
    /**
     * @const int MAX_PAGE_SIZE largest page the Managesend API will return
     */
    const MAX_PAGE_SIZE = 1000;

    /**
     * @var \Managesend\RestClient
     */
    protected $restClient;

    /**
     * @param \Managesend\RestClient $restClient
     */
    public function __construct(RestClient $restClient)
    {
        $this->restClient = $restClient;
    }

    /**
     * @param $uri
     *
     * @return string
     */
    protected function getRestUrl($uri, array $params = array())
    {
        $uri = \sprintf("%s%s", $this->restClient->getBaseUrl(), $uri);
        if ($params) {
            $uri = \str_replace(\array_keys($params), \array_values($params), $uri); //rawurlencode
        }
        if (\strpos($uri, "{clientId}") !== FALSE) {
            if (!$this->restClient->getClientId()) {
                throw new ConfigurationException("Client id is required for this call");
            }
            $uri = \str_replace("{clientId}", $this->restClient->getClientId(), $uri);
        }
        return $uri;
    }

    /**
     * Create the best possible exception for the response.
     *
     * Attempts to parse the response for Managesend Standard error messages and use
     * those to populate the exception, falls back to generic error message and
     * HTTP status code.
     *
     * @param Response $response Error response
     * @param string $header     Header for exception message
     *
     * @return Managesend
     */
    protected function exception($response, $header)
    {
        $message = '[HTTP ' . $response->getStatusCode() . '] ' . $header;

        $content = $response->getRawContent();
        if (\is_array($content)) {
            $message .= isset($content["error"]['message']) ? ': ' . $content["error"]['message'] : '';
            $code = isset($content["error"]['code']) ? $content["error"]['code'] : $response->getStatusCode();
            return new RestException($message, $code, $response->getStatusCode());
        } else {
            return new RestException($message, $response->getStatusCode(), $response->getStatusCode());
        }
    }

    /**
     * @param $uri
     * @param array $params
     * @param array $headers
     * @param null $timeout
     *
     * @return \Managesend\HttpClient\Response
     */
    protected function get($uri, $params = array(), $headers = array(), $timeout = NULL)
    {
        $response = $this->restClient->request("GET",$uri,$params,array(),$headers,null,null,$timeout);

        if ($response->getStatusCode() < 200 || $response->getStatusCode() >= 300) {
            throw $this->exception($response, 'Unable to fetch record');
        }

        return $response;
    }

    /**
     * @param $uri
     * @param array $params
     * @param array $data
     * @param array $headers
     * @param null $timeout
     *
     * @return \Managesend\HttpClient\Response
     */
    protected function post($uri, $params = array(), $data = array(), $headers = array(), $timeout = NULL)
    {
        $response = $this->restClient->request("POST",$uri,$params,$data,$headers,null,null,$timeout);

        if ($response->getStatusCode() < 200 || $response->getStatusCode() >= 300) {
            throw $this->exception($response, 'Unable to create record');
        }

        return $response;
    }

    /**
     * @param $uri
     * @param array $params
     * @param array $data
     * @param array $headers
     * @param null $timeout
     *
     * @return \Managesend\HttpClient\Response
     */
    protected function put($uri, $params = array(), $data = array(), $headers = array(), $timeout = NULL)
    {
        $response = $this->restClient->request("PUT",$uri,$params,$data,$headers,null,null,$timeout);

        if ($response->getStatusCode() < 200 || $response->getStatusCode() >= 300) {
            throw $this->exception($response, 'Unable to create record');
        }

        return $response;
    }

    /**
     * @param $uri
     * @param array $params
     * @param array $data
     * @param array $headers
     * @param null $timeout
     *
     * @return \Managesend\HttpClient\Response
     */
    protected function patch($uri, $params = array(), $data = array(),$headers = array(), $timeout = NULL)
    {
        $response = $this->restClient->request("PATCH",$uri,$params,$data,$headers,null,null,$timeout);

        if ($response->getStatusCode() < 200 || $response->getStatusCode() >= 300) {
            throw $this->exception($response, 'Unable to update record');
        }

        return $response;
    }

    /**
     * @param $uri
     * @param array $params
     * @param array $data
     * @param array $headers
     * @param null $timeout
     *
     * @return bool
     */
    protected function delete($uri, $params = array(), $data = array(), $headers = array(), $timeout = NULL)
    {
        $response = $this->restClient->request("DELETE",$uri,$params,$data,$headers,null,null,$timeout);

        if ($response->getStatusCode() < 200 || $response->getStatusCode() >= 300) {
            throw $this->exception($response, 'Unable to delete record');
        }

        return $response->getStatusCode() == 200;
    }

    /**
     * @param array $params
     *
     * @return array
     */
    protected function readLimits(array $params)
    {
        $params["page_size"] = $params["page_size"] ?: self::MAX_PAGE_SIZE;
        $params["page_size"] = \min($params["page_size"], self::MAX_PAGE_SIZE);

        return array_merge(array(
            'page' => 1,
            'page_size' => NULL,
            'order_by' => NULL,
            'direction' => NULL
        ), $params);
    }

    public function __toString()
    {
        return '[Service]';
    }
}
