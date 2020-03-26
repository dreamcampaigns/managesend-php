<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

class Template extends AbstractRest
{
    /**
     * @return \Managesend\DataResponse\Template\TemplatesResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getTemplates()
    {
        $url = $this->getRestUrl("/templates/{clientId}");
        $response = $this->get($url);
        return new \Managesend\DataResponse\Template\TemplatesResponse($response);
    }

    /**
     * @param $templateId
     *
     * @return \Managesend\DataResponse\Template\TemplateDetailResponse
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getTemplateDetails($templateId)
    {
        $url = $this->getRestUrl("/template/detail/{clientId}/{templateId}", array("{templateId}" => $templateId));
        $response = $this->get($url);
        return new \Managesend\DataResponse\Template\TemplateDetailResponse($response);
    }

    /**
     * @param $templateId
     * @param $fromEmail
     * @param $toEmail
     * @param $subject
     *
     * @return bool
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function sendTemplatePreview($templateId, $fromEmail, $toEmail, $subject)
    {
        $url = $this->getRestUrl("/template/preview/{clientId}/{templateId}", array("{templateId}" => $templateId));
        $response = $this->get($url, array("fromEmail" => $fromEmail, "toEmail" => $toEmail, "subject" => $subject));
        return $response->getStatusCode() == 200;
    }
}