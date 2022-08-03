<?php

namespace Ba\DesignModel\AbstractFactory;

/**
 * Article 产品接口
 *
 * Interface Article
 * @package Ba\DesignModel\AbstractFactory
 */
interface Article
{
    /**
     * 新增
     *
     * @return mixed
     */
    public function insert();

    /**
     * 查询
     *
     * @return mixed
     */
    public function select();
}