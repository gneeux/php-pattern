<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 2:01 PM
 */

namespace DesignPatterns\Creationl\AbstractFactory;


class DigtalProduct implements Product
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function calculatePrice()
    {
        return $this->price;
        // TODO: Implement calculatePrice() method.
    }

}