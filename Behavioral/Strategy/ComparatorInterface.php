<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 20:20
 */

namespace DesignPatterns\Behavioral\Strategy;


interface ComparatorInterface
{
    public function compare($a, $b);
}