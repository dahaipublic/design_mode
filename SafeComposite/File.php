<?php

namespace Ba\DesignModel\SafeComposite;

/**
 * 文件
 *
 * Class File
 * @package Ba\DesignModel\SafeComposite
 */
class File extends Component
{
    /**
     * @return mixed|string
     */
    public function display()
    {
        return '--' . $this->name .'<br>';
    }
}