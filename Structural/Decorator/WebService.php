<?php
/**
 * 创建 WebService 服务类实现 RenderableInterface
 * 该类将在后面为装饰者实现数据的接入
 *
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/30
 * Time: 9:20 PM
 */

namespace DesignPatterns\Structural\Decorator;


class WebService implements RenderableInterface
{

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }


    public function renderData()
    {
        // TODO: Implement renderData() method.
        return $this->data;
    }

}