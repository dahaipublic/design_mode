<?php

namespace Ba\DesignModel\ObjectAdapter;

/**
 * 适配器
 *
 * Class Adapter
 * @package Ba\DesignModel\ObjectAdapter
 */

class Adapter implements Target
{

    /**
     * Adapter constructor.
     * @param Adaptee $adaptee
     */
    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
        $adaptee->money = '$5';
    }

    /**
     * 支付
     *
     * @return mixed|void
     */
    public function pay()
    {
        $this->adaptee->pay();
    }

    /**
     * 通知
     *
     * @return mixed|void
     */
    public function notify()
    {
        echo '通知';
    }
}