<?php
/**
 * @package      Prism
 * @subpackage   Money
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2017 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      GNU General Public License version 3 or later; see LICENSE.txt
 */

namespace Prism\Money;

/**
 * Parse amounts.
 */
interface Parser
{
    /**
     * Parse an amount from decimal string.
     *
     * @param string $amount
     *
     * @return string
     */
    public function parse($amount);
}
