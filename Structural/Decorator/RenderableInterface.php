<?php
/**
 *  为类实例动态增加新的方法
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/30
 * Time: 9:19 PM
 */

namespace DesignPatterns\Structural\Decorator;


interface RenderableInterface
{

    /*
     * 创建渲染接口
     * 这里的装饰方法 renderData() 返回的是字符串格式数据
     */

    public function renderData();
}