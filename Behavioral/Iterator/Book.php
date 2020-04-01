<?php
/**
 * 迭代器模式
 *
 * 让对象变得可迭代并表现得像对象集合
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/1
 * Time: 11:30 PM
 */

namespace DesignPatterns\Behavioral\Iterator;


class Book
{
    private $author;

    private $title;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthorAndTitle()
    {
        return $this->getTitle().' by '.$this->getAuthor();
    }



}