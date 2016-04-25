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
class UserController extends BaseController{
	//个人信息首页
	public function index()
	{
		if(empty($_SESSION['userid'])){
			$this->error("对不起，请先登录","http://127.0.0.1/newfish/index.php/Home/Login/index");
		}
		if($_SESSION['role'] != 1 ){
			$this->error("对不起，您没有权限进入该页面".$_SESSION['role'],"http://127.0.0.1/newfish/index.php/Home/Login/index");
		}
		$map = array();
		$map['userid'] = $_SESSION['userid'];
		$UsersDao = M('Users');
		$list =  $UsersDao->where($map)->find();
		$user = $_SESSION['username'];
		$this->assign('user',$user);
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

	//查看投递的简历
	public function apply()
	{
		if(empty($_SESSION['userid'])){
			$this->error("对不起，请先登录","http://127.0.0.1/newfish/index.php/Home/Login/index");
		}
		if($_SESSION['role'] != 1 ){
			$this->error("对不起，您没有权限进入该页面".$_SESSION['role'],"http://127.0.0.1/newfish/index.php/Home/Login/index");
		}
		$map = array();
		$map['userid'] = $_SESSION['userid'];
		$SeekDao = M('Seek');
		$list =  $SeekDao->where($map)->select();
		$count = $SeekDao->where($map)->count();
		$user = $_SESSION['username'];
		$this->assign('user',$user);
		$this->assign('list',$list);
		$this->assign('count',$count);
		$this->display();
	}

	//人事反馈
	public function feedback()
	{
		if(empty($_SESSION['userid'])){
			$this->error("对不起，请先登录","http://127.0.0.1/newfish/index.php/Home/Login/index");
		}
		if($_SESSION['role'] != 1 ){
			$this->error("对不起，您没有权限进入该页面".$_SESSION['role'],"http://127.0.0.1/newfish/index.php/Home/Login/index");
		}
		$userid = $_SESSION['userid'];
		$map = array();
		$map['cb_resume.userid'] = $userid;
		$MailsmsDao = M('Mailsms');
		$list = $MailsmsDao->join('cb_resume ON cb_mailsms.mail = cb_resume.email')->where($map)->select();
		$count = $MailsmsDao->join('cb_resume ON cb_mailsms.mail = cb_resume.email')->where($map)->count();
		$user = $_SESSION['username'];
		$this->assign('user',$user);
		$this->assign('list',$list);
		$this->assign('count',$count);
		$this->display();
	}

	//人事反馈记录删除
	public function fbdel()
	{
		if(empty($_SESSION['userid'])){
			$this->error("对不起，请先登录","http://127.0.0.1/newfish/index.php/Home/Login/index");
		}
		if($_SESSION['role'] != 1 ){
			$this->error("对不起，您没有权限进入该页面".$_SESSION['role'],"http://127.0.0.1/newfish/index.php/Home/Login/index");
		}
		$mailsmsid = I('mailsmsid');
		$map = array();
		$map['mailsmsid'] = $mailsmsid;
		$MailsmsDao = M('Mailsms');
		$result = $MailsmsDao->where($map)->delete();
		if(!empty($result)){
			$this->success("删除成功");
		}else{
			$this->error("删除失败");
		}
	}

	//删除求职记录
	public function apdel()
	{
		if(empty($_SESSION['userid'])){
			$this->error("对不起，请先登录","http://127.0.0.1/newfish/index.php/Home/Login/index");
		}
		if($_SESSION['role'] != 1 ){
			$this->error("对不起，您没有权限进入该页面".$_SESSION['role'],"http://127.0.0.1/newfish/index.php/Home/Login/index");
		}
		$seekid = I('seekid');
		$map = array();
		$map['seekid'] = $seekid;
		$MailsmsDao = M('Seek');
		$result = $MailsmsDao->where($map)->delete();
		if(!empty($result)){
			$this->success("删除成功");
		}else{
			$this->error("删除失败");
		}
	}
}