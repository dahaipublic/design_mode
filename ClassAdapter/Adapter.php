<?php

namespace Ba\DesignModel\ClassAdapter;

/**
 * 适配器
 *
 * Class Adapter
 * @package Ba\DesignModel\ClassAdapter
 */
class Adapter extends Adaptee implements Target
{
    /**
     * Adapter constructor.
     */
    public function __construct()
    {
        $this->money = '$5';
    }

    /**
     * 通知
     */
    public function notify()
    {
        echo '通知';
    }
}