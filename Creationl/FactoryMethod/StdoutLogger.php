<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 8:20 PM
 */

namespace DesignPatterns\Creationl\FactoryMethod;


class StdoutLogger implements Logger
{
    public function log($meesage)
    {
        // TODO: Implement log() method.
        echo $meesage;
    }

}