<?php

namespace Ba\DesignModel\FactoryMethod;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 工厂方法模式
 *
 * 应用场景
 * 要实例化的对象充满不确定性可能会改变的时候；
 * 要创建的对象的数目和类型是未知的；
 *
 * 结构
 * 1个 interface 或者 abstract 产品父类；
 * 多个实现 interface 或者继承 abstract 的具体产品类；
 *
 * 1个 interface 或者 abstract 工厂父类；
 * 多个实现 interface 或者继承 abstract 的具体工厂类；
 *
 * 具体工厂类和具体产品类一一对应；
 * 在具体工厂类中实例化具体的产品类
 *
 * 示例
 * 要是感觉看起来有点懵咱用代码说话；
 * 抽象类和加减乘数这四个产品类是不用变的；
 * Operation.php
 * 客户端
 *
 * Class Client
 *
 * @package Ba\DesignModel\FactoryMethod
 */
class Client
{
    /**
     * 不好的示例   直接 new 具体的产品
     */
    public function bad()
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
     * 好的示例  new 产品对应的工厂
     */
    public function good()
    {
        $factory   = new AddFactory();
        $operation = $factory->create();
        $operation->setNumberA(1);
        $operation->setNumberB(2);
        $result = $operation->getResult();
        echo $result;
    }
}


$client = new Client();
$client->bad();
echo '<br>';
$client->good();