<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/30
 * Time: 9:46 PM
 */

namespace DesignPatterns\Structural\Facade;


interface BiosInterface
{
    public function execute();

    public function waitForKeyPress();

    public function launch(OsInterface $os);

    public function powerDown();
}