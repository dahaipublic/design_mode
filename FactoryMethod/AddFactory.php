<?php

namespace Ba\DesignModel\FactoryMethod;

/**
 * 加法工厂
 *
 * Class AddFactory
 * @package Ba\DesignModel\FactoryMethod
 */
class AddFactory extends Factory
{
    /**
     * 创建加法产品类
     *
     * @return Add
     */
    public function create()
    {
        return new Add();
    }
}