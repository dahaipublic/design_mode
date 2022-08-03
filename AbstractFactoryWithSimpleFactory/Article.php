<?php

namespace Ba\DesignModel\AbstractFactoryWithSimpleFactory;

/**
 * Article 产品接口
 *
 * Interface Article
 * @package Ba\DesignModel\AbstractFactoryWithSimpleFactory
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