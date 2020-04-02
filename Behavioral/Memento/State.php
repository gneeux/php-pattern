<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/2
 * Time: 8:36 PM
 */

namespace DesignPatterns\Behavioral\Memento;


use http\Exception\InvalidArgumentException;

class State
{
    const STATE_CREATED = 'created';
    const STATE_OPEND = 'opened';
    const STATE_ASSSIGNED = 'assigned';
    const STATE_CLOSED = 'closed';

    private $state;

    private static $validStates = [
        self::STATE_CREATED,
        self::STATE_OPEND,
        self::STATE_ASSSIGNED,
        self::STATE_CLOSED
    ];

    public function __construct($state)
    {
        self::ensureIsValidState($state);
        $this->state = $state;
    }

    private static function ensureIsValidState($state)
    {
        if (!in_array($state, self::$validStates)) {
            throw new InvalidArgumentException('Invalid state give');
        }

    }

    /**
     * 当一个对象被当做字符串对待时，会触发这个魔术方法
     * @return mixed
     */
    public function __toString()
    {
        return $this->state;
        // TODO: Implement __toString() method.
    }

}