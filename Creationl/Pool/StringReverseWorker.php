<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 9:01 PM
 */

namespace DesignPatterns\Creationl\Pool;


class StringReverseWorker
{
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function run($text)
    {
        return strrev($text);
    }
}