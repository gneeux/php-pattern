<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 20:14
 */

namespace DesignPatterns\Behavioral\State;


class CreateOrder extends StateOrder
{
    public function __construct()
    {
        $this->setStatus('created');
    }

    protected function done()
    {
        static::$state = new ShippingOrder();
    }

}