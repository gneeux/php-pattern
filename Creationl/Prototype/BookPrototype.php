<?php
/**
 *
 */

namespace DesignPatterns\Creationl\Prototype;

abstract class BookPrototype
{
    protected $title;

    protected $category;

    abstract function __clone();

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
}