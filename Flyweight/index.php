<?php

namespace Ba\DesignModel\Flyweight;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 享元模式
 * 享元模式的目的是为了减少实例化大量的类时对内存的占用；
 * 减少是不可能平白无故就减少了的；
 * 主要是通过复用重复的类来实现；
 * 用现在比较热的词叫共享；
 * 就比如说现实生活中；
 * 我们有 99 件尺寸为 L 和 1 件 XXL 的不同款式的男装需要请多少个模特？
 * 回答 100 的同学肯定是家里有矿了；
 * 省钱的方案是只请2个模特就够了；
 * 其中 99 件 L 的需要一个 170cm 的模特；
 * 剩下的 1 件 XXL 的需要 180cm 的模特；
 * 咱们用代码来演示下；
 *
 * 结构
 * Flyweight： 享元抽象类
 * ConcreteFlyweight：实现 Flyweight 接口的可以共享的具体享元类
 * UnsharedConcreteFlyweight： 非共享具体享元类
 * FlyweightFactory： 用于创建和管理具体的享元对象的工厂；
 *
 * 示例
 * Flyweight.php
 * 客户端
 *
 * Class Client
 *
 * @package Ba\DesignModel\Flyweight
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $flyweight = new FlyweightFactory();
        $zhangsan1 = $flyweight->getFlyweight('170cm的模特');
        $zhangsan1->show('第1件L号的衣服');

        $zhangsan2 = $flyweight->getFlyweight('170cm的模特');
        $zhangsan2->show('第99件L号的衣服');

        var_dump($zhangsan1 === $zhangsan2);
        echo '<hr>';

        $lisi = $flyweight->getFlyweight('180cm的模特');
        $lisi->show('第1件XXL号的衣服');

        $wangmazi = new UnsharedConcreteFlyweight('190cm的模特');
        $wangmazi->show('第1件XXXL号的衣服');
        $wangmazi->delete();
        $wangmazi->show('第1件XXXL号的衣服');
    }
}

$client = new Client();
$client->run();