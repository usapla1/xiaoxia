<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="re_1" style="min-width: 500px;height: 300px;text-align: center;border: 1px solid red;">
<h1>快速注册</h1>
<form action="<?php echo U('Register/register');?>" method="POST" >
<label>皮皮账号</label><input type="text" name="user"><br/>
<label>密码</label><input type="password" name="password"><br/>
<label>确认密码</label><input type="password1" name="password1"><br/>
<label>验证码</label><input type="text" name="Verify">
<img alt="验证码" src="<?php echo U('Home/Register/verify_c');?>" title="点击刷新"> <br/>
<input type="checkbox" name="chackbox"><label>已阅读并同意《用户协议》</label><br/>
<input type="submit" value="快速注册">
</form>
</div>
</body>
</html>