<?php
/**
 * 工厂方法模式
 *
 * 对比简单工厂模式的优点，可以将其子类用不同的方法来创建一个对象
 *
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 8:17 PM
 */

namespace DesignPatterns\Creationl\FactoryMethod;

interface Logger
{
    public function log($meesage);
}