<?php

namespace Ba\DesignModel\Decorator;

/**
 * 蛋
 *
 * Class Egg
 * @package Ba\DesignModel\Decorator
 */
class Egg extends Decorator
{
    /**
     * 名称
     *
     * @return mixed|string
     */
    public function name()
    {
        return $this->food->name() . '+蛋';
    }

    /**
     * 价格
     *
     * @return int|mixed
     */
    public function price()
    {
        return $this->food->price() + 1;
    }
}