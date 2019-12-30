<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\SmsKeyword;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class SmsKeyword
 * @package Managesend\DataClass\Segment
 */
class SmsKeyword extends AbstractHydrator
{
    /** @var string */
    protected $keywordId;

    /** @var string */
    protected $keyword;

    /** @var integer */
    protected $listId;

    /** @var string */
    protected $type;

    /** @var boolean */
    protected $autoSend;

    /** @var boolean */
    protected $textToJoin;

    /** @var string */
    protected $content;

    /** @var array */
    protected $triggers;

    /** @var string */
    protected $createDate;

    /**
     * @return string
     */
    public function getKeywordId()
    {
        return $this->keywordId;
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @return int
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function isAutoSend()
    {
        return $this->autoSend;
    }

    /**
     * @return bool
     */
    public function isTextToJoin()
    {
        return $this->textToJoin;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return array
     */
    public function getTriggers()
    {
        return $this->triggers;
    }

    /**
     * @param string $trigger
     *
     * @return bool
     */
    public function hasTrigger($trigger)
    {
        foreach ($this->triggers as $triggers){
            if($triggers["name"] == $trigger){
                return true;
            }
        }
        return false;
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
}