<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 20:46
 */

namespace DesignPatterns\Behavioral\Visitor;


class User implements Role
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return sprintf('User %s', $this->name);
    }

    public function accept(RoleVisitorInterface $visitor)
    {
        // TODO: Implement accept() method.
        $visitor->visitUser($this);
    }

}