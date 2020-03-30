<?php
/**
 * 适配器模式
 *
 * 将一个类的接口转换成可应用的兼容接口，适配器使原本由于接口不兼容而不能一起工作的那些类可以一起工作
 *
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/30
 * Time: 7:27 PM
 */

namespace DesignPatterns\Structural\Adapter;


interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage();
}