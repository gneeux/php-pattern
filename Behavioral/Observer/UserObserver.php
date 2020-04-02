<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/2
 * Time: 9:01 PM
 */

namespace DesignPatterns\Behavioral\Observer;


use SplSubject;

class UserObserver implements \SplObserver
{
    private $changedUsers = [];

    public function update(SplSubject $subject)
    {
        // TODO: Implement update() method.
        $this->changedUsers[] = clone $subject;
    }

    public function getChangedUsers()
    {
        return $this->changedUsers;
    }

}