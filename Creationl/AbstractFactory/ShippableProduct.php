<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 1:59 PM
 */

namespace DesignPatterns\Creationl\AbstractFactory;


class ShippableProduct implements Product
{
    private $productPrice;

    private $shippingCosts;


    public function __construct($productPrice, $shippingCosts)
    {
        $this->productPrice = $productPrice;
        $this->shippingCosts = $shippingCosts;
    }

    public function calculatePrice()
    {
        // TODO: Implement calculatePrice() method.
        return $this->productPrice + $this->shippingCosts;
    }

}