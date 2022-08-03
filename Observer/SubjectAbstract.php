<?php

namespace Ba\DesignModel\Observer;

/**
 * Observer 抽象类
 *
 * @package Ba\DesignModel\Observer
 */
abstract class SubjectAbstract
{
    /**
     * @var array
     */
    private $observers = [];

    /**
     * @param \Ba\DesignModel\Observer\Observer $observer
     */
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * 通知
     */
    public function notify()
    {
        foreach ($this->observers as $k => $v) {
            $v->update();
        }
    }
}