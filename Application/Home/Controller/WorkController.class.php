<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-03-31
 * Time: 22:07
 */
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
use Home\Common;
use Home\Controller\Base;

class WorkController extends BaseController{
    //企业岗位表首页
    public function index(){
        if(empty($_SESSION['userid'])){
            $this->error("请先登录");
            //$this->ajaxReturn("Work","请先登录",false);
        }
        if($_SESSION['role'] != 2 ){
            $this->error("对不起，您没有权限进入该页面1".$_SESSION['role'],"http://127.0.0.1/newfish/index.php/Home/Login/index");
            //$this->ajaxReturn("Work","对不起，您没有权限进入该页面",false);
        }
        $map = array();
        $map['userid'] = $_SESSION['userid'];
        $WorkDao = M('Work');
        $list =  $WorkDao->where($map)->limit(10)->select();
        $count =  $WorkDao->where($map)->count();
        $this->assign('list',$list);
        $this->assign('count',$count);
        $this->display();
    }

    //新增职位
    public function creat()
    {
        if (empty($_SESSION['userid'])) {
            $this->error("请先登录");
            //$this->ajaxReturn("Work","请先登录",false);
        }
        if ($_SESSION['role'] != 2) {
            $this->error("对不起，您没有权限进入该页面");
            //$this->ajaxReturn("Work","对不起，您没有权限进入该页面",false);
        }
            $this->display();
    }
    //新增职位
    public function add(){
        if(empty($_SESSION['userid'])){
            $this->error("请先登录");
            //$this->ajaxReturn("Work","请先登录",false);
        }
        if($_SESSION['role'] != 2 ){
            $this->error("对不起，您没有权限进入该页面");
            //$this->ajaxReturn("Work","对不起，您没有权限进入该页面",false);
        }
        $data = array();
        $data['userid'] = $_SESSION['userid'];
        $data['work_num'] = I('post.work_num');
        $data['work_title'] = I('post.work_title');
        $data['work_type'] = I('post.work_type');
        $data['positionname'] = I('post.positionName');
        $data['department'] = I('post.department');
        $data['jobnature'] = I('post.jobNature');
        $data['salarymin'] = I('post.salaryMin');
        $data['salarymax'] = I('post.salaryMax');
        $data['workaddress'] = I('post.workAddress');
        $data['workyear'] = I('post.workYear');
        $data['education'] = I('post.education');
        $data['temptation'] = I('post.temptation');
        $data['receiveemail'] = I('post.receiveEmail');
        $data['create_time'] = date('Y-m-d H:i:s',time());
        $data['update_time'] = date('Y-m-d H:i:s',time());
        $WorkDao = M('Work');
        $result =  $WorkDao->add($data);
        if(!empty($result)){
            $this->success("岗位发布成功","http://127.0.0.1/newfish/index.php/Home/Work/index");
        }else{
            $this->error("岗位保存失败");
        }
    }
    //职位编辑
    public function doedit(){
        if(empty($_SESSION['userid'])){
            $this->error("请先登录");
            //$this->ajaxReturn("Work","请先登录",false);
        }
        if($_SESSION['role'] != 2 ){
            $this->error("对不起，您没有权限进入该页面");
            //$this->ajaxReturn("Work","对不起，您没有权限进入该页面",false);
        }
        $map = array();
        $map['userid'] = $_SESSION['userid'];
        $map['workid'] = I('workid');
        $WorkDao = M('Work');
        $list =  $WorkDao->where($map)->find();
        $this->assign('list',$list);
        $this->display();
    }
    //职位编辑
    public function edit(){
        if(empty($_SESSION['userid'])){
            $this->error("请先登录");
            //$this->ajaxReturn("Work","请先登录",false);
        }
        if($_SESSION['role'] != 2 ){
            $this->error("对不起，您没有权限进入该页面");
            //$this->ajaxReturn("Work","对不起，您没有权限进入该页面",false);
        }
        $map = array();
        $map['userid'] = $_SESSION['userid'];
        $map['workid'] = I('workid');
        $data = array();
        $data['work_num'] = I('post.work_num');
        $data['work_title'] = I('post.work_title');
        $data['work_type'] = I('post.work_type');
        $data['positionname'] = I('post.positionName');
        $data['department'] = I('post.department');
        $data['jobnature'] = I('post.jobNature');
        $data['salarymin'] = I('post.salaryMin');
        $data['salarymax'] = I('post.salaryMax');
        $data['workaddress'] = I('post.workAddress');
        $data['workyear'] = I('post.workYear');
        $data['education'] = I('post.education');
        $data['temptation'] = I('post.temptation');
        $data['receiveemail'] = I('post.receiveEmail');
        $data['update_time'] =  date('Y-m-d H:i:s',time());
        $WorkDao = M('Work');
        $result =  $WorkDao->where($map)->save($data);
        if(!empty($result)){
            $this->success("岗位编辑成功","http://127.0.0.1/newfish/index.php/Home/Work/index");
            //$this->ajaxReturn("Work","岗位编辑成功",true);
        }else{
            $this->error("岗位编辑失败");
            //$this->ajaxReturn("Work","岗位编辑失败",false);
        }
    }

