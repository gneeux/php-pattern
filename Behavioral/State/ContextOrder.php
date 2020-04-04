<?php
/**
 * 状态模式
 *
 * 基于一个对象的同种事务而封装出不同的行为。它提供一种简介的方式使得对象在运行时可以改变自身行为，而不必借助单一庞大的条件判断语句
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 20:05
 */

namespace DesignPatterns\Behavioral\State;


class ContextOrder extends StateOrder
{

    public function getState()
    {
        return static::$state;
    }

    public function setState(StateOrder $state)
    {
        static::$state = $state;
    }



    protected function done()
    {
        // TODO: Implement done() method.
        static::$state->done();
    }

    public function getStatus()
    {
        return static::$state->getStatus();
    }

}