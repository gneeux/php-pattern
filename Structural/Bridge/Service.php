<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/30
 * Time: 8:02 PM
 */

namespace DesignPatterns\Creationl\Structural\Bridge;


abstract class Service
{
    /**
     * 实现属性
     *
     * @var FormatterInterface
     */
    protected $implementation;


    /**
     * 传入 FormatterInterface 实现类对象
     *
     * Service constructor.
     * @param FormatterInterface $printer
     */
    public function __construct(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    /**
     * 和构造方法作用相同
     *
     * @param FormatterInterface $printer
     */
    public function setTmplementation(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    /**
     * 创建抽象方法
     * @return mixed
     */
    abstract public function get();


}
