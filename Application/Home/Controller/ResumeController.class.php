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
        if($_SESSION['role'] != 1){
            $this->error("对不起，请先登录","http://127.0.0.1/newfish/index.php/Home/Login/index");
        }
        $map = array();
        $map['userid'] = $_SESSION['userid'];
        $ResumeDao = M('Resume');
        $list =  $ResumeDao->where($map)->find();
        $user = $_SESSION['username'];
        $this->assign('user',$user);
        $this->assign('list',$list);
        $this->display();
    }
    //个人简历首页
    public function more()
    {
        if(empty($_SESSION['userid'])){
            $this->error("对不起，请先登录","http://127.0.0.1/newfish/index.php/Home/Login/index");
        }
        if($_SESSION['role'] != 1){
            $this->error("对不起，请先登录","http://127.0.0.1/newfish/index.php/Home/Login/index");
        }
        $map = array();
        $map['userid'] = $_SESSION['userid'];
        $MoreDao = M('More');
        $list =  $MoreDao->where($map)->find();
        $user = $_SESSION['username'];
        $this->assign('user',$user);
        $this->assign('list',$list);
        $this->display();
    }
    //编辑简历
    public function editmore(){
        if(empty($_SESSION['userid'])){
            $this->error("对不起，请先登录","http://127.0.0.1/newfish/index.php/Home/Login/index");
        }
        if($_SESSION['role'] != 1){
            $this->error("对不起，请先登录","http://127.0.0.1/newfish/index.php/Home/Login/index");
        }
        $data = array();
        $data['edu'] = I('edu');
        $data['work'] = I('work');
        $data['reward'] = I('reward');
        $data['skill'] = I('skill');
        $data['selftalk'] = I('selftalk');
        $data['hopework'] = I('hopework');
        $data['resumeid'] = $_SESSION['resumeid'];
        $map = array();
        $map['userid'] = $_SESSION['userid'];
        $More = M('More');
        $res = $More->where($map)->find();
        if(!empty($res)){
            $result = $More->where($map)->save($data);
        }else{
            $data['userid'] = $_SESSION['userid'];
            $result = $More->add($data);
        }
        if(0 !== $result){
            $this->success("亲，保存成功",U('Resume/more'),3);
        }else{
            $this->error("亲，保存失败");
        }
    }

    //编辑简历
    public function edit(){
        session_start();
        if(empty($_SESSION['userid'])){
            $this->error("对不起，请先登录","http://127.0.0.1/newfish/index.php/Home/Login/index");
        }
        if($_SESSION['role'] != 1){
            $this->error("对不起，请先登录","http://127.0.0.1/newfish/index.php/Home/Login/index");
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
/*        $data['edu'] = I('post.edu');
        $data['work'] = I('post.work');
        $data['reward'] = I('post.reward');
        $data['skill'] = I('post.skill');
        $data['selftalk'] = I('post.selftalk');
        $data['hopework'] = I('post.hopework');*/
        $map = array();
        $map['userid'] = $_SESSION['userid'];
        $Resume = M('Resume');
        $res = $Resume->where($map)->find();
        if(!empty($res)){
            $_SESSION['resumeid'] = $res['resumeid'];
            $result = $Resume->where($map)->save($data);
        }else{
            $data['userid'] = $_SESSION['userid'];
            $result = $Resume->add($data);
            $_SESSION['resumeid'] = $result;
        }
        if(0 !== $result){
            $this->success("亲，保存成功,即将进入下一页面进行信息完善",U('Resume/more'),3);
        }else{
            $this->error("亲，保存失败");
        }
    }

    //投递简历
    public function sendresume(){
        if(empty($_SESSION['userid'])){
            $this->error("请先登录","http://127.0.0.1/newfish/index.php/Home/Login/index");
        }
        if($_SESSION['role'] != 1){
            $this->error("对不起，你不是求职者".$_SESSION['role'],"http://127.0.0.1/newfish/index.php/Home/Work/index");
        }
        $Seek = M('Seek');
        $map = array();
        $map['workid'] = I('post.workid');
        $map['userid'] = $_SESSION['userid'];
        $result1 = $Seek->where($map)->select();
        if($result1){
            $this->error("亲，简历投递失败，您已经投过了");
        }
        $Resume = M('Resume');
        $map = array();
        $map['userid'] = $_SESSION['userid'];
        $result2= $Resume->field('sex,mingzhu,hunyin')->where($map)->find();

        if(empty($result2['sex'])||empty($result2['mingzhu'])||empty($result2['hunyin'])){
            $this->error("亲，请先完善简历");
        }
        $Seek = M('Seek');
        $data = array();
        $data['workid'] = I('post.workid');
        $data['work_title'] = I('post.work_title');
        $data['userid'] = $_SESSION['userid'];
        $data['is_look'] = 0 ;
        $data['create_time'] =  date('Y-m-d H:i:s',time());
        $data['update_time'] =  date('Y-m-d H:i:s',time());
        $result = $Seek->add($data);
        if($result){
            $this->success("亲，简历投递成功，等待面试通知");
        }else{
            $this->error("亲，简历投递失败，请重新尝试");
        }
    }

    //查看简历
    public function online()
    {
        if (empty($_SESSION['userid'])) {
            $this->error("请先登录");
        }
        $map = array();
        $map['resumeid'] = I('resumeid');
        $ResumeDao = M('Resume');
        $MoreDao = M('More');
        $list = $ResumeDao->where($map)->find();
        $list1 = $MoreDao->where($map)->find();
        $user = $_SESSION['username'];
        $this->assign('user',$user);
        $this->assign('list',$list);
        $this->assign('list1',$list1);
        $this->display();
    }
}