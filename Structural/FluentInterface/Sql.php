<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/31
 * Time: 6:48 PM
 */

namespace DesignPatterns\Structural\FulentInterface;


class Sql
{
    /**
     * @var array
     */
    private $fields = [];

    private $from = [];

    private $where = [];

    public function select($fields)
    {
        $this->fields = $fields;
        return $this;
    }

    public function from($table, $alias)
    {
        $this->from[] = $table.' AS '.$alias;
        return $this;
    }

    public function where($condition)
    {
        $this->where[] = $condition;
        return $this;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return sprintf(
            'SELECT %s FROM %s WHERE %s',
            join(', ', $this->fields),
            join(',', $this->from),
            join(' AND', $this->where)

        );
    }


}