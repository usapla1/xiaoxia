<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb"><head>
</script><script type="text/javascript" async="" src="<?php echo C('Base_Url');?>js/conversion.js"></script>
	<script src="<?php echo C('Base_Url');?>js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script><style type="text/css"></style>
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
<link rel="stylesheet" href=" css/ui.css"><link rel="stylesheet" href="<?php echo C('Base_Url');?>css/window.css"></head>
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
                <dd style="display: none;"><a href="accountBind.html">帐号设置</a></dd>
                <dd class="logout" style="display: none;"><a rel="nofollow" href="login.html">退出</a></dd>
            </dl>
        </div>
    </div><!-- end #header -->
    <div id="container">
            <div class="content">
            	<dl class="company_center_content">
                    <dt>
                        <h1>
                            <em></em>
                            <?php echo ($list["username"]); ?>简历
                        </h1>
                    </dt>
                    <dd>
                    	<!--表单提交简历-->
                    	<form action="aaa" method="post" id="jobForm">
                            <input type="hidden" value="" name="id">
                            <table class="btm">
                            	<tbody>
                            		<tr>
                                	<td>姓名：</td>
                                	<td id="cname">
										<?php echo ($list["username"]); ?>
                                    </td>
                                </tr>
                            	<tr>
                                	<td>性别：</td>
                                	<td id="csex">
										<?php echo ($list["sex"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                	<td>民族：</td>
                                	<td id="cnation">
										<?php echo ($list["mingzhu"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                	<td>婚否:</td>
                                	<td id="cmarried">
										<?php echo ($list["hunyin"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                	<td>政治面貌:</td>
                                	<td id="clands">
										<?php echo ($list["shenfen"]); ?>
                                    </td>
                                </tr>
                            	<tr>
                                	<td>籍贯:</td>
                                	<td id="ccity">
										<?php echo ($list["jiguan"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                	<td>现居地：</td>
                                	<td id="cadd">
										<?php echo ($list["adress"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                	<td>手机号码：</td>
                                	<td id="cphone">
										<?php echo ($list["telphone"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                	<td>邮箱：</td>
                                	<td id="email">
										<?php echo ($list["email"]); ?>
                                    </td>
                                </tr>
                            </tbody></table>
                            
                            <table class="btm">
                            	<tbody>
                            	<tr>
                                	<td>教育经历：</td>
                                	<td id="ceducation">
										<?php echo ($list["edu"]); ?>
                                    </td>
                                </tr>
                            	<tr>
                                	<td>获奖情况：</td>
                                	<td id="chonors">
										<?php echo ($list["reward"]); ?>
                                    </td>
                                </tr>
                            </tbody></table>

                            <table class="btm">
                            	<tbody><tr>
                                	<td width="100">工作经历：</td>
                                	<td id="cexp">
										<?php echo ($list["work"]); ?>
                                    </td>
                                </tr>
                            	<tr>
                                	
                                	<td>掌握技能：</td>
                                	<td id="cskill">
										<?php echo ($list["skill"]); ?>
                                    </td>
                                </tr>
                            </tbody></table>
                           
                            <table class="btm">
                            	<tbody><tr>
                                	<td>自我评价：</td>
                                	<td>
										<?php echo ($list["selftalk"]); ?>
                                    </td>
                                </tr>
                            	<tr>
                                	<td>职业规划：</td>
                                	<td>
										<?php echo ($list["hopework"]); ?>
                                    </td>
                                </tr>
                            </tbody></table>
                            
                            <table>
                            	<tbody><tr>
                                	<td colspan="2">
                                    	接收简历邮箱： <span id="receiveEmailVal"><?php echo ($list["email"]); ?></span>
                                    </td>
                                </tr>
                                <tr>
                                	<td width="25"></td>
                                </tr>
                                <tr>
                                	<td colspan="2">
                                    	<!--<input type="button" value="编辑" id="formSubmit" class="btn_32">-->
                                    </td>
                                </tr>
                         	</tbody>
                        </table>
                        </form>
                    </dd>
                </dl>
            </div><!-- end .content -->
			<div class="clear"></div>
			<input type="hidden" value="c29d4a7c35314180bf3be5eb3f00048f" id="resubmitToken">
	    	<a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
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

<script src=" js/core.min.js" type="text/javascript"></script>
<script src=" js/popup.min.js" type="text/javascript"></script>

<!--  -->


<div id="cboxOverlay" style="display: none;"></div>
<div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
	<div id="cboxWrapper">
		<div>
			<div id="cboxTopLeft" style="float: left;"></div>
			<div id="cboxTopCenter" style="float: left;"></div>
			<div id="cboxTopRight" style="float: left;"></div>
		</div>
		<div style="clear: left;">
			<div id="cboxMiddleLeft" style="float: left;"></div>
			<div id="cboxContent" style="float: left;">
				<div id="cboxTitle" style="float: left;"></div>
				<div id="cboxCurrent" style="float: left;"></div>
				<button type="button" id="cboxPrevious"></button>
				<button type="button" id="cboxNext"></button>
				<button id="cboxSlideshow"></button>
				<div id="cboxLoadingOverlay" style="float: left;"></div>
				<div id="cboxLoadingGraphic" style="float: left;"></div>
			</div>
			<div id="cboxMiddleRight" style="float: left;"></div>
		</div>
		<div style="clear: left;">
			<div id="cboxBottomLeft" style="float: left;"></div>
			<div id="cboxBottomCenter" style="float: left;"></div>
			<div id="cboxBottomRight" style="float: left;"></div>
		</div>
	</div>
	<div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div>
</div>
</body>
</html>