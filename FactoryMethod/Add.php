<?php

namespace Ba\DesignModel\FactoryMethod;

/**
 * 加法
 *
 * Class Add
 * @package Ba\DesignModel\FactoryMethod
 */
class Add extends Operation
{
    /**
     * 计算结果
     *
     * @return int
     */
    public function getResult()
    {
        return $this->numberA + $this->numberB;
    }
}