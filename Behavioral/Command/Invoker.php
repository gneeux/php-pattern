<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/1
 * Time: 11:28 PM
 */

namespace DesignPatterns\Behavioral\Command;


class Invoker
{
    private $command;

    public function setCommand(CommandInterface $cmd)
    {
        $this->command = $cmd;
    }

    public function run()
    {
        $this->command->execute();
    }

}