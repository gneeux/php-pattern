<?php
/**
 *  规则模式
 *
 * 构建一个清晰的业务规范，其中每条规则都能被针对性的检查，每个规范勒种都有一个 isSticfiedBy 的方法
 * 方法判断给的规则是否满足规范从而返回 true 或者 false
 *
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 19:48
 */

namespace DesignPatterns\Behavioral\Specifiation;


class Item
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

}