<?php

namespace Ba\DesignModel\SimpleFactory;

/**
 * 操作类型抽象类
 *
 * Class Operation
 * @package Ba\DesignModel\SimpleFactory
 */
abstract class Operation
{
    /**
     * 运算符号左边的值
     *
     * @var int
     */
    protected $numberA = 0;

    /**
     * 运算符号右边的值
     *
     * @var int
     */
    protected $numberB = 0;

    /**
     * 计算结果
     *
     * @return mixed
     */
    abstract public function getResult();

    /**
     * 给 numberA 赋值
     *
     * @param $number
     */
    public function setNumberA($number)
    {
        $this->numberA = $number;
    }

    /**
     * 给 numberB 赋值
     *
     * @param $number
     */
    public function setNumberB($number)
    {
        $this->numberB = $number;
    }

}