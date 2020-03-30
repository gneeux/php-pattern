<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/30
 * Time: 9:10 PM
 */

namespace DesignPatterns\Structural\DataMappter;


use http\Exception\InvalidArgumentException;

class UserMapper
{
    private $adapter;

    public function __construct(StorageAdapter $storage)
    {
        $this->adapter = $storage;
    }


    /**
     * 根据 id 从存储器中找到用户，并返回一个用户对象
     * 在内存中，通常这种逻辑将使用 Repository 模式来实现
     * 然后，重要的部分是下面的 mapRowToUser() 中，它将从中创建一个业务对象
     * 从存储中获取的数据
     *
     * @param $id
     * @return User
     */
    public function findById($id)
    {
        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new InvalidArgumentException('User #'.$id.' not find');
        }
        return $this->mapRowToUser($result);
    }

    private function mapRowtoUser($row)
    {
        return User::fromState($row);
    }

}