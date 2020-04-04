<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 20:26
 */

namespace DesignPatterns\Behavioral\Strategy;


class IdComparator implements ComparatorInterface
{
    public function compare($a, $b)
    {
        // TODO: Implement compare() method.
        return $a['id'] <=> $b['id'];
    }

}