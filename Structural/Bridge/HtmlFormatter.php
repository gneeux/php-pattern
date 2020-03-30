<?php
/**
 *
 * HTML 格式类实现接口
 *
 * Created by PhpStorm.
 * User: Luo Xuefeng
 * Date: 2020/3/30
 * Time: 8:00 PM
 */

namespace DesignPatterns\Creationl\Structural\Bridge;


class HtmlFormatter implements FormatterInterface
{
    public function format($text)
    {
        // TODO: Implement format() method.
        return sprintf('<p>%s</p>', $text);
    }

}