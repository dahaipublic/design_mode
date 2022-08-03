<?php

namespace Ba\DesignModel\Command;

/**
 * 命令发送者
 *
 * @package Ba\DesignModel\Command
 */
class Invoker
{
    /**
     * @var
     */
    protected $command;

    /**
     * @param \Ba\DesignModel\Command\Command $command
     */
    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    /**
     * 执行
     */
    public function run()
    {
        $this->command->execute();
    }
}