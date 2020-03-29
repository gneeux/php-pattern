<?php
/**
 * 静态工厂模式
 *
 * 与抽象模式类似，此模式用于创建一系列相关或者互相依赖的对象
 *
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 9:26 PM
 */
namespace DesignPatterns\Creationl\StaticFactory;

use http\Exception\InvalidArgumentException;


final class StaticFactory
{

    /*
     * 静态意味着全局的状态，因为它不能被模拟进行测试，所以它也是有弊端
     * 不能被分类或模拟或有多个不同的实例
     */



    public static function factory($type)
    {
        if ($type == 'number') {
            return new FormatNumber();
        }

        if ($type == 'string') {
            return new FormatString();
        }

        throw new InvalidArgumentException('Unknown formatgiven');

    }

}