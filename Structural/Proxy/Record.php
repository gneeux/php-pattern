<?php
/**
 * 代理模式为其他对象提供一种代理已控制对这个对象的访问。使用代理模式创建代理对象，让代理对象控制目标访问对象
 * 目标对象可以是远程的对象，创建开销大的对象或需要安全控制的对象，并且可以再不改变目标对象的情况下额外添加一些功能
 *
 * 在某些情况下，一个客户不想或者不能直接引用另一个独享，而代理对象可以在客户端和目标对象起到中介的作用，
 * 并且可以通过代理对象去掉客户不能看到的内容和服务或者添加客户需要的额外服务
 *
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/31
 * Time: 8:36 PM
 */

namespace DesignPatterns\Structural\Proxy;


class Record
{
    private $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        if (!isset($this->data[$name])) {
            throw new \OutOfRangeException('Invalid name given');
        }

        return $this->data[$name];

    }

}