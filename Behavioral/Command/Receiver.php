<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/1
 * Time: 11:25 PM
 */

namespace DesignPatterns\Behavioral\Command;


class Receiver
{
    private $enableDate = false;

    private $output = [];

    public function write($str)
    {
        if ($this->enableDate) {
            $str .= ' ['.date('Y-m-d').']';
        }
        $this->output[] = $str;
    }

    public function getOutput()
    {
        return join('\n', $this->output);
    }

    public function enableDate()
    {
        $this->enableDate = true;
    }

    public function disableDate()
    {
        $this->enableDate = false;
    }

}