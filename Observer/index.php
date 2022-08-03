<?php

namespace Ba\DesignModel\Observer;

require __DIR__ . '/../vendor/autoload.php';

/**
 * 观察者模式
 * 在业务开发过程中多个功能会互相依赖；
 * 如果我们想在一个对象发生变化后通知和它有关联的类；
 * 比如说你做了某件事后希望可以使用邮件和短信发送通知；
 * 这时候就比较适合使用观察者模式了；
 * 不过 php 官方已经提供了 SplObserver 和 SplSubject；
 * 因此这又是一篇为了设计模式而写设计模式的文章；
 *
 * 结构
 * SubjectAbstract： Subject 抽象类 示例中指 SubjectAbstract.php；
 * Subject： 具体的类 示例中指 Subject.php;
 * Observer： Observer接口 示例中指 Observer.php；
 * ConcreteObserver： 具体的 Observer 示例中指 EmailObserver.php 和 SMSObserver.php ；
 *
 * 示例
 * SubjectAbstract.php
 * 客户端
 *
 * Class Client
 *
 * @package Ba\DesignModel\Observer
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $emailObserver = new EmailObserver();
        $SMSObserver   = new SMSObserver();
        $subject       = new Subject();

        $subject->attach($emailObserver);
        $subject->attach($SMSObserver);
        $subject->publish();
    }
}

$client = new Client();
$client->run();