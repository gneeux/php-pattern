<?php
/**
 *
 * 空对象模式
 *
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/2
 * Time: 8:51 PM
 */

namespace DesignPatterns\Behavioral\NullObject;


class Service
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        $this->logger->log('We are in '.__METHOD__);
    }

}