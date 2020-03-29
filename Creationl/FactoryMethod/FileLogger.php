<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 8:20 PM
 */

namespace DesignPatterns\Creationl\FactoryMethod;


class FileLogger implements Logger
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function log($meesage)
    {
        // TODO: Implement log() method.
        file_put_contents($this->filePath, $meesage, PHP_EOL, FILE_APPEND);
    }

}