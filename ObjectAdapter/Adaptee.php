<?php

namespace Ba\DesignModel\ObjectAdapter;

/**
 * 源类
 *
 * Class Target
 * @package Ba\DesignModel\ObjectAdapter
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