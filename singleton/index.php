<?php

namespace Ba\DesignModel\Singleton;

/**
 * 单例模式
 * 应用场景：
 * 数据库连接这种比较耗费资源的操作；
 * 我们希望整个应用只实例化一个；
 *
 * 结构：
 * 4私1公；
 * 私有化构造方法： 防止使用 new 创建多个实例；
 * 私有化克隆方法： 防止 clone 多个实例；
 * 私有化重建方法： 防止反序列化
 * 私有化静态属性： 防止直接访问存储实例的属性
 * 普通类
 *
 * Class Db1
 *
 * @package Ba\DesignModel\Singleton
 */
class Db1
{
    public static $instance = null;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function __construct()
    {
    }

    public function __clone()
    {
    }

    public function __wakeup()
    {
    }

}

$db1 = new Db1();
$db2 = new Db1();
$db3 = clone $db2;
$db4 = Db1::getInstance();
$db5 = unserialize(serialize($db4));


var_dump($db1);
echo '<hr>';
var_dump($db2);
echo '<hr>';
var_dump($db3);
echo '<hr>';
var_dump($db4);
echo '<hr>';
var_dump($db5);
echo '<hr>';


/**
 * 单例
 *
 * Class Db2
 *
 * @package Ba\DesignModel\Singleton
 */
class Db2
{
    private static $instance = null;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * 防止使用 new 创建多个实例
     *
     * Db2 constructor.
     */
    private function __construct()
    {
    }

    /**
     * 防止 clone 多个实例
     */
    private function __clone()
    {
    }

    /**
     * 防止反序列化
     */
    private function __wakeup()
    {
    }
}

$db6 = Db2::getInstance();
$db7 = Db2::getInstance();

var_dump($db6);
echo '<hr>';
var_dump($db7);
echo '<hr>';