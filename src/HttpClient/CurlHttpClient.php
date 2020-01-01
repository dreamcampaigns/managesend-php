<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\HttpClient;

/**
 * Class CurlHttpClient
 * @package Managesend\HttpClient
 */
final class CurlHttpClient implements HttpClient
{
    const DEFAULT_TIMEOUT = 60;

    public $lastRequest = NULL;
    public $lastResponse = NULL;
    protected $curlOptions = array();
    protected $responseHeaders=array();
    protected $timeout = NULL;

    /**
     * CurlHttpClient constructor.
     *
     * @param null $timeout
     */
    public function __construct($timeout=NULL)
    {
        $this->timeout = \is_null($timeout) ? self::DEFAULT_TIMEOUT : $timeout;
        $this->curlOptions = array(
            CURLOPT_HEADER => FALSE,
            CURLOPT_HEADERFUNCTION => array($this, 'curlHeaderCallback'),
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_INFILESIZE => NULL,
            CURLOPT_HTTPHEADER => array(),
        );
    }

    /**
     * @param string $method
     * @param string $url
     * @param array $params
     * @param array $data
     * @param array $headers
     * @param null $user
     * @param null $password
     * @param null $timeout
     *
     * @return \Managesend\HttpClient\Response|null
     * @throws \ErrorException
     */
    public function request($method, $url, $params = array(), $data = array(), $headers = array(), $user = NULL, $password = NULL,$timeout = NULL)
    {
        $options = $this->options($method, $url, $params, $data, $headers,$user, $password, $timeout);

        $this->lastRequest = $options;
        $this->lastResponse = NULL;

        try {
            if (!$curl = \curl_init()) {
                throw new \ErrorException('Unable to initialize cURL');
            }

            if (!\curl_setopt_array($curl, $options)) {
                throw new \ErrorException(\curl_error($curl));
            }

            if (!$response = \curl_exec($curl)) {
                throw new \ErrorException(\curl_error($curl));
            }

            $statusCode = \curl_getinfo($curl, CURLINFO_HTTP_CODE);

            $responseHeaders = array();
            foreach ($this->responseHeaders as $line) {
                if(strpos($line,":") !== false) {
                    list($key, $value) = \explode(':', $line, 2);
                    if (!$key) {
                        continue;
                    }
                    $responseHeaders[\trim(\strtolower($key))] = \trim($value);
                }
            }

            \curl_close($curl);

            $this->lastResponse = new Response($statusCode, $response, $responseHeaders);

            return $this->lastResponse;
        } catch (\ErrorException $e) {
            if (isset($curl) && \is_resource($curl)) {
                \curl_close($curl);
            }

            throw $e;
        }
    }

    /**
     * @param $method
     * @param $url
     * @param array $params
     * @param array $data
     * @param array $headers
     * @param null $user
     * @param null $password
     * @param null $timeout
     *
     * @return array
     * @throws \ErrorException
     */
    public function options($method, $url, $params = array(), $data = array(), $headers = array(), $user = NULL, $password = NULL, $timeout = NULL)
    {
        $timeout = \is_null($timeout) ? $this->timeout : $timeout;
        $options = $this->curlOptions;
        $options[CURLOPT_URL] = $url;
        $options[CURLOPT_TIMEOUT] = $timeout;
        $options[CURLOPT_HTTPHEADER] = array();

        foreach ($headers as $key => $value) {
            $options[CURLOPT_HTTPHEADER][] = "$key: $value";
        }

        if ($user && $password) {
            $options[CURLOPT_HTTPHEADER][] = sprintf('Authorization: Basic %s', \base64_encode("$user:$password"));
        }

        $body = $this->buildQuery($params);
        if ($body) {
            $options[CURLOPT_URL] .= '?' . $body;
        }

        switch (\strtolower(\trim($method))) {
            case 'get':
                $options[CURLOPT_HTTPGET] = TRUE;
                $options[CURLOPT_CUSTOMREQUEST] = 'GET';
                break;
            case 'post':
                $options[CURLOPT_POST] = TRUE;
                if ($data) {
                    $options[CURLOPT_POSTFIELDS] = $this->buildQuery($data);
                }
                break;
            case 'put':
                $options[CURLOPT_CUSTOMREQUEST] = 'PUT';
                if ($data) {
                    $options[CURLOPT_POSTFIELDS] = $this->buildQuery($data);
                }
                break;
            case 'patch':
                $options[CURLOPT_CUSTOMREQUEST] = 'PATCH';
                if ($data) {
                    $options[CURLOPT_POSTFIELDS] = $this->buildQuery($data);
                }
                break;
            case 'delete':
                $options[CURLOPT_CUSTOMREQUEST] = 'DELETE';
                if($data) {
                    $options[CURLOPT_POSTFIELDS] = $this->buildQuery($data);
                }
                break;
            case 'head':
                $options[CURLOPT_NOBODY] = TRUE;
                break;
            default:
                throw new \ErrorException(sprintf("%s not supported",$method));
        }

        return $options;
    }

    /**
     * @param $params
     *
     * @return array|string
     */
    public function buildQuery($params)
    {
        if (\is_string($params)) {
            return $params;
        }

        $params = $params ?: array();
        return \http_build_query($params);
    }

    /**
     * Handle writing the response headers
     *
     * @param resource $curl      The current curl resource
     * @param string $header_line A line from the list of response headers
     *
     * @return int Returns the length of the $header_line
     */
    public function curlHeaderCallback($curl, $header_line)
    {
        $header = trim($header_line, "\r\n");
        if ($header) {
            $this->responseHeaders[] = $header;
        }

        return strlen($header_line);
    }
}