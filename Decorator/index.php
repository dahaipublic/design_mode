<?php

namespace Ba\DesignModel\Decorator;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 客户端
 *
 * 装饰模式是为已有的类动态添加更多功能而且不改动原来的类；
 * 主要是使用对象的关联关系替代继承；
 * 就如现实生活中的装饰或者配料一样；
 * 我们用吃喝举例；
 * 有普通的原味奶茶、手抓饼、烤冷面；
 * 还 vip 级的加布丁、加肠、加蛋；
 * 使用继承可以很简单的实现；
 *
 *
 * 但是经过前面几篇文章的洗礼；
 * 我们应该已经有组合优于继承的意识了；
 * 把配料独立出来；
 *
 *
 * 结构
 * Component：原本的对象和装饰共同的接口
 * ConcreteComponent： 原本的对象 示例中指 手抓饼和烤冷面
 * Decorator： 实现接口的装饰抽象类
 * ConcreteDecorator：具体的装饰 示例中指 肠、蛋、辣条
 *
 * 示例
 * 先定义共同的接口
 * Food.php
 *
 * Class Client
 *
 * @package Ba\DesignModel\Decorator
 */
class Client
{
    /**
     *
     */
    public function run()
    {
        // 手抓饼
        $shouzhuabing = new Shouzhuabing();
        echo $shouzhuabing->name();
        echo $shouzhuabing->price() . '元';
        echo '<hr>';

        // 烤冷面
        $kaolengmian = new Kaolengmian();
        echo $kaolengmian->name();
        echo $kaolengmian->price() . '元';
        echo '<hr>';

        // 手抓饼+蛋
        $egg = new Egg($shouzhuabing);
        echo $egg->name();
        echo $egg->price() . '元';
        echo '<hr>';

        // 手抓饼+肠
        $sausage = new Sausage($kaolengmian);
        echo $sausage->name();
        echo $sausage->price() . '元';
        echo '<hr>';

        // 烤冷面+辣条
        $latiao = new Latiao($shouzhuabing);
        echo $latiao->name();
        echo $latiao->price() . '元';
        echo '<hr>';
    }
}

$client = new Client();
$client->run();
