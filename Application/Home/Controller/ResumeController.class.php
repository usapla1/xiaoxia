<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-03-30
 * Time: 22:33
 */
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
use Home\Common;
use Home\Controller\Base;

class ResumeController extends BaseController{
    //个人简历首页
    public function index()
    {
        if(empty($_SESSION['userid'])){
            $this->error("对不起，请先登录","http://127.0.0.1/newfish/index.php/Home/Login/index");
        }
        $map = array();
        $map['userid'] = $_SESSION['userid'];
        $ResumeDao = M('Resume');
        $list =  $ResumeDao->where($map)->find();
        $this->assign('list',$list);
        $this->display();
    }

    //编辑简历
    public function edit(){
        session_start();
        if(empty($_SESSION['user_id'])){
            $this->ajaxReturn("Resume","请先登录",false);
        }
        $data = array();
        $data['sex'] = I('post.sex');
        $data['mingzhu'] = I('post.mingzhu');
        $data['hunyin'] = I('post.hunyin');
        $data['shenfen'] = I('post.shenfen');
        $data['jiguan'] = I('post.jiguan');
        $data['adress'] = I('post.adress');
        $data['telphone'] = I('post.telphone');
        $data['username'] = I('post.name');
        $data['email'] = I('post.email');
        $data['edu'] = I('post.edu');
        $data['work'] = I('post.work');
        $data['reward'] = I('post.reward');
        $data['skill'] = I('post.skill');
        $data['selftalk'] = I('post.selftalk');
        $data['hopework'] = I('post.hopework');
        $map = array();
        $map['userid'] = $_SESSION['userid'];
        $Resume = M('Resume');
        $result = $Resume->where($map)->save($data);
        if(false !== $result || 0 !== $result){
            $this->success("亲，编辑成功");
        }else{
            $this->error("亲，编辑失败");
        }
    }
}