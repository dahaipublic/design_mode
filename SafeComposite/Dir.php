<?php

namespace Ba\DesignModel\SafeComposite;

/**
 * 文件夹
 *
 * Class Dir
 * @package Ba\DesignModel\SafeComposite
 */
class Dir extends Component
{
    /**
     * @var array
     */
    protected $children = [];

    /**
     * 添加子节点
     *
     * @param Component $component
     */
    public function add(Component $component)
    {
        $this->children[] = $component;
    }

    /**
     * @return mixed|string
     */
    public function display()
    {
        $nameStr = $this->name .'<br>';
        foreach ($this->children as $k => $v) {

            $nameStr .= '--' . $v->display();
        }
        return $nameStr;
    }
}