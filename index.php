<?php
/**
 * Created by PhpStorm.
 * User: huanyongchao
 * Date: 2017/8/30
 * Time: 下午10:23
 */
require './controllers/Index.php';
require './controllers/Test.php';

$controller = new IndexController();
$controller -> indexAction();
echo 123;