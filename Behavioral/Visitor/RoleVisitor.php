<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 20:44
 */

namespace DesignPatterns\Behavioral\Visitor;


class RoleVisitor implements RoleVisitorInterface
{
    private $visited = [];

    public function visitUser(User $role)
    {
        // TODO: Implement visitUser() method.
        $this->visited[] = $role;
    }

    public function visitGroup(Group $role)
    {
        // TODO: Implement visitGroup() method.
        $this->visited[] = $role;
    }

    public function getVisited()
    {
        return $this->visited;
    }

}