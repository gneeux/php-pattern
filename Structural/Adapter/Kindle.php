<?php
/**
 *
 *
 *
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/30
 * Time: 7:43 PM
 */

namespace DesignPatterns\Structural\Adapter;


class Kindle implements EBookInterface
{
    private $page = 1;

    private $totalPage = 100;

    public function unlock()
    {
        // TODO: Implement unlock() method.

    }

    public function pressNext()
    {
        // TODO: Implement pressNext() method.
        $this->page++;
    }

    public function getPage(): array
    {
        // TODO: Implement getPage() method.
        return [$this->page, $this->totalPage];
    }


}