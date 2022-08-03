<?php

namespace Ba\DesignModel\SafeComposite;

/**
 * 只包含树枝节点和叶子节点公共的方法抽象类
 *
 * Class Component
 * @package Ba\DesignModel\SafeComposite
 */
abstract class Component
{
    /**
     * @var
     */
    protected $name;

    /**
     * Component constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    abstract public function display();
}