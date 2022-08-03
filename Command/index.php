<?php

namespace Ba\DesignModel\Command;

require __DIR__.'/../vendor/autoload.php';

/**
 * 客户端
 *
 * Class Client
 * @package Ba\DesignModel\Command
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        // 命令行类设定接受者
        $receiver = new Receiver();
        $command = new Command($receiver);

        // 命令接受者调用命令
        $invoker = new Invoker();
        $invoker->setCommand($command);
        $invoker->run();
    }
}

$client = new Client();
$client->run();