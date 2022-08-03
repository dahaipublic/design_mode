<?php

namespace Ba\DesignModel\AbstractFactoryWithReflection;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 使用反射来优化抽象工厂模式
 * 简单工厂的核心是 switch 或者 if 判断；
 * 但是简单工厂配合抽象工厂的时候；
 * 工厂里面的每个用来实例化产品的方法都需要 switch ；
 * 这就显的重复了；
 * 这时候我们可以使用反射来优化；
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
 * 客户端
 *
 * Class Client
 *
 * @package Ba\DesignModel\AbstractFactoryWithReflection
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