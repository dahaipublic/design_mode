<?php

namespace Ba\DesignModel\Decorator;

/**
 * 装饰  配料
 *
 * Class Decorator
 * @package Ba\DesignModel\Decorator
 */
abstract class Decorator implements Food
{
    /**
     * @var Food
     */
    protected $food;

    /**
     * Decorator constructor.
     * @param Food $food
     */
    public function __construct(Food $food)
    {
        $this->food = $food;
    }
}