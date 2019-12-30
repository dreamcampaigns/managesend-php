<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Lists;

/**
 * Class ListDetails
 * @package Managesend\DataClass\Lists
 */
class ListDetails extends Lists
{
    protected $unsubscribeType;

    /** @var string */
    protected $unsubscribePage;

    /**
     * @return mixed
     */
    public function getUnsubscribeType()
    {
        return $this->unsubscribeType;
    }

    /**
     * @return string
     */
    public function getUnsubscribePage()
    {
        return $this->unsubscribePage;
    }
}