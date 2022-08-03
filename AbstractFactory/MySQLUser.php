<?php

namespace Ba\DesignModel\AbstractFactory;

/**
 * 应用于 MySQL 的 User
 *
 * Class MySQLUser
 * @package Ba\DesignModel\AbstractFactory
 */
class MySQLUser implements User
{
    /**
     * 新增
     */
    public function insert()
    {
        echo '向 MySQL 数据库中插入 User';
    }

    /**
     * 查询
     */
    public function select()
    {
        echo '从 MySQL 数据库中查询 User';
    }
}