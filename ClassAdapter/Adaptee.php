<?php

namespace Ba\DesignModel\ClassAdapter;

/**
 * 源类
 *
 * Class Target
 * @package Ba\DesignModel\ClassAdapter
 */
class Adaptee
{
    /**
     * 金额
     *
     * @var string
     */
    public $money = '￥34';

    /**
     * 支付
     */
    public function pay()
    {
        echo '支付' . $this->money;
    }
}