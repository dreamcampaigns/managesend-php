<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Account;

use Managesend\Hydrator\AbstractHydrator;

/**
 * Class Credit
 * @package Managesend\DataClass\Account
 */
class Credit extends AbstractHydrator
{
    /** @var float */
    protected $accountBalance;

    /**
     * @return float
     */
    public function getAccountBalance()
    {
        return $this->accountBalance;
    }
}