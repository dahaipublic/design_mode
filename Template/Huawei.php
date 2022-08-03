<?php

namespace Ba\DesignModel\Template;

/**
 * Class Huawei
 *
 * @package Ba\DesignModel\Template
 */
class Huawei extends Phone
{
    /**
     * 打电话
     *
     * @return mixed|void
     */
    protected function showLogo()
    {
        echo '华为logo'. '<br>';
    }
}