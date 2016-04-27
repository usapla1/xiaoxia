<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-03-30
 * Time: 21:59
 */
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
use Home\Common;
use Home\Controller\Base;

class LoginController extends BaseController{
    //登录首页
    public function index(){
        $this->display();
    }

    //登录操作
    public function login(){
        session_start();
        $map = array();
        $map['email'] = I('post.email');
        $map['repassword'] = I('post.password');
        // 检查验证码
        $verify = I('param.verify','');
        if(!$this->check_verify($verify)){
            $this->error("亲，验证码输错了哦！",U('Login/index'),1);
        }
        $Users = M('Users');
        $result =  $Users->where($map)->find();
        if(!empty($result)){
            $_SESSION['userid'] = $result['userid'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['role'] = $result['role'];
            if($result['role'] == 2){
                $this->success("登录成功",U('Work/index'));
            }elseif($result['role'] == 1){
                $this->success("登录成功",U('User/index'));
            }
            //$this->ajaxReturn("login","登录成功",true);
        }else{
            $this->error("亲，登录失败了！",U('Login/index'),1);

        }
        //$this->display();
    }

    /**
     *
     * 验证码生成
     */
    public function verify_c(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = 18;//验证码字体大小
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