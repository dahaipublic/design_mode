<?php

namespace Ba\DesignModel\AbstractFactoryWithSimpleFactory;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
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