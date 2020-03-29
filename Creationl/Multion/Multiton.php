<?php
/**
 * 多例模式
 *
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 8:30 PM
 */

namespace DesignPatterns\Creationl\Multiton;

final class Multiton
{
    const INSTANCE_1 = '1';
    const INSTANCE_2 = '1';

    /**
     * 实例数组
     *
     * @var array
     */
    private static $instances = [];

    /**
     * 私有方法防止用户随意创建该对象实例
     *
     * Multiton constructor.
     */
    private function __construct()
    {
    }

    public static function getInstance($instanceName)
    {
        // 不存在则创建
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self();
        }

        // 存在就直接返回
        return self::$instances[$instanceName];

    }

    /**
     * 该对象阻止实例被克隆
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * 该私有方法阻止实例被序列化
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }


}
