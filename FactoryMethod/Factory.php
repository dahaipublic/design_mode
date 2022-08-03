<?php

namespace Ba\DesignModel\FactoryMethod;

/**
 * 工厂抽象类
 *
 * Class Factory
 * @package Ba\DesignModel\FactoryMethod
 */
abstract class Factory
{
    /**
     * 创建产品
     *
     * @return mixed
     */
    abstract public function create();
}