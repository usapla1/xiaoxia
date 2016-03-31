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
    //��¼ҳ��ҳ
    public function index(){
        $this->display();
    }

    //��¼����
    public function login(){
        session_start();
        $verify = I('post.Verify');
        if(check_verify($verify)){
            $this->ajaxReturn("Verify","��֤�����",false);
        }
        $map = array();
        $map['username'] = I('post.username');
        $map['password'] = I('post.password');
        $Users = M('Users');
        $result =  $Users->where($map)->find();
        if(!empty($result)){
            $_SESSION['user_id'] = $result['user_id'];
            $this->ajaxReturn("login","��¼�ɹ�",true);
        }else{
            $this->ajaxReturn("login","��¼ʧ��",true);
        }
        $this->display();
    }
}