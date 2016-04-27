<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
use Home\Common;
use Home\Controller\Base;

class RegisterController extends BaseController{
	//注册页首页
	public function index(){
		$this->display();
	}
	//注册操作
	public function register(){
		$data = array();
		$data['email'] = I('post.email');
		$data['telphone'] = I('post.telphone');
		$data['username'] = I('post.username');
		$data['userdata'] = I('post.user_data');
		$data['password'] = I('post.password');
		$data['repassword'] = I('post.repassword');
		if($data['password'] != $data['repassword']){
			$this->error("亲，重复密码不一致");
		}
		$Users = M('Users');
		$map = array();
		$map['email'] = $data['email'];
		$result1 =  $Users->where($map)->find();
		if(!empty($result1)){
			$this->error("亲，注册失败,账号已经存在");
		}
		$result =  $Users->add($data);
		if(!empty($result)){
/*			$data = array();
			$data['email'] = I('post.email');
			$data['telphone'] = I('post.telphone');
			$data['username'] = I('post.username');
			$data['userid'] = $result;
			$ResumeDao = M('Resume');
			$result1 =  $ResumeDao->add($data);
			if(!empty($result1)){*/
				$this->success("注册成功",U('User/index'));
/*			}else{
				$this->error("亲，简历初始化失败");
			}*/
		}else{
			$this->error("亲，注册失败",U('Index/index'));
		}
	}



}