<?php

/**
 * 单例
 *
 * Class Db2
 * @package Dahai\DesignModel\Singleton
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

    public function test(): string
    {
        return "this is single case model";
    }
}

$db6 = Db2::getInstance();
$db7 = Db2::getInstance();

// 两次调用返回同一个实例
var_dump($db6);
echo '<hr>';
var_dump($db7);
echo '<hr>';
echo $db6->test();