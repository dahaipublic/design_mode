<?php

/**
 * 代理模式
 * 代理模式建议新建一个与原服务对象接口相同的代理类， 然后更新应用以将代理对象传递给所有原始对象客户端。
 * 代理类接收到客户端请求后会创建实际的服务对
 * 象， 并将所有工作委派给它。
 * 比如客户访问一个站点，它首先访问的时代理服务器，代理服务器经过一层过滤之后，最后请求才到达真正的服务器
 * 代理服务可以延迟服务，等真正调用的时候，才会去示例对象
 * 代理可以实现访问控制，只有通过验证的程序才会去调用服务
 * 日志代理，专门记录请求记录
 * 缓存代理，把资源放在代理服务
 */


/**
 * 抽象类
 * Class Subject
 */
abstract class Subject
{
    abstract public function say();

    abstract public function run();
}

/**
 * 代理的实体类
 * Class RealSubject
 */
class RealSubject extends Subject
{

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function say()
    {
        echo $this->name . "在吃饭<br>";
    }

    public function run()
    {
        echo $this->name . "在跑步<br>";
    }
}

/**
 * 代理类
 * Class Proxy
 */
class Proxy extends Subject
{

    private $realSubject = null;

    public function __construct(RealSubject $realSubject = null)
    {
        if (empty($realSubject)) {
            $this->realSubject = new RealSubject();
        } else {
            $this->realSubject = $realSubject;
        }
    }

    public function say()
    {
        $this->realSubject->say();
    }

    public function run()
    {
        $this->realSubject->run();
    }
}

//=======================代理模式测试===============================

$subject = new RealSubject("张三");
$proxy   = new Proxy($subject);
$proxy->say();
$proxy->run();

//结果
//张三在吃饭
//张三在跑步
