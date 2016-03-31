<?php
namespace Home\Controller;
use Think\Controller;
class MyController extends Controller {
    public function index(){
		$name = 'ThinkPHP';
		$this->assign('name',$name);
		$this->display();
	}
}