    //岗位删除
    public function del(){
        if(empty($_SESSION['userid'])){
            $this->error("请先登录");
            //$this->ajaxReturn("Work","请先登录",false);
        }
        if($_SESSION['role'] != 2 ){
            $this->error("对不起，您没有权限进入该页面");
            //$this->ajaxReturn("Work","对不起，您没有权限进入该页面",false);
        }
        $map = array();
        $map['userid'] = $_SESSION['userid'];
        $map['workid'] = I('workid');
        $WorkDao = M('Work');
        $result = $WorkDao->where($map)->delete();
        if(!empty($result)){
            $this->success("岗位删除成功","http://127.0.0.1/newfish/index.php/Home/Work/index");
            //$this->ajaxReturn("Work","岗位删除成功",true);
        }else{
            $this->error("岗位删除失败");
            //$this->ajaxReturn("Work","岗位删除失败",false);
        }
    }

    //查看职位下求职者的列表
    public function seejob(){
        if(empty($_SESSION['userid'])){
            $this->error("请先登录");
            //$this->ajaxReturn("Work","请先登录",false);
        }
        if($_SESSION['role'] != 2 ){
            $this->error("对不起，您没有权限进入该页面");
            //$this->ajaxReturn("Work","对不起，您没有权限进入该页面",false);
        }
        $sEcho = 0;
        $map = array();
        $map['cb_submit.work_id'] = I('post.work_id');
        $SubmitDao = M('Submit');
        $list = $SubmitDao->where($map)->join('cb_users ON cb_submit.user_id = cb_users.user_id')->select();
        $count = $SubmitDao->where($map)->count();
        $this->dataTable($sEcho,$count,$list);
    }

    //查看应聘者详细信息
    public function seeUserinfo(){
        if(empty($_SESSION['userid'])){
            $this->error("请先登录");
            //$this->ajaxReturn("Work","请先登录",false);
        }
        if($_SESSION['role'] != 2 ){
            $this->error("对不起，您没有权限进入该页面");
            //$this->ajaxReturn("Work","对不起，您没有权限进入该页面",false);
        }
        $map = array();
        $map['cb_submit.work_id'] = I('post.work_id');
        $SubmitDao = M('Submit');
        $list = $SubmitDao->where($map)->join('cb_user on cb_submit.user_id = cb_user.user_id')->select();
        $this->assign('list',$list);
        $this->display();
    }

    //查看应聘者简历信息
    public function seeResumeinfo(){
        if(empty($_SESSION['userid'])){
            $this->error("请先登录");
            //$this->ajaxReturn("Work","请先登录",false);
        }
        if($_SESSION['role'] != 2 ){
            $this->error("对不起，您没有权限进入该页面");
            //$this->ajaxReturn("Work","对不起，您没有权限进入该页面",false);
        }
        $map = array();
        $map['cb_submit.work_id'] = I('post.work_id');
        $SubmitDao = M('Submit');
        $list = $SubmitDao->where($map)->join('cb_user on cb_submit.resume_id = cb_user.resume_id')->select();
        $data = array();
        $data['is_see'] = 1;
        $result = M('Submit')->save($data);//查看简历
        $this->assign('list',$list);
        $this->display();
    }

}