<?php

namespace Ba\DesignModel\Command;

/**
 * 命令接口
 *
 * @package Ba\DesignModel\Command
 */
interface CommandInterface
{

    /**
     * @return mixed
     */
    public function execute();
}