<?php

namespace Ba\DesignModel\AbstractFactoryWithReflection;

/**
 * User 产品接口
 *
 * Interface User
 * @package Ba\DesignModel\AbstractFactoryWithReflection
 */
interface User
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