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
        $map['password'] = I('post.password');
        $Users = M('Users');
        $result =  $Users->where($map)->find();
        if(!empty($result)){
            $_SESSION['userid'] = $result['userid'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['role'] = $result['role'];
            if($result['role'] == 2){
                $this->success("登录成功","http://127.0.0.1/newfish/index.php/Home/Work/index");
            }elseif($result['role'] == 1){
                $this->success("登录成功","http://127.0.0.1/newfish/index.php/Home/User/index");
            }
            //$this->ajaxReturn("login","登录成功",true);
        }else{
            $this->error("登录失败");
            //$this->ajaxReturn("login","登录失败",true);
        }
        //$this->display();
    }
}