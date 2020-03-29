<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 2:03 PM
 */
namespace DesignPatterns\Creationl\AbstractFactory;

class ProductFactory
{
    const SHIPPING_CONSTS = 50;

    public function createShippableProduct(int $price)
    {
        return new ShippableProduct($price, self::SHIPPING_CONSTS);
    }

    public function createDigitalProduct(int $price)
    {
        return new DigtalProduct($price);
    }

}