<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/30
 * Time: 7:36 PM
 */

namespace DesignPatterns\Structural\Adapter;


interface EBookInterface
{
    public function unlock();

    public function pressNext();

    /**
     * 返回当前页数和总页数 像 [1, 100] 是总页数100中的第10页
     * @return array
     */
    public function getPage(): array;
}