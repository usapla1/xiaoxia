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
			$data = array();
			$data['email'] = I('post.email');
			$data['telphone'] = I('post.telphone');
			$data['username'] = I('post.username');
			$data['userid'] = $result;
			$ResumeDao = M('Resume');
			$result1 =  $ResumeDao->add($data);
			if(!empty($result1)){
				$this->success("注册成功","http://127.0.0.1/newfish/index.php");
			}else{
				$this->error("亲，简历初始化失败");
			}
		}else{
			$this->error("亲，注册失败");
		}
	}

	/**
	 *
	 * 验证码生成
	 */
	public function verify_c(){
		$Verify = new \Think\Verify();
		$Verify->fontSize = 12;//验证码字体大小
		$Verify->length   = 4;//验证码的数目
		$Verify->useNoise = false;//是否添加杂点 默认为true
		//$Verify->codeSet = '0123456789';//验证码字符集合
		$Verify->expire = 600;		//验证码有效期
		//$Verify->fontttf = 600;指定验证码字体 默认为随机获取
		//$Verify->zhSet = 600;验证码字符集合（中文）
		//$Verify->imageW = 600;验证码宽度 设置为0为自动计算
		//$Verify->imageH = 600;验证码高度 设置为0为自动计算
		//$Verify->useCurve = true;是否使用混淆曲线 默认为true
		//生成的验证码信息会保存到session中，包含的数据有：array('verify_code'=>'当前验证码的值','verify_time'=>'验证码生成的时间戳')
		$Verify->entry();
	}


}