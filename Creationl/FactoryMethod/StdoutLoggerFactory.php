<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 8:24 PM
 */

namespace DesignPatterns\Creationl\FactoryMethod;


class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger()
    {
        return new StdoutLogger();
    }
}