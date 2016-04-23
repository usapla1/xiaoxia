<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb"><head>
</script><script type="text/javascript" async="" src="<?php echo C('Base_Url');?>js/conversion.js"></script>
    <script src="<?php echo C('Base_Url');?>js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script><style type="text/css"></style>
<meta content="no-siteapp" http-equiv="Cache-Control">
<link  media="handheld" rel="alternate">
<!-- end 云适配 -->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>浙江新安化工集团网上招聘平台信息系统</title>
<meta property="qc:admins" content="23635710066417756375" />
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
                <li><a rel="nofollow" href="create.html">个人中心</a></li>
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
                <dl class="company_center_content">
                    <dt>
                        <h1>
                            <em></em>
                            职位说明
                        </h1>
                    </dt>
                    <dd>
                        <!--表单提交简历-->
                        <form action="<?php echo U('Resume/sendresume');?>" method="post" id="jobForm">
                            <input type="hidden" value="<?php echo ($vo["workid"]); ?>" name="workid">
                            <table class="btm">
                                <tbody>
                                    <tr>
                                    <td>职位名称：</td>
                                    <td id="pname">
                                        <?php echo ($list["work_title"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>工作地点：</td>
                                    <td id="pplace">
                                        <?php echo ($list["workaddress"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>工作性质：</td>
                                    <td id="ptype">
                                        <?php echo ($list["work_type"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>工作经验要求:</td>
                                    <td id="pexp">
                                        <?php echo ($list["workyear"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>学历要求：</td>
                                    <td id="pedu">
                                        <?php echo ($list["education"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>工资待遇：</td>
                                    <td id="ptreatment">
                                        <?php echo ($list["salarymin"]); ?>~<?php echo ($list["salarymax"]); ?>k
                                    </td>
                                </tr>
                                <tr>
                                    <td>招聘人数：</td>
                                    <td id="pcount">
                                        <?php echo ($list["work_num"]); ?>人
                                    </td>
                                </tr>
                                <tr>
                                    <td>HR邮箱：</td>
                                    <td id="pmail">
                                        <?php echo ($list["receiveemail"]); ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                            
                            <table class="btm">
                                <tbody>
                                <tr>
                                    <td>职位简介：</td>
                                    <td id="pdes">
                                        <p>公司现因运营需要，特向社会招聘财务助理、会计各2名，<br/>优秀应届生也欢迎加入。。。
                                        要求如下：<br/>工作内容：<br/>1.每月核算门店及公司工资
                                        <br/>2.门店财务对接<br/>3.报销</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>职位要求：</td>
                                    <td id="pask">
                                        <p>
                                            任职资格：<br/>1、认真细致，爱岗敬业，吃苦耐劳，服从领导，有良好的职业操守；<br/>2、思维敏捷，接受能力强，能独立思考，善于总结工作经验；<br/>3、熟练应用财务及Office办公软件；<br/>4、具有良好的沟通能力；<br/>5、有会计从业资格证书。</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                            <table>
                                <tbody><tr>
                                    <td colspan="2">
                                        接收简历邮箱： <span id="receiveEmailVal"><?php echo ($list["receiveemail"]); ?></span>
                                        <input type="hidden" value="1234567@qq.com" id="receiveEmail" name="email">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="25"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" value="投递简历" id="formSubmit" class="btn_32">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </form>
                    </dd>
                </dl>
            </div><!-- end .content -->
            <div class="clear"></div>
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