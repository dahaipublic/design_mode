<?php

namespace Ba\DesignModel\AbstractFactoryWithSimpleFactory;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 使用简单工厂来优化抽象工厂模式
 * 抽象工厂模式中每增加一类产品都要改动全部的工厂；
 * 这个工厂就是我们痛苦的源泉了；
 * 这时候可以使用简单工厂来优化抽象工厂；
 *
 * 结构
 * 多个 interface 或者 abstract 产品父类；
 * 多个实现 interface 或者继承 abstract 的具体产品类；
 *
 * 1个工厂；
 * 工厂类里面有多个方法分别实例化不同的具体产品类；
 *
 * 示例
 * 产品部分跟抽象工厂是一样的；
 *
 * 先创建 User 和 Article 产品 interface ；
 * User.php
 *
 * 客户端
 *
 * Class Client
 *
 * @package Ba\DesignModel\AbstractFactoryWithSimpleFactory
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $factory = new Factory();

        // 创建 user
        $user = $factory->createUser();
        $user->insert();
        echo '<br>';
        $user->select();

        echo '<hr>';

        // 创建 article
        $article = $factory->createArticle();
        $article->insert();
        echo '<br>';
        $article->select();
    }
}

$client = new Client();
$client->run();