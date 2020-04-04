<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 20:43
 */

namespace DesignPatterns\Behavioral\Visitor;


interface RoleVisitorInterface
{
    public function visitUser(User $role);

    public function visitGroup(Group $role);
}