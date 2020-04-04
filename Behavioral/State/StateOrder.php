<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 20:07
 */

namespace DesignPatterns\Behavioral\State;


abstract class StateOrder
{
    private $details;

    protected static $state;

    abstract protected function done();

    protected function setStatus($status)
    {
        $this->details['status'] = $status;
        $this->details['updatedTime'] = time();
    }

    protected function getStatus()
    {
        return $this->details['status'];
    }

}