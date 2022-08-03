<?php

namespace Ba\DesignModel\Prototype;

/**
 * Class Car
 * @package Ba\DesignModel\Prototype
 */
class Car
{
    /**
     * 车名
     *
     * @var
     */
    public $name;

    /**
     * 设置车名
     *
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}