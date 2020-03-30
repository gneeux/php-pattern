<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/30
 * Time: 9:11 PM
 */

namespace DesignPatterns\Structural\DataMappter;


class StorageAdapter
{
    private $data = [];

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function find($id)
    {
        if (isset($this->data[$id]))
        {
            return $this->data[$id];
        }
        return null;
    }


}