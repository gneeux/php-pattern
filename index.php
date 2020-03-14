<?php

    //将 autoload 函数注册到自动加载队列中。class.php';
    spl_autoload_register('autoload');

    function autoload ($className) {

        $clsInfo = explode("\\", $className);
        $len = count($clsInfo);
        $clsName = $clsInfo[$len - 1];
        $classfile = $clsName.'.class.php';
        include ($classfile);
    }



    $shop = new \Patteron\BookProduct('书籍', '深入PHP', '面向对象、模式与实践', 100, 500);
    print($shop->getSummaryLine());

