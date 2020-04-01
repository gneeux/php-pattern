<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/1
 * Time: 11:33 PM
 */

namespace DesignPatterns\Behavioral\Iterator;


class BookList implements \Countable,\Iterator
{
    private $books = [];

    private $currentIndex = 0;

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookToRemove)
    {
        foreach ($this->books as $key => $book) {
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {
                unset($this->books[$key]);
            }
        }

        // 保留数组中所有键值，但不保留键名，键从0开始并以1递增
        $this->books = array_values($this->books);
    }

    public function count()
    {
        return count($this->books);
    }

    public function current()
    {
        // TODO: Implement current() method.
        return $this->books[$this->currentIndex];
    }

    public function key()
    {
        return $this->currentIndex;
    }

    public function next()
    {
        $this->currentIndex++;
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    public function valid()
    {
        return isset($this->books[$this->currentIndex]);
    }


}