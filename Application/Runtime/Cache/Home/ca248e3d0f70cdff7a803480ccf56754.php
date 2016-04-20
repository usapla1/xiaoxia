<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns:wb="http://open.weibo.com/wb">
 <head> 
  <script type="text/javascript" async="" src="<?php echo C('Base_Url');?>js/conversion.js"></script>
  <script src="<?php echo C('Base_Url');?>js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script>
  <style type="text/css"></style> 
  <meta content="no-siteapp" http-equiv="Cache-Control" /> 
  <link media="handheld" rel="alternate" /> 
  <!-- end 云适配 --> 
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" /> 
  <title>浙江新安化工集团网上招聘平台信息系统</title> 
  <meta property="qc:admins" content="23635710066417756375" /> 
  <meta content="浙江新安化工集团网上招聘平台信息系统" name="description" /> 
  <meta content="浙江新安化工集团网上招聘平台信息系统" name="keywords" /> 
  <meta name="baidu-site-verification" content="QIQ6KC1oZ6" /> 
  <!-- <div class="web_root"  style="display:none">http://www.lagou.com</div> --> 
  <script type="text/javascript">
var ctx = "http://www.lagou.com";
console.log(1);
</script> 
  <link href="http://www.lagou.com/images/favicon.ico" rel="Shortcut Icon" /> 
  <link href="<?php echo C('Base_Url');?>css/style.css" type="text/css" rel="stylesheet" />
  <link href="<?php echo C('Base_Url');?>css/external.min.css" type="text/css" rel="stylesheet" />
  <link href="<?php echo C('Base_Url');?>css/popup.css" type="text/css" rel="stylesheet" />
  <script type="text/javascript" src="<?php echo C('Base_Url');?>js/jquery.1.10.1.min.js"></script>
  <script src="<?php echo C('Base_Url');?>js/jquery.lib.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?php echo C('Base_Url');?>js/ajaxfileupload.js"></script>
  <script src="<?php echo C('Base_Url');?>js/additional-methods.js" type="text/javascript"></script>
  <!--[if lte IE 8]>
    <script type="text/javascript" src="<?php echo C('Base_Url');?>js/excanvas.js"></script>
<![endif]--> 
  <script type="text/javascript">
var youdao_conv_id = 271546; 
</script> 
  <script src="<?php echo C('Base_Url');?>js/conv.js" type="text/javascript"></script>
  <script src="<?php echo C('Base_Url');?>js/ajaxCross.json" charset="UTF-8"></script>
  <style type="text/css">

</style> 
  <link rel="stylesheet" href="<?php echo C('Base_Url');?>css/ui.css" />
  <link rel="stylesheet" href="<?php echo C('Base_Url');?>css/window.css" />
 </head> 
 <body> 
  <div id="body"> 
   <div id="header"> 
    <div class="wrapper"> 
     <a class="logo" href="index.html"> <img width="229" height="43" alt="新安招聘" src="<?php echo C('Base_Url');?>images/logo.png" /> </a>
     <ul id="navheader" class="reset"> 
      <li><a href="index.html">首页</a></li> 
      <li><a href="enterprise.html">公司</a></li> 
      <li class="current"><a rel="nofollow" href="create.html">职位管理</a></li> 
     </ul> 
     <dl class="collapsible_menu"> 
      <dt> 
       <span>jason&nbsp;</span> 
       <span class="red dn" id="noticeDot-1"></span> 
       <i></i> 
      </dt> 
      <dd style="display: none;">
       <a href="positions.html">我发布的职位</a>
      </dd> 
      <dd style="display: none;">
       <a href="positions.html">我收到的简历</a>
      </dd> 
      <dd class="btm" style="display: none;">
       <a href="enterprise.html">我的公司主页</a>
      </dd> 
      <dd style="display: none;">
       <a href="index.html">我要找工作</a>
      </dd> 
      <dd style="display: none;">
       <a href="accountBind.html">帐号设置</a>
      </dd> 
      <dd class="logout" style="display: none;">
       <a rel="nofollow" href="login.html">退出</a>
      </dd> 
     </dl> 
    </div> 
   </div>
   <!-- end #header --> 
   <div id="container"> 
    <div class="sidebar"> 
     <a class="btn_create" href="create.html">发布新职位</a> 
     <dl class="company_center_aside"> 
      <dt>
       职位管理
      </dt> 
      <dd> 
       <a href="positionlist.html">职位列表</a> 
      </dd> 
      <dd> 
       <a href="resumescreening.html">简历筛选</a> 
      </dd> 
      <dd> 
       <a href="interviewnotice.html">面试通知</a> 
      </dd>
     </dl> 
    </div>
    <!-- end .sidebar --> 
    <div class="content">
    <dl class="company_center_content">
        <dt>
            <h1><em></em>面试通知 <span>（共<i style="color:#fff;font-style:normal" id="positionNumber">1</i>个）</span></h1>
        </dt>
        <dd>
        <form id="searchForm" action="<?php echo U('Mail/add');?>" method="POST">
          <table> 
            <tbody>
            <tr>
                <td colspan="2"> 职位名称 <input type="text" value="" id="mailContent" name="workname" />
            </tr>
              <tr>
                <td colspan="2"> 接受邀请邮箱 <input type="text" value="" id="invitEmail" name="invitEmail" />
              </tr>
              <tr>
                  <td colspan="2"> 用户姓名 <input type="text" value="" id="mailContent" name="username" />
              </tr>
              <tr>
                  <td colspan="2"> 标题 <input type="text" value="" id="mailContent" name="title" />
              </tr>
              <tr> 
                <td colspan="2"> 内容 <input type="text" value="" id="mailContent" name="content" />
              </tr>
              <tr>
                <td colspan="2"><input type="submit" value="发送" id="formSubmit" class="btn_32" /> </td>
              </tr> 
            </tbody>
          </table>     
        </form>
      </dd>
    </dl>
</div><!-- end .content -->
<script src="<?php echo C('Base_Url');?>js/job_list.min.js" type="text/javascript"></script>
      <div class="clear"></div>
        <a rel="nofollow" title="回到顶部" id="backtop"></a>
      </div><!-- end #container -->
  </div><!-- end #body -->
  <div id="footer">
    <div class="wrapper">
      <a href="#" target="_blank" rel="nofollow">联系我们</a>
      <a href="#" target="_blank">互联网公司导航</a>
      <a href="#" target="_blank" rel="nofollow">新安微博</a>
      <a class="footer_qr" href="#" rel="nofollow">新安微信<i></i></a>
      <div class="copyright">&copy;2015-2016 Xinan <a target="_blank" href="#">京ICP备11111111号-1</a></div>
    </div>
  </div>

<script src="<?php echo C('Base_Url');?>js/core.min.js" type="text/javascript"></script>
<script src="<?php echo C('Base_Url');?>js/popup.min.js" type="text/javascript"></script>
<script src="<?php echo C('Base_Url');?>js/tongji.js" type="text/javascript"></script>
<!--  -->
<script src="<?php echo C('Base_Url');?>js/analytics01.js" type="text/javascript"></script><script type="text/javascript" src="js/h.js"></script>
<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>