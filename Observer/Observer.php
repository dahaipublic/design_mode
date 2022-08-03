<?php

namespace Ba\DesignModel\Observer;

/**
 * Observer 接口
 *
 * @package Ba\DesignModel\Observer
 */
interface Observer
{
    /**
     * @return mixed
     */
    public function update();
}