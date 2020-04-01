<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/4/1
 * Time: 10:48 PM
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;


use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use DesignPatterns\Behavioral\ChainOfResponsibilities\RequestInterface;

class SlowDatabase extends Handler
{

    /**
     * @param RequestInterface $request
     * @return mixed|string
     */
    protected function processing(RequestInterface $request)
    {
        // TODO: Implement processing() method.
        // 模式输出，在生产代码找那个你应该调用一个缓慢的(相对内存来说)的数据库查询结果
        return 'Hello World';
    }

}