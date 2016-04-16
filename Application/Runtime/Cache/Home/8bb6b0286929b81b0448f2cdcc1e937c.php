<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<script id="allmobilize" charset="utf-8" src="<?php echo C('Base_Url');?>js/allmobilize.min.js"></script>
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<link rel="alternate" media="handheld"  />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>注册--浙江新安化工集团网上招聘平台信息系统</title>
	<meta property="qc:admins" content="23635710066417756375" />
	<meta content="浙江新安化工集团网上招聘平台信息系统" name="description">
	<meta content="浙江新安化工集团网上招聘平台信息系统" name="keywords">

	<!-- <div class="web_root"  style="display:none">h</div> -->
	<script type="text/javascript">
		var ctx = "h";
		console.log(1);
	</script>
	<link rel="Shortcut Icon" href="<?php echo C('Base_Url');?>h/images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo C('Base_Url');?>css/style.css" />

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

	<input type="hidden" id="resubmitToken" value="9b207beb1e014a93bc852b7ba450db27" />
	<div class="login_box">
		<form id="loginForm" action="<?php echo U('Register/register');?>" method="post">
			<input type="text" id="email" name="user" tabindex="1" placeholder="请输入常用邮箱地址" />
			<span class="error" style="display:none;" id="beError"></span>
			<input type="text" id="name" name="username" placeholder="请输入自己的真实姓名" />
			<input type="text" id="telphone" name="telphone" placeholder="请输入手机号码" />
			<input type="date" id="user_date" name="user_date"  placeholder="请输入出生年月"/>
			<input type="password" id="password" name="password" tabindex="2" placeholder="请输入密码" />
			<input type="password" id="password1" name="password1" tabindex="3" placeholder="请确认密码" />
			<input type="text" name="Verify" id="verify" tabindex="4" placeholder="请输入验证码">
			<img alt="验证码" src="<?php echo U('Home/Register/verify_c',array());?>" title="点击刷新"> <br/>
			<label class="fl registerJianJu" for="checkbox">
				<input type="checkbox" id="checkbox" name="checkbox" checked  class="checkbox valid" />我已阅读并同意<a href="h/privacy.html" target="_blank">《用户协议》</a>
			</label>
			<input type="submit" id="submitLogin" value="注 &nbsp; &nbsp; 册" />
			<input type = "hidden" name = "role" value = "1">
			<input type="hidden" id="callback" name="callback" value=""/>
			<input type="hidden" id="authType" name="authType" value=""/>
			<input type="hidden" id="signature" name="signature" value=""/>
			<input type="hidden" id="timestamp" name="timestamp" value=""/>
		</form>
		<div class="login_right">
			<div>已有帐号</div>
			<a  href="login.html"  class="registor_now">直接登录</a>
			<!-- <div class="login_others">使用以下帐号直接登录:</div>
            <a  href="h/ologin/auth/sina.html"  target="_blank" class="icon_wb" title="使用新浪微博帐号登录"></a>
               <a  href="h/ologin/auth/qq.html"  class="icon_qq" target="_blank" title="使用腾讯QQ帐号登录" ></a> -->
		</div>
	</div>
	<div class="login_box_btm"></div>
</div>

<script type="text/javascript">

	$(document).ready(function(e) {
		$('.register_radio li input').click(function(e){
			$(this).parent('li').addClass('current').append('<em></em>').siblings().removeClass('current').find('em').remove();
		});

		$('#email').focus(function(){
			$('#beError').hide();
		});
		//验证表单
		$("#loginForm").validate({
			rules: {
				type:{
					required: true
				},
				email: {
					required: true,
					email: true
				},
				password: {
					required: true,
					rangelength: [6,16]
				},
				checkbox:{required:true}
			},
			messages: {
				type:{
					required:"请选择使用拉勾的目的"
				},
				email: {
					required: "请输入常用邮箱地址",
					email: "请输入有效的邮箱地址，如：vivi@lagou.com"
				},
				password: {
					required: "请输入密码",
					rangelength: "请输入6-16位密码，字母区分大小写"
				},
				checkbox: {
					required: "请接受拉勾用户协议"
				}
			},
			errorPlacement:function(label, element){/*
			 if(element.attr("type") == "radio"){
			 label.insertAfter($(element).parents('ul')).css('marginTop','-20px');
			 }else if(element.attr("type") == "checkbox"){
			 label.inserresult.contenttAfter($(element).parent()).css('clear','left');
			 }else{
			 label.insertAfter(element);
			 } */
				/*modify nancy*/
				if(element.attr("type") == "radio"){
					label.insertAfter($(element).parents('ul')).css('marginTop','-20px');
				}else if(element.attr("type") == "checkbox"){
					label.insertAfter($(element).parent()).css('clear','left');
				}else{
					label.insertAfter(element);
				};
			},
			submitHandler:function(form){
				var type =$('input[type="radio"]:checked',form).val();
				var email =$('#email').val();
				var password =$('#password').val();
				var resubmitToken = $('#resubmitToken').val();

				var callback = $('#callback').val();
				var authType = $('#authType').val();
				var signature = $('#signature').val();
				var timestamp = $('#timestamp').val();

				$(form).find(":submit").attr("disabled", true);

				$.ajax({
					type:'POST',
					data: {email:email,password:password,type:type,resubmitToken:resubmitToken, callback:callback, authType:authType, signature:signature, timestamp:timestamp},
					url:ctx+'/user/register.json',
					dataType:'json'
				}).done(function(result) {
					$('#resubmitToken').val(result.resubmitToken);
					if(result.success){
						window.location.href=result.content;
					}else{
						$('#beError').text(result.msg).show();
					}
					$(form).find(":submit").attr("disabled", false);
				});
			}
		});
	});
</script>
</body>
</html>