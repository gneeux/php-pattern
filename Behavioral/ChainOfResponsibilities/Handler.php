<?php
/**
 * 责任链模式
 *
 * 建立一个对象链来按指定顺序处理调用。如果其中一个对象无法处理命令，它会委托这个调用给它的下一个对象来进行处理，以此类推
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/1
 * Time: 10:33 PM
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;


abstract class Handler
{

    /**
     * 定义继承处理器
     *
     * @var null
     */
    private $successor = null;

    /**
     * 输入集成处理器对象
     *
     * Handler constructor.
     * @param null $handler
     */
    public function __construct($handler = null)
    {
        $this->successor = $handler;
    }


    /**
     * 通过使用模板方法模式这种方法可以确保每个子类不会忽略调用继承
     *
     * @param RequestInterface $request
     * @return mixed
     */
    final public function handle(RequestInterface $request)
    {
        $processed = $this->processing($request);
        if ($processed === null) {
            if ($this->successor !== null) {
                $processed = $this->successor->handle($request);
            }
        }
        return $processed;
    }

    /**
     * 声明处理方法
     *
     * @param RequestInterface $request
     * @return mixed
     */
    abstract protected function processing(RequestInterface $request);


}