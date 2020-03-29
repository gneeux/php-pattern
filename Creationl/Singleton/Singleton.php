<?php
/**
 * 单例模式
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 9:21 PM
 */
namespace DesignPatterns\Creationl\Singleton;

final class Singleton
{
    // 声明一个不可被继承的类

    private static $instance;

    /**
     * 通过懒加载获得实例(在第一次使用的时候创建)
     * @return mixed
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * 不允许从外部调用以防止创建多个实例
     *
     * Singleton constructor.
     */
    private function __construct()
    {

    }

    /**
     * 防止实例被克隆
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }


    /**
     *
     * 防止反序列化(这将创建它的副本)
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}
