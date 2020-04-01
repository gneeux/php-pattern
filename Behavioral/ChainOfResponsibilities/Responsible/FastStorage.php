<?php
/**
 * http 缓存处理类
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/1
 * Time: 10:44 PM
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;


use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use DesignPatterns\Behavioral\ChainOfResponsibilities\RequestInterface;

class FastStorage extends Handler
{
    private $data;

    public function __construct($data, Handler $successor = null)
    {
        parent::__construct();
        $this->data = $data;
    }

    protected function processing(RequestInterface $request)
    {
        // TODO: Implement processing() method.
        $key = sprintf(
            '%s?$s',
            $request->getUri()->getPath(),
            $request->getUri()->getQuery()
        );

        if ($request->getMethod() == 'GET' && isset($this->data[$key])) {
            return $this->data[$key];
        }

        return null;
    }


}