<?php
/**
 * 数据映射模式
 *
 * 数据映射器是一种数据访问层，它执行
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/30
 * Time: 8:33 PM
 */

namespace DesignPatterns\Structural\DataMappter;


class User
{

    private $username;

    private $email;

    public static function fromState($state)
    {
        return new self($state['username'], $state['email']);
    }

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

}