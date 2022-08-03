<?php

namespace Ba\DesignModel\ClassAdapter;

/**
 * 目标类接口
 *
 * Interface Target
 * @package Ba\DesignModel\ClassAdapter
 */
interface Target
{
    /**
     * 支付
     *
     * @return mixed
     */
    public function pay();

    /**
     * 通知
     *
     * @return mixed
     */
    public function notify();
}
