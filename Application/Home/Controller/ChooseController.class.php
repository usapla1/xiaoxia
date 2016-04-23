<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-03-31
 * Time: 23:15
 */
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
use Home\Common;
use Home\Controller\Base;

class ChooseController extends BaseController{
    //选择简历列表
    public function index()
    {
       if(empty($_SESSION['user_id'])){
            $this->ajaxReturn("Work","请先登录",false);
        }
        if($_SESSION['role'] !== 2 ){
            $this->ajaxReturn("Work","对不起，您没有权限进入该页面",false);
        }
        $ResumeDao = M('Resume');
        $list = $ResumeDao->order('cb_resume.creat_time','DESC')->select();
        $this->assign('list', $list);
        $this->display();
    }
    //选择简历
    public function choose(){
        if(empty($_SESSION['user_id'])){
            $this->ajaxReturn("Work","请先登录",false);
        }
        if($_SESSION['role'] !== 2 ){
            $this->ajaxReturn("Work","对不起，您没有权限进入该页面",false);
        }
        $type = I('post.type');
        $value = I('post.value');
        $ResumeDao = M('Resume');
        if($type ==  'sex'){
            $map = array();
            $map['sex'] =$value;
            $list = $ResumeDao->where($map)->select();
        }elseif($type ==  'degree'){
            $map = array();
            $map['sex'] =$value;
            $list = $ResumeDao->where($map)->select();
        }elseif($type ==  'edu'){
            $map = array();
            $map['sex'] =$value;
            $list = $ResumeDao->where($map)->select();
        }
        $this->assign('list', $list);
        $this->display();
    }

    //
    /**简历汇总  导出简历
     *
     * 导出Excel
     */
    function expUser(){//导出Excel
        $xlsName  = "User";
        $xlsCell  = array(
            array('resumeid','账号序列'),
            array('userid','userid'),
            array('username','username'),
            array('sex','性别'),
            array('mingzhu','mingzhu'),
            array('hunyin','hunyin'),
            array('shenfen','shenfen'),
            array('jiguan','jiguan'),
            array('adress','adress'),
            array('telphone','telphone'),
            array('email','email'),
            array('edu','edu'),
            array('reward','reward')
        );
        $xlsModel = M('Resume');

        $xlsData  = $xlsModel->Field('resumeid,userid,username,sex,mingzhu,hunyin,shenfen,jiguan,adress,telphone,email,edu,reward')->select();

        foreach ($xlsData as $k => $v)
        {
            $xlsData[$k]['sex']=$v['sex']==1?'男':'女';
        }
        exportExcel($xlsName,$xlsCell,$xlsData);
    }
}