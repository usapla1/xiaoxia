<?php
namespace Home\Controller;
use Think\Controller;
use Home\Controller\Base;

class MyController extends BaseController{
    public function index(){
		$name = 'ThinkPHP';
		$this->assign('name',$name);
		$this->display();
	}
}