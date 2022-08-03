<?php

namespace Ba\DesignModel\Bridge;

/**
 * 圆形
 *
 * Class Circle
 * @package Ba\DesignModel\Bridge
 */
class Circle extends Graph
{
    /**
     * @return mixed|void
     */
    public function draw()
    {
        echo "画一个 {$this->color->run()} 的圆形";
    }
}