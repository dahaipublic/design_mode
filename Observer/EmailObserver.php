<?php

namespace Ba\DesignModel\Observer;

/**
 * 发邮件
 *
 * @package Ba\DesignModel\Observer
 */
class EmailObserver implements Observer
{
    /**
     * 执行操作
     */
    public function update()
    {
        echo '发送邮件昭告天下<br>';
    }
}