<?php
/**
 * 备忘录模式
 *
 * 它提供了在不破坏封装（对象不需要具有返回当前状态的函数）的情况下恢复到之前的状态（使用回滚）或者获取对象的内部状态
 *
 * 备忘录模式使用 3 个类来实现 Originator、Caretaker、Memento
 *
 * Memento：负责存储 Originator 的唯一内部状态，它包含 string，number，array 类的实例
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/2
 * Time: 8:32 PM
 */

namespace DesignPatterns\Behavioral\Memento;


class Memento
{
    private $state;

    public function __construct(State $stateToSave)
    {
        $this->state = $stateToSave;
    }

    public function getState()
    {
        return $this->state;
    }
}