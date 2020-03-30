<?php
/**
 * 创建 PlainTextFormatter 文本格式类实现  FormatterInterface 接口
 *
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/30
 * Time: 7:58 PM
 */

namespace DesignPatterns\Creationl\Structural\Bridge;


class PlainTextFormatter implements FormatterInterface
{
    public function format($text)
    {
        // TODO: Implement format() method.
        return $text;
    }

}