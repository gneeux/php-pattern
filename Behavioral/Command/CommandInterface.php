<?php
/**
 * 命令行模式
 *
 * 为了封装调用和解耦
 *
 * 我们有一个调用程序和接收器。这种模式使用「命令行」将方法调用委托给接收器并且呈现相同的「执行」方法
 * 因此，调用程序只知道调用「执行」去处理客户端的命令，接收器会从调用程序中分离出来
 *
 * 这个模式的另一面是取消方法的 execute() 也就是 undo() 。命令行也可以通过最小量的复制粘贴和依赖组合(不是继承)被聚合，从而组合成更复杂的命令集
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/1
 * Time: 10:55 PM
 */

namespace DesignPatterns\Behavioral\Command;


interface CommandInterface
{


    /**
     * 命令模式很重要的方法
     * 接收者会被载入构造器
     * @return mixed
     */
    public function execute();


}