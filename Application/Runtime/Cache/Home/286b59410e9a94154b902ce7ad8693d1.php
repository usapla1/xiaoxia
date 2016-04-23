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
    <a href="index.html" class="logo">
                <img src="<?php echo C('Base_Url');?>images/logo.png" width="229" height="80" alt="新安招聘" />
            </a>
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
              <h1>
                <em>
                </em>
                简历筛选
                <span>
                  （共1份）
                </span>
              </h1>
              <a href="<?php echo U('Choose/expUser');?>">导出excel</a>
            </dt>
            <dd>
              <form action="canInterviewResumes.html" method="get" id="filterForm">
                <div class="filter_actions">
                  <label class="checkbox">
                    <input type="checkbox">
                    <i>
                    </i>
                  </label>
                  <span>
                    全选
                  </span>
                  <a id="jlsearch" href="javascript:;">
                    筛选
                  </a>
                  <div id="filter_btn" class="">
                    筛选简历
                    <em class="">
                    </em>
                  </div>
                </div>
                <!-- end .filter_actions -->
                <div class="filter_options  dn " style="display: none;">
                  <dl>
                    <dt>
                      工作经验：
                    </dt>
                    <dd>
                      <a rel="-1" class="current" href="javascript:;">
                        不限
                      </a>
                      <a rel="1" href="javascript:;">
                        应届毕业生
                      </a>
                      <a rel="2" href="javascript:;">
                        一年以下
                      </a>
                      <a rel="3" href="javascript:;">
                        1-3年
                      </a>
                      <a rel="4" href="javascript:;">
                        3-5年
                      </a>
                      <a rel="5" href="javascript:;">
                        5-10年
                      </a>
                      <a rel="6" href="javascript:;">
                        10年以上
                      </a>
                      <input type="hidden" value="-1" name="workExp">
                    </dd>
                  </dl>
                  <dl>
                    <dt>
                      最低学历：
                    </dt>
                    <dd>
                      <a rel="-1" class="current" href="javascript:;">
                        不限
                      </a>
                      <a rel="1" href="javascript:;">
                        大专及以上
                      </a>
                      <a rel="2" href="javascript:;">
                        本科及以上
                      </a>
                      <a rel="3" href="javascript:;">
                        硕士及以上
                      </a>
                      <a rel="4" href="javascript:;">
                        博士及以上
                      </a>
                      <input type="hidden" value="-1" name="eduExp">
                    </dd>
                  </dl>
                  <input type="hidden" value="0" name="filterStatus" id="filterStatus">
                  <input type="hidden" value="" name="positionId" id="positionId">
                </div>
                <!-- end .filter_options -->
                <ul class="reset resumeLists">
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li data-id="1686182" class="onlineResume">
                    <label class="checkbox">
                      <input type="checkbox">
                      <i>
                      </i>
                    </label>
                    <div class="resumeShow">
                      <a title="预览在线简历" target="_blank" class="resumeImg" href="resumeView.html?deliverId=1686182">
                      </a>
                      <div class="resumeIntro">
                        <h3 class="unread">
                          <a target="_blank" title="预览<?php echo ($vo["username"]); ?>的简历" href="#">
                              <?php echo ($vo["username"]); ?>的简历
                          </a>
                          <em>
                          </em>
                        </h3>
                        <div>
                            <?php echo ($vo["username"]); ?> /<?php echo ($vo["sex"]); ?> / <?php echo ($vo["edu"]); ?> / <?php echo ($vo["work"]); ?> 年 / <?php echo ($vo["adress"]); ?>
                          <br>
                            <?php echo ($vo["hopework"]); ?>
                        </div>
                        <div class="jdpublisher">
                          <span>
                            应聘职位：
                            <a title="随便写" target="_blank" href="#">
                                <?php echo ($vo["hopework"]); ?>
                            </a>
                          </span>
                        </div>
                      </div>
                      <div class="links">
                        <a class="resume_notice" href="interviewnotice.html?email=888888888@qq.com&data-positionid=149594">
                          通知面试
                        </a>
                      </div>
                    </div>
                    <div class="contactInfo">
                      <span class="c9">
                        电话：
                      </span>
                        <?php echo ($vo["telphone"]); ?> &nbsp;&nbsp;&nbsp;
                      <span class="c9">
                        邮箱：
                      </span>
                      <a href="mailto:888888888@qq.com">
                          <?php echo ($vo["email"]); ?>
                      </a>
                    </div>
                  </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <!-- end .resumeLists -->
              </form>
            </dd>
          </dl>
          <!-- end .company_center_content -->
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
<script src="<?php echo C('Base_Url');?>js/analytics01.js" type="text/javascript"></script><script type="text/javascript" src="<?php echo C('Base_Url');?>js/h.js"></script>
<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>