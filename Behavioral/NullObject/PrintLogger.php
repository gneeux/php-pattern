<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/2
 * Time: 8:53 PM
 */

namespace DesignPatterns\Behavioral\NullObject;


class PrintLogger implements LoggerInterface
{
    public function log($str)
    {
        // TODO: Implement log() method.
        echo $str;
    }

}