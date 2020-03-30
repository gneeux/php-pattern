<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/30
 * Time: 8:17 PM
 */

namespace DesignPatterns\Structural\Composite;


class InputElement implements RenderableInterface
{
    public function render()
    {
        // TODO: Implement render() method.
        return '<input type="text" />';
    }

}