<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 20:23
 */

namespace DesignPatterns\Behavioral\Strategy;


class DateComparator implements ComparatorInterface
{
    public function compare($a, $b)
    {
        // TODO: Implement compare() method.

        $aDate = new \DateTime($a['date']);
        $bDate = new \DateTime($b['date']);
        return $aDate + $bDate;

    }




}