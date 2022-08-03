<?php

namespace Ba\DesignModel\SafeComposite;

require __DIR__ . '/../vendor/autoload.php';

/**
 *透明组合模式
 * 组合模式用来解决整体和部分可以一致对待的问题；
 * 比如说 文件夹 和其下的 文件；
 * 可以复制文件也可以复制整个文件夹；
 * 组合模式是将对象组合成树形结构以表示整体和部分的层次结构；
 * 可以方便的增加节点；
 * 组合模式分为两种；
 *
 * 透明模式
 * 安全模式
 * 我们先来说透明组合模式；
 *
 * 结构
 * Component：包含树枝节点和叶子节点方法的抽象类
 * Composite：树枝节点 有子节点 示例中指 Dir 文件夹
 * Leaf：叶子节点 没有子节点 示例中指 File 文件
 *
 * 示例
 * 包含树枝节点和叶子节点方法的抽象类
 * Component.php
 *
 * 安全组合模式
 *
 * 客户端
 *但是也说了透明组合模式中的叶子节点虽然有 add 方法；
 * 运行的时候却是抛出错误；
 * 这还有个安全的组合模式避免这种情况；
 *
 * 结构
 * Component：只包含树枝节点和叶子节点公共的方法抽象类
 * Composite：树枝节点 有子节点 示例中指 Dir 文件夹
 * Leaf：叶子节点 没有子节点 示例中指 File 文件
 *
 * 示例
 * 只包含树枝节点和叶子节点公共的方法抽象类
 * Component.php
 *
 * Class Client
 *
 * @package Ba\DesignModel\SafeComposite
 */
class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $DesignModel = new Dir('design-patterns');

        $classAdapter  = new Dir('ClassAdapter');
        $objectAdapter = new Dir('ObjectAdapter');
        $safeComposite = new Dir('SafeComposite');

        $DesignModel->add($classAdapter);
        $DesignModel->add($objectAdapter);
        $DesignModel->add($safeComposite);

        $componentFile = new File('Component.php');
        $dirFile       = new File('Dir.php');
        $fileFile      = new File('File.php');
        $indexFile     = new File('index.php');

        $safeComposite->add($componentFile);
        $safeComposite->add($dirFile);
        $safeComposite->add($fileFile);
        $safeComposite->add($indexFile);

        echo $DesignModel->display();
    }
}

$client = new Client();
$client->run();
