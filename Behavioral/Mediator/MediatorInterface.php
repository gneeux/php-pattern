<?php
/**
 *
 * 中介者模式
 *
 * 提供一种轻松的多组件之间弱耦合的协同方式。如果你有个 "情报中心"，观察者模式也是个好选择，类似于控制器
 *
 * 所有关联协同的组件（Colleague）仅与 MediatorIninterface 接口建立耦合，面向对象过程这是好事，一个良友胜于有多个朋友，
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/2
 * Time: 7:00 PM
 */

namespace DesignPatterns\Behavioral\Mediator;


interface MediatorInterface
{
    /**
     * 发出响应
     *
     * @param $content
     * @return mixed
     */
    public function sendResponse($content);

    public function makeRequest();

    public function queryDb();


}