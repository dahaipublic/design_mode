<?php

namespace Ba\DesignModel\Template;

/**
 * Class Xiaomi
 *
 * @package Ba\DesignModel\Template
 */
class Xiaomi extends Phone
{
    /**
     * logo
     *
     * @return mixed|void
     */
    protected function showLogo()
    {
        echo '小米logo'. '<br>';
    }
}