<?php

namespace Ba\DesignModel\Facade;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 外观模式
 * 外观模式又叫门面模式；
 * 现在都是模块化开发了；
 * 开发中很多时候都是在使用各种扩展包；
 * 或者在外观模式中我们叫做子系统；
 * 外观模式的作用就是减少子系统之间的耦合；
 * 降低子系统的使用难度；
 * 我们举个栗子；
 * 实现一个加密文件内容的功能；
 * 这个功能分为两部分；
 *
 * 用于从文本文件中读取内容的 File 类
 * 用于加密内容的 Encrypt 类
 * 如果我们每次都直接调用这两个类；
 * 那耦合就有点高了；
 * 这时候我们就加一层外观 Facade ；
 * 在 Facade 中来完成文件读取和加密的过程；
 * 在客户端调用的都是 Facade ；
 *
 * 结构
 * SubSystem： 子系统 示例中指 File 和 Encrypt ；
 * Facade： 外观对象；
 *
 * 示例
 * 读取文件内容
 * File.php
 * 客户端
 *
 * Class Client
 *
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