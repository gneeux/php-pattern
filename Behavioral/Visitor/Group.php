<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 20:51
 */

namespace DesignPatterns\Behavioral\Visitor;


class Group implements Role
{
    private $name;

    public function __construct($name)
    {
        $this->name;
    }

    public function getName()
    {
        return sprintf('Group: %s', $this->name);
    }

    public function accept(RoleVisitorInterface $visitor)
    {
        // TODO: Implement accept() method.
        $visitor->visitGroup($this);
    }

}