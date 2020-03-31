<?php
/**
 *
 * 假如可以的话，实现享元接口并增加内存存储内部状态
 * 具体的享元实例被工厂类的方法共享
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/31
 * Time: 7:56 PM
 */

namespace DesignPatterns\Structural\FlyweightInterface;


class CharaterFlyweight implements FlyweightInterface
{

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function render($font)
    {
        // TODO: Implement render() method.
        return sprintf('Character %s with font %s', $this->name, $font);
    }

}