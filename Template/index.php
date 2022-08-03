<?php

namespace Ba\DesignModel\Template;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 模板方法模式
 * 组合型的设计模式本质是使用组合替代继承；
 * 但是继承并非一无是处；
 * 只是因为大家容易滥用继承造成强耦合；
 * 作为面向对象编程的三大特性之一；
 * 继承还是很有价值的；
 * 比如说本篇文章要讲的模板方法模式；
 * 就是依赖于继承来实现；
 *
 * 结构
 * 抽象类： 定义操作中骨架；比如说执行顺序等；讲具体的执行内容延迟到子类；
 * 子类： 定义具体的执行内容；
 *
 * 示例
 * Phone.php
 * 客户端
 *
 * Class Client
 *
 * @package Ba\DesignModel\Template
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $xiaomi = new Xiaomi();
        $xiaomi->action();

        echo '<hr>';

        $huawei = new Huawei();
        $huawei->action();
    }
}

$client = new Client();
$client->run();