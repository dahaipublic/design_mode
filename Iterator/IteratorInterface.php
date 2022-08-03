<?php

namespace Ba\DesignModel\Iterator;

/**
 * 迭代器接口
 *
 * @package Ba\DesignModel\Iterator
 */
interface IteratorInterface
{
    /**
     * 判断是否还有下一个
     *
     * @return mixed
     */
    public function hasNext();

    /**
     * 获取下一个
     *
     * @return mixed
     */
    public function next();
}