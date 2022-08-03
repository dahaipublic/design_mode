<?php

namespace Ba\DesignModel\Flyweight;

/**
 * 共享的具体享元类
 *
 * Class ConcreteFlyweight
 *
 * @package Ba\DesignModel\Flyweight
 */
class ConcreteFlyweight extends Flyweight
{
    /**
     * @param $content
     */
    public function show($content)
    {
        echo '共享的享元：' . $this->name . $content . '<br>';
    }
}