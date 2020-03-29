<?php
/**
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/29
 * Time: 8:00 PM
 */

namespace DesignPatterns\Creationl\Builder;


use DesignPatterns\Creationl\Builder\Parts\Door;
use DesignPatterns\Creationl\Builder\Parts\Engine;
use DesignPatterns\Creationl\Builder\Parts\Truck;
use DesignPatterns\Creationl\Builder\Parts\Vehicle;
use DesignPatterns\Creationl\Builder\Parts\Wheel;

class TruckBuilder implements BuilderInterface
{

    private $truck;

    public function createVehicle()
    {
        // TODO: Implement createVehicle() method.
        $this->truck = new Truck();
    }

    public function addWheel()
    {
        // TODO: Implement addWheel() method.

        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());

    }

    public function addEngine()
    {
        // TODO: Implement addEngine() method.

        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addDoors()
    {
        // TODO: Implement addDoors() method.

        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    public function getVehicle()
    {
        // TODO: Implement getVehicle() method.
        return $this->truck;
    }

}