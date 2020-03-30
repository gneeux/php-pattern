<?php
/**
 * 抽象和实现分离
 *
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/30
 * Time: 7:57 PM
 */

namespace DesignPatterns\Creationl\Structural\Bridge;


interface FormatterInterface
{
    public function format($text);
}