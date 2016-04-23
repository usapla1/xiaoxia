<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb"><head>
</script><script type="text/javascript" async="" src="<?php echo C('Base_Url');?>js/conversion.js"></script>
	<script src="<?php echo C('Base_Url');?>js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script>
	<style type="text/css"></style>
<meta content="no-siteapp" http-equiv="Cache-Control">
<link  media="handheld" rel="alternate">
<!-- end 云适配 -->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>浙江新安化工集团网上招聘平台信息系统</title>
<meta content="浙江新安化工集团网上招聘平台信息系统" name="description">
<meta content="浙江新安化工集团网上招聘平台信息系统" name="keywords">
<meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

<!-- <div class="web_root"  style="display:none">http://www.lagou.com</div> -->
<script type="text/javascript">
var ctx = "http://www.lagou.com";
console.log(1);
</script>
<link href="http://www.lagou.com/images/favicon.ico" rel="Shortcut Icon">
<link href="<?php echo C('Base_Url');?>css/style.css" type="text/css" rel="stylesheet">
<link href="<?php echo C('Base_Url');?>css/external.min.css" type="text/css" rel="stylesheet">
<link href="<?php echo C('Base_Url');?>css/popup.css" type="text/css" rel="stylesheet">
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
<link rel="stylesheet" href="<?php echo C('Base_Url');?>css/ui.css"><link rel="stylesheet" href="<?php echo C('Base_Url');?>css/window.css"></head>
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
	    		<li class="current"><a rel="nofollow" href="create.html">个人中心</a></li>
	    	</ul>
        	<dl class="collapsible_menu">
            	<dt>
           			<span>jason&nbsp;</span> 
            		<span class="red dn" id="noticeDot-1"></span>
            		<i></i>
            	</dt>
                <dd><a rel="nofollow" href="Individual.html">我的简历</a></dd>
                <dd><a href="#">我投递的职位 <span id="noticeNo" class="red">(1)</span></a></dd>
                <dd style="display: none;"><a href="accountBind.html">帐号设置</a></dd>
                <dd class="logout" style="display: none;"><a rel="nofollow" href="login.html">退出</a></dd>
            </dl>
        </div>
    </div><!-- end #header -->
    <div id="container">
    	<div class="sidebar">
            <dl class="company_center_aside">
                <dt><h3>个人中心</h3></dt>
                <dd><a href="personal.html">个人信息</a></dd>
                <dd><a href="Individual.html">我的简历</a></dd>
                <dd><a href="Application.html">申请记录</a></dd>
                <dd><a href="feedback.html">人事反馈</a></dd>
            </dl>
            <dl class="company_center_aside">
                <dt><h3>帐号设置</h3></dt>
                <dd><a href="accountBind.html">帐号绑定</a></dd>
                <dd><a class="hover" href="updatePwd.html">修改密码</a></dd>
            </dl>
        </div><!-- end .sidebar -->
<div class="content">
    <dl class="company_center_content">
        <dt>
            <h1><em></em>人事反馈<span>（共<i style="color:#fff;font-style:normal" id="positionNumber"><?php echo ($count); ?></i>个）</span></h1>
        </dt>
        <dd>
            <form id="searchForm">
	            <input type="hidden" value="Publish" name="type">
			    <ul class="reset my_jobs">
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li data-id="149594">
		                <h3><?php echo ($vo["title"]); ?><span>[职位名：<?php echo ($vo["workname"]); ?>]</span></h3>
		                <span class="receivedResumeNo">
							人事查看了您投递的简历,并发出面试邀请
						</span>
						<div class="c9">内容： <?php echo ($vo["content"]); ?></div>
		                <div class="c9">发送时间： <?php echo ($vo["add_time"]); ?></div>
						<div class="links">
							<a class="job_refresh" href="javascript:location.reload()">刷新<span>每个职位7天内只能刷新一次</span></a>
							<a class="job_del" href="http://127.0.0.1/newfish/index.php/Home/User/fbdel/mailsmsid/<?php echo ($vo["mailsmsid"]); ?>">删除</a>
		                </div>
		            </li><?php endforeach; endif; else: echo "" ;endif; ?>
	            </ul>
			</form>
		</dd>
    </dl>
</div><!-- end .content -->
<script src="<?php echo C('Base_Url');?>style/js/job_list.min.js" type="text/javascript"></script>
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

<script src="<?php echo C('Base_Url');?>style/js/core.min.js" type="text/javascript"></script>
<script src="<?php echo C('Base_Url');?>style/js/popup.min.js" type="text/javascript"></script>
<script src="<?php echo C('Base_Url');?>style/js/tongji.js" type="text/javascript"></script>
<!--  -->
<script src="<?php echo C('Base_Url');?>style/js/analytics01.js" type="text/javascript"></script><script type="text/javascript" src="<?php echo C('Base_Url');?>style/js/h.js"></script>
<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body></html>