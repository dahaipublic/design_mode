<?php

namespace Ba\DesignModel\Decorator;

/**
 * 肠
 *
 * Class Sausage
 * @package Ba\DesignModel\Decorator
 */
class Sausage extends Decorator
{
    /**
     * 名称
     *
     * @return mixed|string
     */
    public function name()
    {
        return $this->food->name() . '+肠';
    }

    /**
     * 价格
     *
     * @return int|mixed
     */
    public function price()
    {
        return $this->food->price() + 2;
    }
}