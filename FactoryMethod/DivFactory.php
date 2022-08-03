<?php

namespace Ba\DesignModel\FactoryMethod;

/**
 * 除法工厂
 *
 * Class DivFactory
 * @package Ba\DesignModel\FactoryMethod
 */
class DivFactory extends Factory
{
    /**
     * 创建除法产品类
     *
     * @return Div
     */
    public function create()
    {
        return new Div();
    }
}