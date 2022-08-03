<?php

namespace Ba\DesignModel\Facade;

/**
 * Facade
 *
 * @package Ba\DesignModel\Facade
 */
class Facade
{
    /**
     * @var \Ba\DesignModel\Facade\File
     */
    private $file;

    /**
     * @var \Ba\DesignModel\Facade\Encrypt
     */
    private $encrypt;

    /**
     * Facade constructor.
     */
    public function __construct()
    {
        $this->file = new File();
        $this->encrypt = new Encrypt();
    }

    /**
     * 获取文件内容并加密
     */
    public function encryptContent()
    {
        echo $this->file->content();
        echo '<br>';
        echo $this->encrypt->encrypt();
    }
}
