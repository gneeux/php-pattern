<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/30
 * Time: 8:22 PM
 */

namespace DesignPatterns\Structural\Composite;


class TextElement implements RenderableInterface
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function render()
    {
        // TODO: Implement render() method.
        return $this->text;
    }

}