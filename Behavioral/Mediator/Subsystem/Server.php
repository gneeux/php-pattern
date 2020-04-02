<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/2
 * Time: 8:22 PM
 */

namespace DesignPatterns\Behavioral\Mediator\Subsystem;


use DesignPatterns\Behavioral\Mediator\Colleague;

class Server extends Colleague
{
    public function process()
    {
        $data = $this->mediator->queryDb();
        $this->mediator->sendRequest(sprintf("Hello %s", $data));
    }
}