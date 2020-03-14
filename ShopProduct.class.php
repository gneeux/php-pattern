<?php

namespace Patteron;

/**
 * 商品类
 * Class ShopProduct
 */
class ShopProduct{

    // 定义类属性，也叫成员变量
    private $title = 'default product';
    private $producerMainName = 'main name';
    private $producerFirstName = 'first name';
    protected $price = 0;
    // 折扣
    private $discount = 0;

    public function __construct($title, $firstName, $mainName, $price) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }


    public function getProducerFirstName () {
        return $this->producerFirstName;
    }

    public function getProducerMainName () {
        return $this->producerMainName;
    }

    /**
     * 设置折扣
     * @param $num
     */
    public function setDiscount($num)
    {
        $this->discount = $num;
    }

    /**
     * 获取折扣
     * @param $num
     * @return int
     */
    public function getDiscount($num)
    {
        return $this->discount;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * 获取价格
     * @return int
     */
    public function getPrice()
    {
        return $this->price - $this->discount;
    }


    /**
     * 获取商品名称
     * @return string
     */
    public function getProducer() {
        return $this->producerFirstName.' '.$this->producerMainName;
    }

    /**
     * 获取汇总信息
     * @return string
     */
    public function getSummaryLine()
    {
        $base = $this->title."：{$this->producerMainName} {$this->producerFirstName}<br>";
        return $base;
    }

}
