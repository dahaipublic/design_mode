<?php

namespace Ba\DesignModel\Command;

/**
 * 具体命令类
 *
 * @package Ba\DesignModel\Command
 */
class Command implements CommandInterface
{
    /**
     * @var \Ba\DesignModel\Command\Receiver
     */
    protected $receiver;

    /**
     * Command constructor.
     *
     * @param \Ba\DesignModel\Command\Receiver $receiver
     */
    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @return mixed|void
     */
    public function execute()
    {
        $this->receiver->action();
    }
}