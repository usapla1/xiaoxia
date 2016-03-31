<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
use Home\Common;
class RegisterController extends Controller {
	public function index(){
		$name = 'ThinkPHP';
		$Users = M('Users');
		$Users->order('create_time')->limit(10)->where('status=1')->select();
		$this->assign('name',$name);
		$this->display();
	}

	public function register(){
/*		$verify = I('post.Verify');
		if(!self::check_verify($verify)){
			$this->error("亲，验证码输错了哦！",$this->site_url,9);
		}
		$data = array();
		$data['user'] = I('post.user');
		$data['password'] = I('post.password');
		$data['password1'] = I('post.password1');
		$data['Verify'] = I('post.Verify');
		$data['chackbox'] = I('post.chackbox');
		$this->ajaxReturn($data);*/
		$this->display();
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

	/**
	 * 验证码检查
	 */
	public function check_verify($code, $id = ""){
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}

}