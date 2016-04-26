<?php
/**
 * Created by PhpStorm.
 * User: greatwall
 * Date: 2016/3/31
 * Time: 17:43
 */
namespace Home\Controller;
use Think\Controller;
use Home\Common;
use Home\Controller\Base;

class MailController extends Controller{
	//企业发送过的邮件主页
	public function index(){
		if(empty($_SESSION['userid'])){
		$this->error("请先登录");
		}
		if($_SESSION['role'] != 2 ){
			$this->error("对不起，您没有权限进入该页面");
		}
		$username = I('username');
		$email = I('email');
		$user = $_SESSION['username'];
		$this->assign('user',$user);
		$this->assign('username',$username);
		$this->assign('email',$email);
		$this->display();
	}

	//个人受到的邮件记录
	public function userMail(){
		if(empty($_SESSION['user_id'])){
			$this->ajaxReturn("Mail","请先登录",false);
		}
		if($_SESSION['role'] !== 1 ){
			$this->ajaxReturn("Mail","对不起，您没有权限进入该页面",false);
		}
		$map = array();
		$map['user_id'] = $_SESSION['user_id'];
		$MailsmsDao = M('Mailsms');
		$list = $MailsmsDao->join('cb_users ON cb_mailsms.user_id = cb_users.user_id')->where($map)->order('add_time')->select();
		$this->assign('list',$list);
		$this->display();
	}
	//发送邮件
	public function add(){
		$data = array();
		$data['workname'] = I('workname');
		$data['username'] = I('username');
		$data['mail'] = I('mail');
		$data['title'] = I('title');
		$data['content'] = I('content');
		$data['add_time'] = date('Y-m-d H:i:s',time());
		$MailsmsDao = M('Mailsms');
		$result = $MailsmsDao->add($data);

		if(!empty($result))
			$this->success('发送成功！');
		else{
			$this->error('发送失败');
		}
	}
}