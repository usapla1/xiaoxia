<?php
/**
 * Created by PhpStorm.
 * User: greatwall
 * Date: 2016/4/11
 * Time: 20:18
 */
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
use Home\Common;
use Home\Controller\Base;
class ResumeController extends BaseController{
	//个人信息首页
	public function index()
	{
		if(empty($_SESSION['user_id'])){
			$this->ajaxReturn("Resume","请先登录",false);
		}
		if($_SESSION['role'] !== 1 ){
			$this->ajaxReturn("Work","对不起，您没有权限进入该页面",false);
		}
		$map = array();
		$map['user_id'] = $_SESSION['user_id'];
		$UsersDao = M('Users');
		$list =  $UsersDao->where($map)->find();
		$this->assign('list',$list);
		$this->display();
	}

	//个人信息编辑
	public function edit()
	{
		if(empty($_SESSION['user_id'])){
			$this->ajaxReturn("Resume","请先登录",false);
		}
		if($_SESSION['role'] !== 1 ){
			$this->ajaxReturn("Work","对不起，您没有权限进入该页面",false);
		}
		$map = array();
		$map['user_id'] = $_SESSION['user_id'];
		$data = array();
		$data['name'] = I('post.name');
		$data['sex'] = I('post.sex');
		$data['age'] = I('post.age');
		$data['edu'] = I('post.edu');
		$data['like'] = I('post.like');
		$data['skill'] = I('post.skill');
		$UsersDao = M('Users');
		$result =  $UsersDao->where($map)->save($data);
		if(!empty($result)){
			$this->ajaxReturn("User","保存成功",true);
		}else{
			$this->ajaxReturn("User","保存失败",true);
		}
	}

}