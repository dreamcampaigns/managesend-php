<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Managesend\HttpClient;

class Response
{
    protected $headers;
    protected $content;
    protected $statusCode;

    public function __construct($statusCode, $content, $headers = array())
    {
        $this->statusCode = $statusCode;
        $this->content = $content;
        $this->headers = $headers;
    }

    /**
     * @return mixed
     */
    public function getRawContent()
    {
        return \json_decode($this->content, TRUE);
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        $content = $this->getRawContent();
        if(\is_array($content) && \array_key_exists("data",$content)){
            return $content["data"];
        }
        return $content;
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param $headerKey
     *
     * @return string|null
     */
    public function getHeader($headerKey)
    {
        $headerKey = strtolower($headerKey);
        return \array_key_exists($headerKey,$this->headers) ? $this->headers[$headerKey] : null;
    }

    /**
     * @return array
     */
    public function getRateLimits()
    {
        $results = array();
        $headers = array("X-RateLimit-Limit" => "limit", "X-RateLimit-Remaining" => "remaining", "X-RateLimit-Reset" => "reset");
        foreach ($headers as $header => $label) {
            $headerKey = strtolower($header);
            if (!\array_key_exists($headerKey, $this->headers)) {
                continue;
            }
            $results[$label] = $this->headers[$headerKey];
        }

        return $results;
    }

    /**
     * @return bool
     */
    public function isRatelimitExceeded()
    {
        return $this->getStatusCode() == 429;
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return $this->getStatusCode() >= 200 && $this->getStatusCode() < 400;
    }

    /**
     * @return bool
     */
    public function isError()
    {
        return $this->getStatusCode() >= 400 && $this->getStatusCode() < 600;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return '[Response] HTTP ' . $this->getStatusCode() . ' ' . $this->content;
    }
}
