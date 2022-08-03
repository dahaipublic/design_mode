<?php

namespace Ba\DesignModel\AbstractFactory;

/**
 * 工厂接口
 *
 * Interface Factory
 * @package Ba\DesignModel\AbstractFactory
 */
interface Factory
{
    /**
     * 创建 User 产品
     *
     * @return mixed
     */
    public function createUser();

    /**
     * 创建 Article 产品
     *
     * @return mixed
     */
    public function createArticle();
}