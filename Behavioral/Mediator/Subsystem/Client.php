<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/2
 * Time: 8:21 PM
 */

namespace DesignPatterns\Behavioral\Mediator\Subsystem;


use DesignPatterns\Behavioral\Mediator\Colleague;

class Client extends Colleague
{
    public function request()
    {
        $this->mediator->makeRequest();
    }

    public function output($content)
    {
        echo $content;
    }
}