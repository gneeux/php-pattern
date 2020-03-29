<?php
/**
 * 简单工厂模式
 *
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 9:17 PM
 */

namespace DesignPatterns\Creationl\SimpleFactory;

class SimpleFactory
{
    public function createBicycle()
    {
        return new Bicycle();
    }
}