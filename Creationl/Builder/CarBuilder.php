<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 8:10 PM
 */

namespace DesignPatterns\Creationl\Builder;


use DesignPatterns\Creationl\Builder\Parts\Car;
use DesignPatterns\Creationl\Builder\Parts\Door;
use DesignPatterns\Creationl\Builder\Parts\Engine;
use DesignPatterns\Creationl\Builder\Parts\Wheel;

class CarBuilder implements BuilderInterface
{
    private $car;

    public function createVehicle()
    {
        // TODO: Implement createVehicle() method.
        $this->car = new Car();
    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.
        $this->car->setPart('engine', new Engine());
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.

        $this->car->setPart('rightDoor',new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());

    }

    public function getVehicle()
    {
        // TODO: Implement getVehicle() method.
        return $this->car;
    }


}