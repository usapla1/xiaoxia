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
	//邮件主页
	public function index()
	{
		$this->display();
	}
	//发送邮件
	public function add(){
		if(SendMail($_POST['mail'],$_POST['title'],$_POST['content']))
			$this->success('发送成功！');
		else
			$this->error('发送失败');
	}
}