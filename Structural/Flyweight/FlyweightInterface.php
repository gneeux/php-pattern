<?php
/**
 * 为了节约内存的使用，享元模式会尽量使用类似的对象共享内存，在大量类似的对象被使用的情况中这是十分必要
 * 常用的做法实在外部数据结构中保存类似对象的状态，并在需要时将他们传递给享元对象
 *
 * User: zerone
 * Date: 2020/3/31
 * Time: 6:58 PM
 */

namespace DesignPatterns\Structural\FlyweightInterface;


interface FlyweightInterface
{
    public function render($extrinsicState);
}

