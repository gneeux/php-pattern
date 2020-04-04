<?php
/**
 *
 * 策略模式
 *
 *
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 20:18
 */

namespace DesignPatterns\Behavioral\Strategy;


class Context
{
    private $comparator;

    public function __construct(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    public function executeStrategy($elements)
    {
        uasort($elements, [$this->comparator, 'compare']);

        return $elements;
    }
}