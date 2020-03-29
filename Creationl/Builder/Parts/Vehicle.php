<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 7:51 PM
 */
namespace DesignPatterns\Creationl\Builder\Parts;

abstract class Vehicle
{
    private $data = [];

    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}