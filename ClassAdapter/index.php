<?php

namespace Ba\DesignModel\ClassAdapter;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 适配器模式
 * 适配器模式还有一个名字叫包装器模式；
 * 其实很容易理解；
 * 因为现实中我们天天都在用；
 * 就比如说手机充电器；
 * 墙上的插孔装修完后就不在变了；
 * 手机买回来后我们也不会去改造它；
 * 如何让不变的插孔和不变的手机之间能连上充电；
 * 并且把220V转换为5V；
 * 这时候就需要电源适配器了；
 * 软件开发中也是同样的道理；
 * 在软件中适配器分为类适配器和对象适配器；
 * 我们先来讲类适配器；
 * 结构
 * Adaptee：原本已经有的具体类；
 * Target：目标接口；包含我们希望拥有的方法；
 * Adapter：适配器类；适配 Adaptee 和 Target；
 * 客户端
 *
 * Class Client
 *
 * @package Ba\DesignModel\ClassAdapter
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        // 原本的类的
        $adaptee = new Adaptee();
        $adaptee->pay();
        echo '<br>';

        // 适配器
        $adapter = new Adapter();
        $adapter->pay();
        echo '<br>';

        $adapter->notify();
    }
}

$client = new Client();
$client->run();