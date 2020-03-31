<?php
/**
 * 工厂类会管理分享享元类，客户端不应该直接将他们实例化
 * 但可以让工厂类负责返回现有的对象或者创建新的对象
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/31
 * Time: 8:25 PM
 */

namespace DesignPatterns\Structural\FlyweightInterface;


class FlyweighFactory implements \Countable
{

    /**
     * 定义享元特征数组
     * 用户存储不同的享元特征
     *
     * @var array
     */
    private $pool = [];

    public function get($name)
    {
        if (!isset($this->pool[$name])) {
            $this->pool[$name] = new CharaterFlyweight($name);
        }

        return $this->pool[$name];
    }

    public function count()
    {
        // TODO: Implement count() method.
        return count($this->pool);
    }

}