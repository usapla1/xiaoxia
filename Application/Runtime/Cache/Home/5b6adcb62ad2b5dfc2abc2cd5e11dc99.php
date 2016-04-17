<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<script id="allmobilize" charset="utf-8" src="<?php echo C('Base_Url');?>js/allmobilize.min.js"></script>
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld"  />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>登录---浙江新安化工集团</title>
<meta property="qc:admins" content="23635710066417756375" />
<meta content="浙江新安化工集团网上招聘平台信息系统" name="description">
<meta content="浙江新安化工集团网上招聘平台信息系统" name="keywords">

<!-- <div class="web_root"  style="display:none">h</div> -->
<script type="text/javascript">
var ctx = "h";
console.log(1);
</script>
<link rel="Shortcut Icon" href="<?php echo C('Base_Url');?>h/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo C('Base_Url');?>css/style.css"/>

<script src="js/jquery.1.10.1.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo C('Base_Url');?>js/jquery.lib.min.js"></script>
<script type="text/javascript" src="<?php echo C('Base_Url');?>js/core.min.js"></script>


<script type="text/javascript">
var youdao_conv_id = 271546;  
</script> 
<script type="text/javascript" src="<?php echo C('Base_Url');?>js/conv.js"></script>
</head>

<body id="login_bg">
	<div class="login_wrapper">
		<div class="login_header">
        	<a href="index.html"><img src="<?php echo C('Base_Url');?>images/logo.png" width="285" height="62" alt="新安招聘" /></a>
        </div>
        
    	<input type="hidden" id="resubmitToken" value="" />		
		 <div class="login_box">
        	<form id="loginForm" action="<?php echo U('Login/login');?>" method="POST">
				<input type="text" id="email" name="email" value="" tabindex="1" placeholder="请输入登录邮箱地址" />
			  	<input type="password" id="password" name="password" tabindex="2" placeholder="请输入密码" />
				<span class="error" style="display:none;" id="beError"></span>
			    <label class="fl" for="remember"><input type="checkbox" id="remember" value="" checked="checked" name="autoLogin" /> 记住我</label>
			    <a href="reset.html" class="fr" target="_blank">忘记密码？</a>

				<input type="submit" class="submitLogin" id="submitLogin" value="登 &nbsp; &nbsp; 录" />
				<!--<a style="color:#fff;" href="index.html" class="submitLogin" title="登 &nbsp; &nbsp; 录"/>登 &nbsp; &nbsp; 录</a>-->
			    <input type="hidden" id="callback" name="callback" value=""/>
                <input type="hidden" id="authType" name="authType" value=""/>
                <input type="hidden" id="signature" name="signature" value=""/>
                <input type="hidden" id="timestamp" name="timestamp" value=""/>
			</form>
			<div class="login_right">
				<div>还没有帐号？</div>
				<a  href="register.html"  class="registor_now">立即注册</a>
			</div>
        </div>
        <div class="login_box_btm"></div>
    </div>

<script type="text/javascript">
$(function(){
	//验证表单
	 	$("#loginForm").validate({
	 		/* onkeyup: false,
	    	focusCleanup:true, */
	        rules: {
	    	   	email: {
	    	    	required: true,
	    	    	email: true
	    	   	},
	    	   	password: {
	    	    	required: true
	    	   	}
	    	},
	    	messages: {
	    	   	email: {
	    	    	required: "请输入登录邮箱地址",
	    	    	email: "请输入有效的邮箱地址，如：vivi@lagou.com"
	    	   	},
	    	   	password: {
	    	    	required: "请输入密码"
	    	   	}
	    	},
		});
})
</script>
</body>
</html>