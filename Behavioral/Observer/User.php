<?php
/**
 *
 * 观察者模式
 *
 * 当对象的状态发生变化时，所有依赖于它的对象都得通知并自动更新，它使用的是低耦合
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/2
 * Time: 8:55 PM
 */

namespace DesignPatterns\Behavioral\Observer;


use SplObserver;

class User implements \SplSubject
{
    /**
     * User 实现观察者模式（成为主体），它维护一个观察者列表
     * 当对象发生变化时通知
     */

    private $email;

    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        // TODO: Implement attach() method.
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        // TODO: Implement detach() method.
        $this->observers->detach($observer);
    }

    public function changeEmail($email)
    {
        // TODO: Implement notify() method.
        $this->email = $email;
        $this->notify();
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }


}