<?php
/**
 * 用松散耦合的方式来更好的实现可测试，可维护和可扩展的代码
 *
 * 依赖注入：依赖注入是控制反转的一种实现方式，要实现控制反转，常用解决方案是将创建被调用者实例的工作交由 Ioc 容器来完成，
 * 然后再调用者中注入被调用者（通过构建者 / 方法注入实现），实现调用者与被调用者的解耦，该过程被称为依赖注入
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/30
 * Time: 9:30 PM
 */

namespace DesignPatterns\Structural\DependencyInjection;


class DatabaseConfiguration
{
    private $host;

    private $port;

    private $username;

    private $password;

    public function __construct($host, $port, $username, $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }


}