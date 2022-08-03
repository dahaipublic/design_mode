<?php

namespace Ba\DesignModel\Iterator;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 迭代器模式
 * 迭代器模式允许用户通过特定的顺序访问容器中的数据；
 * 它将数据和顺序的实现分离；
 * 迭代器模式属于设计模式中的没落贵族；
 * 单独实现迭代器的场景很少了；
 * 比如 php 官方都提供了迭代器；
 * 这篇文章是为了设计模式而写设计模式；
 *
 * 结构
 * Container： 容器接口 定义获取迭代器的方法 示例中指 ContainerInterface；
 * ConcreteContainer： 实现 Container 接口的具体容器类 示例中指 NameContainer ;
 * Iterator： 迭代器接口 这里定义了 hasNext 和 next 方法 示例中指 IteratorInterface；
 * ConcreteIterator： 实现 Iterator 接口的具体迭代器类 示例中指 NameIterator；
 *
 * 示例
 * ContainerInterface.php
 * 客户端
 *
 * Class Client
 *
 * @package Ba\DesignModel\Iterator
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $nameContainer = new NameContainer();
        $nameContainer->add('张三');
        $nameContainer->add('李四');
        $nameContainer->add('王麻子');

        $nameIterator = $nameContainer->getIterator();

        while ($nameIterator->hasNext()) {
            echo $nameIterator->next();
        }
    }
}

$client = new Client();
$client->run();