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
        $user = $_SESSION['username'];
        $this->assign('user',$user);
        $this->assign('lists2',$lists2);
        $this->assign('count',$count);
        $this->display();
    }

    //个人中心
    public function come(){
        if($_SESSION['role'] == 1 ){
            $this->success("欢迎回来",U('User/index'));
        }elseif($_SESSION['role'] == 2){
            $this->success("欢迎回来",U('Work/index'));
        }else{
            $this->success("请先登录",U('Index/index'));
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