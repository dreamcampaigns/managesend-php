<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Template;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class Template
 * @package Managesend\DataClass\Template
 */
class Template extends AbstractHydrator
{
    /** @var int */
    protected $templateId;

    /** @var string */
    protected $templateName;

    /** @var boolean */
    protected $transactional;

    /** @var string */
    protected $previewUrl;

    /** @var string */
    protected $screenshotUrl;

    /** @var string */
    protected $modifyDate;

    /**
     * @return int
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @return string
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * @return bool
     */
    public function isTransactional()
    {
        return $this->transactional;
    }

    /**
     * @return string
     */
    public function getPreviewUrl()
    {
        return $this->previewUrl;
    }

    /**
     * @return string
     */
    public function getScreenshotUrl()
    {
        return $this->screenshotUrl;
    }

    /**
     * @return string
     */
    public function getModifyDate()
    {
        return $this->modifyDate;
    }
}