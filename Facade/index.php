<?php

namespace Ba\DesignModel\Facade;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Ba\DesignModel\Facade
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $facade = new Facade();
        $facade->encryptContent();
    }
}

$client = new Client();
$client->run();