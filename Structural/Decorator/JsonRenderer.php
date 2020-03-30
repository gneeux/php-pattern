<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/30
 * Time: 9:28 PM
 */

namespace DesignPatterns\Structural\Decorator;


class JsonRenderer extends RendererDecorator
{
    public function renderData()
    {
        // TODO: Implement renderData() method.
        return json_encode($this->wrapped->renderData());
    }

}