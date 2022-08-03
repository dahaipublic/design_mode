<?php

namespace Ba\DesignModel\Proxy;

/**
 * 真实主题
 *
 * Class RealSubject
 *
 * @package Ba\DesignModel\Proxy
 */
class RealSubject implements Subject
{
    /**
     * 执行操作
     */
    public function action()
    {
        echo '执行操作';
    }
}