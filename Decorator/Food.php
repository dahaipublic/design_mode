<?php

namespace Ba\DesignModel\Decorator;

/**
 * 食物
 *
 * Interface Food
 * @package Ba\DesignModel\Decorator
 */
interface Food
{
    /**
     * 名称
     *
     * @return mixed
     */
    public function name();

    /**
     * 价格
     *
     * @return mixed
     */
    public function price();
}