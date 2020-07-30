<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Utility;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class TestConnection
 * @package Managesend\DataClass\TestConnection
 */
class TestConnection extends AbstractHydrator
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $clientId;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @return bool
     */
    public function isAccountLevel()
    {
        return empty($this->clientId);
    }

    /**
     * @return bool
     */
    public function isClientLevel()
    {
        return !empty($this->clientId);
    }
}