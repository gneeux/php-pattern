<?php
/**
 * 对象池模式
 *
 * 提前准备了一组初始化了的对象池，而不是按需创建或者销毁的创建型设计模式。
 * 对象池的客户端会向对象池中请求一个对象，然后使用这个返回对象相关的操作。当客户端使用完毕
 *
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 8:37 PM
 */

namespace DesignPatterns\Creationl\Pool;


class WorkerPool implements \Countable
{

    private $occupiedWorkers=[];

    private $freeWorks = [];

    public function get()
    {
        if (count($this->freeWorks) == 0) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorks);
        }
        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;
        return $worker;
    }

    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);
        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorks[$key] = $worker;
        }
    }

    public function count()
    {
        return count($this->occupiedWorkers) + count($this->freeWorks);
    }
}