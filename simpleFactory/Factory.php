<?php

namespace Ba\DesignModel\SimpleFactory;

/**
 * 工厂类
 *
 * Class Factory
 * @package Ba\DesignModel\SimpleFactory
 */
class Factory
{
    /**
     * 创建一种运算
     *
     * @param $operate
     * @return Add|Div|Mul|Sub
     */
    public function create($operate)
    {
        switch ($operate) {
            case '+':
                $result = new Add();
                break;
            case '-':
                $result = new Sub();
                break;
            case '*':
                $result = new Mul();
                break;
            case '/':
                $result = new Div();
                break;
            default:
                throw new \InvalidArgumentException('暂不支持的运算');
        }
        return $result;
    }
}