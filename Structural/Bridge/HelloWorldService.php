<?php
/**
 * Service 子类
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/30
 * Time: 8:06 PM
 */

namespace DesignPatterns\Creationl\Structural\Bridge;


class HelloWorldService extends Service
{
    /**
     * 根据传入的格式类定义来输出值
     * @return mixed|void
     */
    public function get()
    {
        // TODO: Implement get() method.
        return $this->implementation->format('Hello World');
    }

}