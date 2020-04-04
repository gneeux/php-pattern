<?php
/**
 *
 * User: Zerone
 * Date: 2020-04-04
 * Time: 20:41
 */

namespace DesignPatterns\Behavioral\TemplateMethod;


class CityJourney extends Journey
{
    protected function enjoyVacation()
    {
        // TODO: Implement enjoyVacation() method.
        return 'Eat, drink, take photos and sleep';
    }

    protected function buyGift()
    {
        return 'Buy a gift';
    }

}