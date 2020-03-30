<?php
/**
 * 组合模式
 * 该组合的节点必须派生于该组件契约，为了构建一个组件树
 * 强制性操作
 *
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/30
 * Time: 8:11 PM
 */

namespace DesignPatterns\Structural\Composite;


class Form implements RenderableInterface
{
    private $elements;

    /**
     * 遍历所有元素，并对他们调用 render() 方法，然后返回表单的完整的解析表达
     *
     * 从外部来看，我们不会看到遍历过程，该表单的操作过程与单一对象实例一样
     *
     */
    public function render()
    {
        // TODO: Implement render() method.
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }

    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }


}