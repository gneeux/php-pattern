<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 20:46
 */

namespace DesignPatterns\Behavioral\Visitor;


interface Role
{
    public function accept(RoleVisitorInterface $visitor);
}