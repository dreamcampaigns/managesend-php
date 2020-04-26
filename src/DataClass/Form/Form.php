<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Form;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class Form
 * @package Managesend\DataClass\Form
 */
class Form extends AbstractHydrator
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $name;

    /** @var integer */
    protected $listId;

    /** @var boolean */
    protected $isActive;

    /** @var string */
    protected $sendForm;

    /** @var boolean */
    protected $dynamicEmail;

    /** @var array */
    protected $sendToEmail;

    /** @var string */
    protected $emailSubject;

    /** @var boolean */
    protected $displayMessage;

    /** @var string */
    protected $thanksMessage;

    /** @var boolean */
    protected $sendConfirmationEmail;

    /** @var string */
    protected $confirmationEmailFrom;

    /** @var string */
    protected $confirmationEmailSubject;

    /** @var integer */
    protected $confirmationEmailTemplateId;

    /** @var string */
    protected $bgColor;

    /** @var string */
    protected $locale;

    /** @var string */
    protected $createDate;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * @return string
     */
    public function getSendForm()
    {
        return $this->sendForm;
    }

    /**
     * @return bool
     */
    public function isDynamicEmail()
    {
        return $this->dynamicEmail;
    }

    /**
     * @return array
     */
    public function getSendToEmail()
    {
        return $this->sendToEmail;
    }

    /**
     * @param string $email
     *
     * @return bool
     */
    public function hasSendToEmail($email)
    {
        return \in_array($email,$this->sendToEmail);
    }

    /**
     * @return string
     */
    public function getEmailSubject()
    {
        return $this->emailSubject;
    }

    /**
     * @return bool
     */
    public function isDisplayMessage()
    {
        return $this->displayMessage;
    }

    /**
     * @return string
     */
    public function getThanksMessage()
    {
        return $this->thanksMessage;
    }

    /**
     * @return bool
     */
    public function isSendConfirmationEmail()
    {
        return $this->sendConfirmationEmail;
    }

    /**
     * @return string
     */
    public function getConfirmationEmailFrom()
    {
        return $this->confirmationEmailFrom;
    }

    /**
     * @return string
     */
    public function getConfirmationEmailSubject()
    {
        return $this->confirmationEmailSubject;
    }

    /**
     * @return int
     */
    public function getConfirmationEmailTemplateId()
    {
        return $this->confirmationEmailTemplateId;
    }

    /**
     * @return string
     */
    public function getBgColor()
    {
        return $this->bgColor;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
}