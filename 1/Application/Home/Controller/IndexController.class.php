<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $Users = M('users');
        $Works = M('work');
        $Resumes = M('resume');
        $lists1 = $Users->orderBy('')->select();
        $lists2 = $Works->select();
        $lists3 = $Resumes->select();
        $lists4 = $Works->select();
        $lists=array();
        $lists['hot_user'] = $lists1;
        $lists['hot_work'] = $lists2;
        $lists['new_resume'] = $lists3;
        $lists['new_work'] = $lists4;
        $this->ajaxReturn($lists);
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