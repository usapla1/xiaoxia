<?php
namespace Home\Controller;
use Think\Controller;
use Home\Controller\Base;

class IndexController extends BaseController{
    //主页
    public function index(){
        $Works = M('Work');
        $lists2 = $Works->select();
        $count = $Works->count();
        $user = $_SESSION['username'];
        $Seek = M('Seek');
        $list = array();
        foreach($lists2 as $key=>$value){
            $map = array();
            $map['workid'] =$value['workid'];
            $count = $Seek->where($map)->count();
            $value['count'] = $count;
            $list[] = $value;
        }
        $lists2 = $list;
        $this->assign('user',$user);
        $this->assign('count',$count);
        $this->assign('lists2',$lists2);
        $this->display();
    }
    //搜索结果
    public function search(){
        $map = array();
        $work_title = I('work_title');
        $map["work_title"] = array('like','%'.$work_title.'%');
        $Works = M('Work');
        $lists2 = $Works->where($map)->select();
        $count = $Works->where($map)->count();
        $user = $_SESSION['username'];
        $this->assign('user',$user);
        $this->assign('lists2',$lists2);
        $this->assign('count',$count);
        $this->display();
    }

    //投递简历
    public function submitResume(){
        if(empty($_SESSION['user_id'])){
            $this->ajaxReturn("Index","请先登录",false);
        }
        if($_SESSION['role'] !== 1 ){
            $this->ajaxReturn("Index","对不起，您不是求职者",false);
        }
        $map = array();
        $map['user_id'] = $_SESSION['user_id'];
        $ResumeDao = M('Resume');
        $result1 = $ResumeDao->where($map)->find();
        $countRe = $ResumeDao->where($map)->count();
        if($countRe>=2){
            $this->ajaxReturn("Index","你的简历过多，请联系管理员删除",false);
        }
        $data = array();
        $data['work_id'] = I('post.work_id');
        $data['user_id'] = $_SESSION['user_id'];
        $data['resume_id'] = $result1['resume_id'];
        $data['is_see'] = 0;
        $result2 = M('Submit')->add($data);//查看简历

        if(!empty($result2)){
            $this->ajaxReturn("Index","投递成功",true);
        }else{
            $this->ajaxReturn("Index","无法向该岗位投递简历",false);
        }
    }

    //退出系统
    public function come(){
        if($_SESSION['role'] == 1 ){
            $this->success("欢迎回来","http://127.0.0.1/newfish/index.php/Home/User/index");
        }elseif($_SESSION['role'] == 2){
            $this->success("欢迎回来","http://127.0.0.1/newfish/index.php/Home/Work/index");
        }else{
            $this->success("请先登录","http://127.0.0.1/newfish/index.php/Home/Index/index");
        }

    }

    //退出系统
    public function logout(){
        session_start();
        session_destroy();
        $this->success("已经成功退出，请关闭管理页面","http://127.0.0.1/newfish/index.php");
    }
    /**
     * 返回给 DataTable 的接口
     * @param int $sEcho
     * @param int $count
     * @param array $list
     */
    protected function dataTable($sEcho,$count,$list,$extra=''){
        $data = array();
        $data['sEcho'] = intval($sEcho);
        $data['iTotalRecords'] = intval($count);
        $data['iTotalDisplayRecords'] = intval($count);
        if(!empty($list)){
            $data['Data'] = $list;
        }else{
            $data['Data'] = array();
        }
        $data['extra'] = trim($extra);
        echo json_encode($data);exit;
    }

    /**
     * 简易输出
     * @param string/array $data
     */
    private function output($data){
        header("Content-Type:text/html; charset=utf-8");
        if(is_array($data)){
            echo json_encode($data);exit;
        }else{
            echo $data;exit;
        }
    }
}