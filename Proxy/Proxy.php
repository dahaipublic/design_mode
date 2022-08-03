<?php

namespace Ba\DesignModel\Proxy;

/**
 * 代理
 *
 * Class Proxy
 *
 * @package Ba\DesignModel\Proxy
 */
class Proxy implements Subject
{
    /**
     * 真实主题
     *
     * @var \Ba\DesignModel\Proxy\RealSubject
     */
    protected $realSubject;

    /**
     * Proxy constructor.
     */
    public function __construct()
    {
        $this->realSubject = new RealSubject();
    }

    /*
     * 执行操作
     */
    public function action()
    {
        $this->realSubject->action();
    }

}