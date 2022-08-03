<?php

namespace Ba\DesignModel\Decorator;

/**
 * 烤冷面
 *
 * Class Kaolengmian
 * @package Ba\DesignModel\Decorator
 */
class Kaolengmian implements Food
{
    /**
     * 名称
     *
     * @return mixed|string
     */
    public function name()
    {
        return '烤冷面';
    }

    /**
     * 价格
     *
     * @return int|mixed
     */
    public function price()
    {
        return 6;
    }
}