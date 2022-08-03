<?php

namespace Ba\DesignModel\Prototype;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 原型模式
 * 原型模式主要用于创建重复的对象；
 * 目的是使用 clone 对象来减少 new 对象的开销；
 * 如果某个场景需要多次实例化一个类；
 * 那就可以尝试用原型模式优化；
 * 在 php 中使用原型模式是很简单的；
 * 毕竟 php 是世界上最好的语言；
 * 我们只需要 clone 就行了；
 * 但是 clone 有一些问题；
 * 我们下面在代码中讲；
 *
 * 结构
 * 抽象的 __clone() 方法；
 * 客户端
 *
 * Class Client
 *
 * @package Ba\DesignModel\Prototype
 */
class Client
{
    /**
     * 浅复制
     */
    public function shallowCopy()
    {
        $car       = new Car();
        $car->name = '特斯拉';

        $shallowDrive = new ShallowDrive();
        $shallowDrive->setCar($car);
        $shallowDrive->show();

        $cloneDrive = clone $shallowDrive;
        $cloneDrive->show();

        echo '<hr>';

        $car->name = '凯迪拉克';
        $shallowDrive->show();
        $cloneDrive->show();
    }

    /**
     *
     */
    public function deepCopy()
    {
        $car       = new Car();
        $car->name = '特斯拉';

        $deepDrive = new DeepDrive();
        $deepDrive->setCar($car);
        $deepDrive->show();

        $cloneDrive = clone $deepDrive;
        $cloneDrive->show();

        echo '<hr>';

        $car->name = '凯迪拉克';
        $deepDrive->show();
        $cloneDrive->show();
    }
}

$client = new Client();
$client->shallowCopy();
echo '<br>-----------------------------<br>';
$client->deepCopy();