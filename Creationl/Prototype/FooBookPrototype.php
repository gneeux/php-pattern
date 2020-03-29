<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 9:15 PM
 */

namespace DesignPatterns\Creationl\Prototype;


class FooBookPrototype extends BookPrototype
{
    protected $category = 'Foo';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}