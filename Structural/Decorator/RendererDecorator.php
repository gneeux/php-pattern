<?php
/**
 * 装饰者必须实现渲染接口类 RenderableInterface，这是该设计模式的关键点，否者这将不是一个装饰者而只是一个自欺欺人的包装
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/30
 * Time: 9:23 PM
 */

namespace DesignPatterns\Structural\Decorator;


abstract class RendererDecorator implements RenderableInterface
{
    protected $wrapped;

    public function __construct(RenderableInterface $renderer)
    {
        $this->wrapped = $renderer;
    }

}