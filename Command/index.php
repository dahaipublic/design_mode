<?php

namespace Ba\DesignModel\Command;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 命令模式
 *
 * 命令模式就和名字一样；
 * 比较适合执行命令的场景；
 * 命令发送者只管调用具体命令类中的 execute() 方法；
 * 然后在具体命令类中设定命令接收者；
 * 可以消除命令发送者和命令接受者之间的耦合；
 * 并且可以方便的扩展新命令；
 *
 * 结构
 * CommandInterface：命令抽象类；一般会暴露一个 execute 方法；
 * Command：具体的命令类；设定接收者；
 * Invoker：命令发送者；用于调用命令；
 * Receiver： 命令接收者；负责执行操作；
 *
 * 示例
 * CommandInterface.php
 * 客户端
 *
 * Class Client
 *
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
        $command  = new Command($receiver);

        // 命令接受者调用命令
        $invoker = new Invoker();
        $invoker->setCommand($command);
        $invoker->run();
    }
}

$client = new Client();
$client->run();