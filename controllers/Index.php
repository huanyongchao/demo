<?php
/**
 * Created by PhpStorm.
 * User: huanyongchao
 * Date: 2017/8/30
 * Time: 下午10:18
 */

class IndexController{
  public function __construct(){
    echo 234;
  }
  public function indexAction() {
    echo 123;
    echo Test::index();
  }
}