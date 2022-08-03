<?php

namespace Ba\DesignModel\SimpleFactory;

/**
 * 乘法
 *
 * Class Mul
 * @package Ba\DesignModel\SimpleFactory
 */
class Mul extends Operation
{
    /**
     * 计算结果
     *
     * @return float|int
     */
    public function getResult()
    {
        return $this->numberA * $this->numberB;
    }
}