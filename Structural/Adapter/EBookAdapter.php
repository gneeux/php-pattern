<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/30
 * Time: 7:35 PM
 */

namespace DesignPatterns\Structural\Adapter;


/*
 * 适配器实现了 BookInfterface
 *
 */
class EBookAdapter implements BookInterface
{
    protected $eBook;

    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    public function turnPage()
    {
        // TODO: Implement turnPage() method.
        $this->eBook->pressNext();
    }

    /**
     * 类是接口进行了适当的转换
     */
    public function open()
    {
        // TODO: Implement open() method.
        $this->eBook->unlock();
    }


    public function getPage()
    {
        // TODO: Implement getPage() method.
        return $this->eBook->getPage()[0];
    }

}