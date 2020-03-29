<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 9:14 PM
 */

namespace DesignPatterns\Creationl\Prototype;


class BarBookPrototype extends BookPrototype
{
    protected $category = 'Bar';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

}
