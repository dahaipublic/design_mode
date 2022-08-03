<?php

namespace Ba\DesignModel\Flyweight;

/**
 * 不共享的具体享元类
 *
 * Class UnsharedConcreteFlyweight
 *
 * @package Ba\DesignModel\Flyweight
 */
class UnsharedConcreteFlyweight extends Flyweight
{
    /**
     * @param $content
     */
    public function show($content)
    {
        echo '不共享的享元：' . $this->name . $content . '<br>';
    }

    /**
     * 附加的删除方法
     */
    public function delete()
    {
        $this->name = '';
    }
}