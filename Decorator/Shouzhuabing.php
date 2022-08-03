<?php

namespace Ba\DesignModel\Decorator;

/**
 * 手抓饼
 *
 * Class Shouzhuabing
 * @package Ba\DesignModel\Decorator
 */
class Shouzhuabing implements Food
{
    /**
     * 名称
     *
     * @return mixed|string
     */
    public function name()
    {
        return '手抓饼';
    }

    /**
     * 价格
     *
     * @return int|mixed
     */
    public function price()
    {
        return 5;
    }
}