<?php

namespace Ba\DesignModel\Bridge;

/**
 * 形状抽象类
 *
 * Class Graph
 * @package Ba\DesignModel\Bridge
 */
abstract class Graph
{
    /**
     * 颜色
     *
     * @var Color
     */
    protected $color;

    /**
     * Graph constructor.
     * @param Color $color
     */
    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    abstract public function draw();
}