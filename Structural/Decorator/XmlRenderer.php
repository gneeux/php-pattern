<?php
/**
 * Created by PhpStorm.
 * User: zerone
 * Date: 2020/3/30
 * Time: 9:26 PM
 */

namespace DesignPatterns\Structural\Decorator;


class XmlRenderer extends RendererDecorator
{
    public function renderData()
    {
        // TODO: Implement renderData() method.
        $doc = new \DOMDocument();
        $data = $this->wrapped->renderData();

        $doc->appendChild($doc->createElement('content', $data));
        return $doc->saveXML();
    }

}