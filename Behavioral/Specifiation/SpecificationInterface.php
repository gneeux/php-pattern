<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 19:52
 */

namespace DesignPatterns\Behavioral\Specifiation;


interface SpecificationInterface
{
    public function isStaisfiedBy(Item $item);
}