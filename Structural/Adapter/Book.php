<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/30
 * Time: 7:33 PM
 */

namespace DesignPatterns\Structural\Adapter;


class Book implements BookInterface
{
    private $page;

    public function open()
    {
        $this->page = 1;
    }

    public function turnPage()
    {
        // TODO: Implement turnPage() method.
        $this->page++;
    }

    public function getPage()
    {
        // TODO: Implement getPage() method.
        return $this->page;
    }

}