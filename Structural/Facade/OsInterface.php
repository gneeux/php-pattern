<?php
/**
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/30
 * Time: 9:45 PM
 */

namespace DesignPatterns\Structural\Facade;


interface OsInterface
{
    /**
     * 关机方法
     * @return mixed
     */
    public function halt();


    public function getName();

}