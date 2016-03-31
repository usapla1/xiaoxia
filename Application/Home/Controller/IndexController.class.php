<?php
namespace Home\Controller;
use Think\Controller;
use Home\Controller\Base;

class IndexController extends BaseController{
    public function index(){
        $Users = M('users');
        $Works = M('work');
        $lists1 = $Users->select();
        $lists2 = $Works->select();
        $lists=array();
        $lists[] = $lists1;
        $lists[] = $lists2;
        $this->ajaxReturn($lists,0,array());
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