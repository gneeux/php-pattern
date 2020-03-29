<?php
/**
 *
 * 抽象工厂模式
 *
 * 不指定具体类的情况下创建一系列相关或依赖对象，通常创建的类都实现相同的接口，
 * 抽象工厂的客户并不关心这些对象是如何创建的，它只知道他们是如何一起运行的
 * User: xuefeng-luo
 * Date: 2020/3/29
 * Time: 1:05 PM
 */

namespace DesignPatterns\Creationl\AbstractFactory;

interface Product
{
    public function calculatePrice();
}