<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 20:29
 */

namespace DesignPatterns\Behavioral\TemplateMethod;


abstract class Journey
{
    private $thingsToDo = [];

    final public function takeATrip()
    {
        $this->thingsToDo[] = $this->buyAFlight();
        $this->thingsToDo[] = $this->takePlane();
        $this->thingsToDo[] = $this->enjoyVacation();
        $buyGift = $this->buyGift();

        if ($buyGift !== null) {
            $this->thingsToDo[] = $buyGift;
        }

        $this->thingsToDo[] = $this->takePlane();
    }

    abstract protected function enjoyVacation();

    protected function buyGift()
    {
        return null;
    }

    private function buyAFlight()
    {
        return 'Buy a flight ticket';
    }

    private function takePlane()
    {
        return 'Taking the plane';
    }

    public function getThingsToDo()
    {
        return $this->thingsToDo;
    }


}