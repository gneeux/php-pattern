<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/2
 * Time: 8:42 PM
 */

namespace DesignPatterns\Behavioral\Memento;


class Ticket
{
    private $currentState;

    public function __construct()
    {
        $this->currentState = new State(State::STATE_CREATED);
    }

    public function open()
    {
        $this->currentState = new State(State::STATE_OPEND);
    }

    public function assign()
    {
        $this->currentState = new State(State::STATE_ASSSIGNED);
    }

    public function close()
    {
        $this->currentState = new State(State::STATE_CLOSED);
    }

    public function saveToMementto()
    {
        return new Memento(clone $this->currentState);
    }

    public function restoreFromMemento($memento)
    {
        $this->currentState = $memento->getState();
    }

    public function getState()
    {
        return $this->currentState;
    }




}