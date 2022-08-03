<?php

namespace Ba\DesignModel\SimpleFactory;

/**
 * 不好的示例
 *
 * Class Bad
 * @package Ba\DesignModel\SimpleFactory
 */
class Bad
{
    /**
     * 计算结果
     *
     * @param int $numberA
     * @param string $operate
     * @param int $numberB
     * @return int|float|int
     */
    public function getResult($numberA, $operate, $numberB)
    {
        switch ($operate) {
            case '+':
                $result = $numberA + $numberB;
                break;
            case '-':
                $result = $numberA - $numberB;
                break;
            case '*':
                $result = $numberA * $numberB;
                break;
            case '/':
                if ($numberB != 0) {
                    $result = $numberA / $numberB;
                } else {
                    throw new \InvalidArgumentException('除数不能为0');
                }
                break;
            default:
                throw new \InvalidArgumentException('暂不支持的运算');
        }
        return $result;
    }
}