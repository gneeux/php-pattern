<?php
/**
 * 注册模式
 *
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/31
 * Time: 8:50 PM
 */

namespace DesignPatterns\Structural\Registry;


class Registry
{
    const LOGGER = 'Logger';

    private static $storeedValues = [];

    private static $allowedKeys = [self::LOGGER];

    public static function set($key, $value)
    {
        if (!in_array($key, self::$allowedKeys)) {
            throw new \InvalidArgumentException('Ivalid key given');
        }
        self::$storeedValues[$key] = $value;
    }

    public static function get($key)
    {
        if (!in_array($key, self::$allowedKeys) || !isset(self::$storeedValues[$key])) {
            throw new \InvalidArgumentException('Invalid key given');
        }

        return self::$storeedValues[$key];
    }

}