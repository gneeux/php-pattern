<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/1
 * Time: 11:22 PM
 */

namespace DesignPatterns\Behavioral\Command;


class HelloCommand implements CommandInterface
{

    private $output;

    /**
     * 每个具体的命令都来自于不同的接收者
     * 这个可以是一个或者多个接受，但是参数里必须是可以被执行的命令
     *
     * HelloCommand constructor.
     * @param $console
     */
    public function __construct($console)
    {
        $this->output = $console;
    }


    public function execute()
    {
        // TODO: Implement execute() method.
        $this->output->write('Hello World');
    }

}