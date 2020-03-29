<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 8:25 PM
 */

namespace DesignPatterns\Creationl\FactoryMethod;


class FileLoggerFactory implements LoggerFactory
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger()
    {
        return new FileLogger($this->filePath);
        // TODO: Implement createLogger() method.
    }


}