<?php
/**
 * 门面模式的最初目的并不是为了避免让你阅读复杂的 API 文档，这只是一个附带作用。本意是为了降低耦合性并遵循 Demeter 定律
 *
 * 一个门面旨在通过嵌入许多接口来分离客户端和子系统，也是为了降低复杂度
 *
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/30
 * Time: 9:41 PM
 */

namespace DesignPatterns\Structural\Facade;


class Facade
{
    /**
     * 定义操作系统接口变量
     * @var OsInterface
     */
    private $os;


    private $bios;

    public function __construct(BiosInterface $bios, OsInterface $os)
    {
        $this->bios = $bios;
        $this->os = $os;
    }


    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }

}