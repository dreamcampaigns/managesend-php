<?php
/*
 * This file is part of the Managesend package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Managesend\DataClass\Template;

/**
 * Class TemplateDetails
 * @package Managesend\DataClass\Template
 */
class TemplateDetails extends Template
{
    /** @var array */
    protected $templateVariables;

    /**
     * @return array
     */
    public function getTemplateVariables()
    {
        return $this->templateVariables;
    }

    /**
     * @param string $templateVariable
     *
     * @return bool
     */
    public function hasTemplateVariable($templateVariable)
    {
        return \in_array($templateVariable,$this->templateVariables);
    }
}