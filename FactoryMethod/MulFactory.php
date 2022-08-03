<?php

namespace Ba\DesignModel\FactoryMethod;

/**
 * 乘法工厂
 *
 * Class MulFactory
 * @package Ba\DesignModel\FactoryMethod
 */
class MulFactory extends Factory
{
    /**
     * 创建乘法产品类
     *
     * @return Mul
     */
    public function create()
    {
        return new Mul();
    }
}