<?php

namespace Ba\DesignModel\Prototype;

/**
 * Class ShallowDrive
 * @package Ba\DesignModel\Prototype
 */
class ShallowDrive
{

    private $car;

    /**
     * Drive constructor.
     */
    public function __construct()
    {
        echo '准备完成';
    }

    /**
     * 选择要开的车
     *
     * @param $car
     */
    public function setCar($car)
    {
        $this->car = $car;
    }

    public function show()
    {
        echo '开始驾驶'.$this->car->name;
        echo '<br>';
    }
}