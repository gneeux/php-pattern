<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 20:12
 */

namespace DesignPatterns\Behavioral\State;


class ShippingOrder extends StateOrder
{
    public function __construct()
    {
        $this->setStatus('shipping');
    }

    protected function done()
    {
        // TODO: Implement done() method.
        $this->setStatus('completed');
    }

}