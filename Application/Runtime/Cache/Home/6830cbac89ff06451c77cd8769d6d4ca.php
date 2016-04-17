<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb"><head>
    </script><script type="text/javascript" async="" src="<?php echo C('Base_Url');?>js/conversion.js"></script>
    <script src="<?php echo C('Base_Url');?>js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script>
    <style type="text/css"></style>
    <meta content="no-siteapp" http-equiv="Cache-Control">
    <link  media="handheld" rel="alternate">
    <!-- end 云适配 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>浙江新安化工集团网上招聘平台信息系统</title>
    <meta property="qc:admins" content="23635710066417756375" />
    <meta content="浙江新安化工集团网上招聘平台信息系统" name="description">
    <meta content="浙江新安化工集团网上招聘平台信息系统" name="keywords">
    <meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

    <!-- <div class="web_root"  style="display:none">h</div> -->
    <script type="text/javascript">
        var ctx = "h";
        console.log(1);
    </script>
    <link href="<?php echo C('Base_Url');?>h/images/favicon.ico" rel="Shortcut Icon">
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
</head>
<body>
<div id="body">
    <div id="header">
        <div class="wrapper">
            <a class="logo" href="h/">
                <img width="229" height="43" alt="新安招聘" src="<?php echo C('Base_Url');?>images/logo.png">
            </a>
            <ul id="navheader" class="reset">
                <li><a href="index.html">首页</a></li>
                <li><a href="enterprise.html">公司</a></li>
                <li class="current"><a rel="nofollow" href="create.html">个人中心</a></li>
            </ul>
            <dl class="collapsible_menu">
                <dt>
                    <span><?php echo ($list["username"]); ?>&nbsp;</span>
                    <span class="red dn" id="noticeDot-1"></span>
                    <i></i>
                </dt>
                <dd style="display: none;"><a href="index.html">我要找工作</a></dd>
                <dd style="display: none;"><a href="accountBind.html">帐号设置</a></dd>
                <dd class="logout" style="display: none;"><a rel="nofollow" href="login.html">退出</a></dd>
            </dl>
        </div>
    </div><!-- end #header -->
    <div id="container">
        <div class="sidebar">
            <dl class="company_center_aside">
                <dt><h3>个人中心</h3></dt>
                <dd><a href="http://127.0.0.1/newfish/index.php/Home/User/index">个人信息</a></dd>
                <dd><a href="http://127.0.0.1/newfish/index.php/Home/Resume/index">我的简历</a></dd>
                <dd><a href="Application.html">申请记录</a></dd>
                <dd><a href="feedback.html">人事反馈</a></dd>
            </dl>
            <dl class="company_center_aside">
                <dt><h3>帐号设置</h3></dt>
                <dd><a href="accountBind.html">帐号绑定</a></dd>
                <dd><a class="hover" href="updatePwd.html">修改密码</a></dd>
            </dl>
        </div><!-- end .sidebar -->
        <input type="hidden" id="hasSidebar" value="1">
        <div class="user_bindContent">
            <dl class="c_section">
                <dt>
                <h2><em></em>个人信息</h2>
                </dt>
                <dd id="pad">
                    <ul class="user_noModify">
                        <li>用户名：<span><?php echo ($list["username"]); ?></span> </li>
                        <li>邮箱地址：<span><?php echo ($list["email"]); ?></span> </li>
                        <li>手机号码：<span><?php echo ($list["telphone"]); ?></span> </li>
                        <li>出生日期：<span><?php echo ($list["userdata"]); ?></span> </li>
                        <li>登录密码：<span><?php echo ($list["repassword"]); ?></span>    <a href="updatePwd.html" alt="修改密码">修改密码</a> </li>
                    </ul>
                </dd>
            </dl>
            <input type="hidden" value="" id="s">
            <input type="hidden" value="" id="oauthid">
        </div>
        <!------------------------------------- 弹窗lightbox ----------------------------------------->
        <div style="display:none;">
            <!-- 【情况1：第三方首次登录绑定自有帐号】 帐号绑定 : 帐号绑定成功后，未保留的帐号信息将不可恢复 -->
            <div style="overflow:auto;" class="popup " id="confirmBind1">
                <input type="hidden" id="oldAccountSecondConfirm" value="1">
                <div class="user_bindSuccecc">点击“确认绑定”后，您<span>未选择的帐号信息</span> 将被彻底删除，包括： </div>
                <div class="user_noRecoverInfos">
                    <p class="noRecoverInfosContent">简历信息、投递记录、发布的职位、收到的简历</p>
                </div>
                <div class="user_bindBtn"><a id="user_confirmBind1" class="user_confirm click" href="javascript:;">确认绑定</a>
                    <a class="user_backReplace" href="javascript:;">返回修改</a></div>
            </div><!--/#confirmUnbind-->

            <!-- 【情况2：自有帐号登录绑定第三方】 帐号绑定 : 帐号绑定成功后，未保留的帐号信息将不可恢复 -->
            <div style="overflow:auto;" class="popup " id="confirmBind2">
                <div class="user_bindSuccecc">点击“确认绑定”后，您<span>未选择的帐号信息</span> 将被彻底删除，包括：</div>
                <div class="user_noRecoverInfos">
                    <!-- <div class="noRecoverInfosTitle">不可恢复信息包括:</div> -->
                    <p class="noRecoverInfosContent">简历信息、投递记录、发布的职位、收到的简历</p>
                </div>
                <div class="user_bindBtn"><a id="user_confirmBind2" class="user_confirm click" href="javascript:;">确认绑定</a>
                    <a class="user_backReplace" href="javascript:;">返回修改</a></div>
            </div><!--/#confirmUnbind-->
            <!-- 【情况3：第三方首次登录绑定自有帐号 新帐号时点击二次确认按钮】  -->
            <div style="overflow:auto;" class="popup " id="confirmBind3">
                <input type="hidden" id="newAccountSecondConfirm" value="3">
                <div class="user_bindSuccecc">点击“确认绑定”后，您<span>未选择的帐号信息</span> 将被彻底删除，包括： </div>
                <div class="user_noRecoverInfos">
                    <p class="noRecoverInfosContent">简历信息、投递记录、发布的职位、收到的简历</p>
                </div>
                <div class="user_bindBtn"><a id="newAccount_confirmBind1" class="user_confirm click" href="javascript:;">确认绑定</a>
                    <a class="user_backReplace" href="javascript:;">返回修改</a></div>
            </div><!--/#confirmUnbind-->

            <!-- 帐号绑定 : 绑定时发现需要绑定的帐号已经绑定了其他的帐号时提示  -->
            <div style="overflow:auto;" class="popup" id="bindTips">
                <table>
                    <tbody><tr>
                        <td>
                            <h3 id="user_hasBindAccount">
                            </h3>
                            <div class="f18">你可以：</div>
                            <ul class="user_canOperatioin">
                                <li>1、重新换一个<span id="accountBindType"></span>帐号进行绑定</li>
                                <li>2、退出当前帐号，登录<span id="user_loginCurrentAccount"></span>，进入“帐号设置”解除绑定</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <a id="user_confirmBindTips" class="btn" href="javascript:;"><!-- 换个邮箱绑定 --></a>
                            <a class="cancel" href="login.html">退出当前帐号</a>
                        </td>
                    </tr>
                    </tbody></table>
            </div><!--/#bindTips-->

            <!--【已有帐号时候】 帐号绑定 : 绑定时发现需要需要绑定的帐号已经存在信息，需要选择保留一个帐号下信息，另一个帐号下信息被覆盖  -->
            <div style="overflow:hidden; width:500px;height:390px;" class="popup" id="bindReplace">
                <form style="width: 100%" id="bindReplaceForm">
                    <table width="100%" height="100%">
                        <tbody><tr>
                            <td class="border_btm">
                                <h3><!-- 你要绑定的帐号：<span id="user_name"></span>已经是拉勾注册用户 -->
                                    <div class="f20 c5">请选择需要保留的帐号信息：</div>
                                </h3>
                                <div class="red_18">绑定后只能保留一个帐号下的信息，另一个帐号信息将自动被覆盖，不可恢复！</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="chooseAccount">
                                <label class="">
                                    <input type="hidden" value="">
                                    <em></em>
                                    <div>
                                        <div class="f16 c7">保留邮箱：<span value="1" id="user_oldAccount" class="c3"></span>帐号下的信息</div>
                                        <div class="acc_detail">
                                            <span>简历完整度：<i id="user_resumeScore"></i>分 </span>
                                            <span>投递职位数：<i id="user_jobCount"></i>个   </span>
                                        </div>
                                        <div class="acc_detail">
                                            <span>发布职位数：<i id="user_publishJob"></i>个 </span>
                                            <span>收到简历数：<i id="user_receiveCount"></i>份</span>
                                        </div>
                                    </div>
                                </label>
                                <label>
                                    <input type="hidden" value="">
                                    <em></em>
                                    <div>
                                        <div class="f16 c7 ">保留
                                            <i id="user_typeAccount"></i>：
                                            <span value="2" id="user_replaceAccount" class="c3"></span>帐号下的信息
                                        </div>
                                        <div class="acc_detail">
                                            <span>简历完整度：<i id="user_replaceResumeScore"></i>分 </span>
                                            <span>投递职位数：<i id="user_replaceJobCount"></i>个   </span>
                                        </div>
                                        <div class="acc_detail">
                                            <span>发布职位数：<i id="user_replacePublishJob"></i>个 </span>
                                            <span>收到简历数：<i id="user_replaceReceiveCount"></i>份</span>
                                        </div>
                                        <span style="margin:0px;display:none" id="chooseRemainError" class="error"></span>
                                    </div>

                                </label>

                            </td>
                        </tr>
                        <tr>

                            <td align="center">
                                <a id="user_confirmReplace" class="btn" href="javascript:;">确 定</a>
                                <a id="user_cancleReplace" class="cancel" href="javascript:;">取 消</a>
                            </td>

                        </tr>
                        </tbody></table>

                </form>
            </div><!--/#bindReplace-->

            <!-- 帐号绑定 : 确认取消绑定QQ -->
            <div class="popup user_popup" id="confirmUnbind">
                <div class="user_confirmUnbind">确认要解除与QQ的绑定吗？</div>
                <div class="user_confirmNo">确认后，将不能使用QQ登录拉勾网</div>
                <div class="user_bindBtn user_unbind"><a id="user_confirmUnbind" class="user_confirm click" href="javascript:;">确&nbsp;定</a>
                    <a class="cancel" href="javascript:;">取 消</a>
                </div>
            </div>

            <!-- 帐号绑定 : 确认取消绑定sina微博 -->
            <div class="popup user_popup" id="confirmUnbindSina">
                <div class="user_confirmUnbind">确认要解除与新浪微博的绑定吗？</div>
                <div class="user_confirmNo">确认后，将不能使用新浪微博登录拉勾网</div>
                <div class="user_bindBtn user_unbind"><a id="user_confirmUnbindSina" class="user_confirm click" href="javascript:;">确&nbsp;定</a>
                    <a class="cancel" href="javascript:;">取 消</a>
                </div>
            </div>

            <!-- 修改密码 -->
            <div style="overflow:hidden" class="popup" id="updatePassword">
                <h3>修改密码成功，请重新登录</h3>
                <h4><span>5</span>秒后将自动退出</h4>
                <a class="btn" href="login.html">直接退出</a>
            </div>

            <!-- 解除招聘服务 -->
            <div style="overflow:hidden" class="popup" id="unbindService">
                <h3>与当前公司的招聘服务解除成功！</h3>
                <h4><span>5</span>秒后页面将自动跳转至开通招聘服务页</h4>
                <a class="btn" href="h/corpCenter/bindStep1.html">立即跳转</a>
            </div>
            <div style="overflow:hidden" class="popup" id="confirm_unbindService">
                <h3>确认解除与当前公司的招聘服务吗？</h3>
                <h4>解除后，您通过该公司发布的职位和收到的简历都将不可见，且不可恢复</h4>
                <div class="confirm_unbindSeerviceBtn">
                    <a id="confirm_unbind" class="btn" href="javascript:;">确认解除</a>
                    <a id="" class="cancel" href="javascript:;">取 消</a>
                </div>
            </div>

        </div>
        <!------------------------------------- end -----------------------------------------> <script>
        $(function(){

        });
    </script>
        <script src="<?php echo C('Base_Url');?>js/setting.js"></script>
        <div class="clear"></div>
        <input type="hidden" value="" id="resubmitToken">
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