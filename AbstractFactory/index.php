<?php

namespace Ba\DesignModel\AbstractFactory;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 抽象工厂模式
 * 多个 interface 或者 abstract 产品父类；
 * 多个实现 interface 或者继承 abstract 的具体产品类；
 *
 * 1个 interface 或者 abstract 工厂父类；
 * 1个实现 interface 或者继承 abstract 的具体工厂类；
 * 结构
 * 多个 interface 或者 abstract 产品父类；
 * 多个实现 interface 或者继承 abstract 的具体产品类；
 *
 * 1个 interface 或者 abstract 工厂父类；
 * 1个实现 interface 或者继承 abstract 的具体工厂类；
 *
 * 具体的工厂类里面有多个方法分别实例化具体的产品类；
 *
 * 示例
 * 先创建产品和工厂 interface ；
 * User.php
 * 客户端
 *
 * Class Client
 *
 * @package Ba\DesignModel\AbstractFactory
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        // 使用 MySQL
        $factory = new MySQLFactory();
        // 创建 user
        $user = $factory->createUser();
        $user->insert();
        echo '<br>';
        $user->select();

        echo '<hr>';

        $factory = new MySQLFactory();
        // 创建 article
        $article = $factory->createArticle();
        $article->insert();
        echo '<br>';
        $article->select();

        echo '<br><br>';

        // 使用 SQLite
        $factory = new SQLiteFactory();
        // 创建 user
        $user = $factory->createUser();
        $user->insert();
        echo '<br>';
        $user->select();

        echo '<hr>';

        $factory = new SQLiteFactory();
        // 创建 article
        $article = $factory->createArticle();
        $article->insert();
        echo '<br>';
        $article->select();
    }
}

$client = new Client();
$client->run();