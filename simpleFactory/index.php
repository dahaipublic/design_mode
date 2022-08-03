<?php

namespace Ba\DesignModel\SimpleFactory;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 简单工厂模式
 * 最先准备用 IOS 和 Android 举例；
 * 但是后来考虑到工厂方法和抽象工厂模式；
 * 又用小米和华为重写了一遍；
 * 这样可以方便的扩充低配版的红米和荣耀；
 * 但还是觉得讲的不清楚；
 * 最后采用了程杰老师《大话设计模式》书中的加减乘除举例；
 * 把 C# 的代码转化并加上自己的理解写成 PHP 代码；
 * 在此感谢程杰老师；
 * 反复写了3种示例终于把这篇文章定稿了；
 *
 * 简单工厂并不属于23种设计模式；
 * 它的实现和它的名字气质很符；
 * 就是简单；
 * 但是它使用的比较多；
 * 当面对产品经理那句让人肝儿颤的"此处不要写死以后可能会改"的时候；
 * 以及"以后可能要增加**功能"的时候；
 * 那我们都可以先构思下是否适合简单工厂模式；
 * 先来说说应用场景；
 *
 * 应用场景
 * 在不确定有多少种操作的时候；
 * 比如说运算符号 + - * / ;
 *
 * 结构
 * 1个工厂；
 * 1个 interface 或者 abstract 产品父类；
 * 多个实现 interface 或者继承 abstract 的具体产品类；
 *
 * 示例
 * 写一个计算器；
 * 我们先用直观的但是并不优雅的方式来实现；
 * Bad.php
 * 客户端
 *
 * Class Client
 *
 * @package Ba\DesignModel\SimpleFactory
 */
class Client
{
    /**
     * 不好的示例
     */
    public function bad()
    {
        $program = new Bad();
        $result  = $program->getResult(1, '+', 2);
        echo $result;
    }

    /**
     * 不好的示例2
     *
     * @return int
     */
    public function bad2()
    {
        // 计算 1+2
        $operation = new Add();
        $operation->setNumberA(1);
        $operation->setNumberB(2);
        $result = $operation->getResult();
        echo $result;

        echo '<br>';

        // 计算 3+4
        $operation = new Add();
        $operation->setNumberA(3);
        $operation->setNumberB(4);
        $result = $operation->getResult();
        echo $result;
    }

    /**
     * 好的示例
     */
    public function good()
    {
        $factory   = new Factory();
        $operation = $factory->create('+');
        $operation->setNumberA(1);
        $operation->setNumberB(2);
        $result = $operation->getResult();
        echo $result;
    }
}


$client = new Client();
$client->bad();
echo '<br>';
$client->bad2();
echo '<br>';
$client->good();