<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\Rest;

class Utility extends AbstractRest
{
    /**
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getCountries()
    {
        $url = $this->getRestUrl("/utility/countries");
        return $this->get($url);
    }

    /**
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getStates()
    {
        $url = $this->getRestUrl("/utility/states");
        return $this->get($url);
    }

    /**
     * @return \Managesend\HttpClient\Response
     * @throws \Managesend\Exceptions\ConfigurationException
     */
    public function getTimezones()
    {
        $url = $this->getRestUrl("/utility/timezones");
        return $this->get($url);
    }
}