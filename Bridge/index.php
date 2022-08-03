<?php

namespace Ba\DesignModel\Bridge;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 客户端
 * 桥接模式有一个常见的示例；
 * 有正方形、三角形、圆形等形状；
 * 还有红、黄、绿颜色；
 * 要实现形状和颜色的组合；
 * how to do it?
 * 我这里画了张有点丑但很直观的图；
 *
 *
 * 最简单的方式就是通过继承；
 * 建12个类就行了；
 * 但是如果按照此图的形式来组织代码；
 * 当需要增加形状或者颜色的时候；
 * 比如说增加一个梯形；
 * 这时候就需要再增加3个颜色的梯形类；
 * 再如果增加一个蓝色；
 * 那每个形状都要再增加一个类；
 * 想想都蛮心累的；
 *
 * 这时候就需要转变下方式了；
 * 我这里又画了张有点丑但很直观的图；
 *
 *
 * 把形状和颜色类单独创建；
 * 然后通过组合的方式来实现各种形状和颜色搭配的图案；
 *
 * 桥接模式就是把抽象部份与实现部分分离；
 * 使它们都可以有独立的变化组合；
 *
 * 结构
 * Abstraction：抽象类 在本示例中指 形状；
 * RefinedAbstraction：扩充抽象类 在本示例中指 正方形、三角形、圆形；
 * Implementor：实现类 在本示例中指 颜色；
 * ConcreteImplementor：具体实现类 在本示例中指红、黄、绿；
 *
 * 示例
 * Color.php 颜色抽象类
 *
 * Class Client
 *
 * @package Ba\DesignModel\Bridge
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $red    = new Red();
        $yellow = new Yellow();
        $green  = new Green();

        // 红色的正方形
        $redSquare = new Square($red);
        $redSquare->draw();
        echo '<hr>';

        // 黄色的正方形
        $yellowSquare = new Square($yellow);
        $yellowSquare->draw();
        echo '<hr>';

        // 绿色的正方形
        $greenSquare = new Square($green);
        $greenSquare->draw();
        echo '<hr>';


        // 红色的三角形
        $redTriangle = new Triangle($red);
        $redTriangle->draw();
        echo '<hr>';

        // 黄色的三角形
        $yellowTriangle = new Triangle($yellow);
        $yellowTriangle->draw();
        echo '<hr>';

        // 绿色的三角形
        $greenTriangle = new Triangle($green);
        $greenTriangle->draw();
        echo '<hr>';


        // 红色的圆形
        $redCircle = new Circle($red);
        $redCircle->draw();
        echo '<hr>';

        // 黄色的圆形
        $yellowCircle = new Circle($yellow);
        $yellowCircle->draw();
        echo '<hr>';

        // 绿色的圆形
        $greenCircle = new Circle($green);
        $greenCircle->draw();
        echo '<hr>';

    }
}

$client = new Client();
$client->run();