<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Transactional;

/**
 * Class TransactionalDetails
 * @package Managesend\DataClass\Transactional
 */
class TransactionalDetails extends Transactional
{
    /** @var int */
    protected $listId;

    /** @var int */
    protected $templateId;

    /** @var string */
    protected $fromEmail;

    /** @var string */
    protected $fromName;

    /** @var string */
    protected $subject;

    /** @var string */
    protected $preheader;

    /** @var string */
    protected $smsContent;

    /** @var boolean */
    protected $dynamicSmsContent;

    /**
     * @return int
     */
    public function getListId()
    {
        return $this->listId;
    }

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
    public function getFromEmail()
    {
        return $this->fromEmail;
    }

    /**
     * @return string
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getPreheader()
    {
        return $this->preheader;
    }

    /**
     * @return string
     */
    public function getSmsContent()
    {
        return $this->smsContent;
    }

    /**
     * @return bool
     */
    public function isDynamicSmsContent()
    {
        return $this->dynamicSmsContent;
    }
}