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
    <title>后台管理系统--浙江新安化工集团</title>
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
                <h1><em></em>发布新职位</h1>
                </dt>
                <dd>
                    <div class="ccc_tr">
                        今日已发布
                        <span>0</span> 个职位 还可发布
                        <span>5</span> 个职位
                    </div>
                    <form action="<?php echo U('Work/add');?>" method="post" id="jobForm">
                        <input type="hidden" value="" name="id" />
                        <input type="hidden" value="create" name="preview" />
                        <input type="hidden" value="25927" name="companyId" />
                        <input type="hidden" value="c29d4a7c35314180bf3be5eb3f00048f" name="resubmitToken" />
                        <table class="btm">
                            <tbody>
        <tr>
            <td><span class="redstar">*</span></td>
            <td>标题</td>
            <td> <input type="text" placeholder="请输入招聘标题" value="" name="work_title" id="positionName" /> </td>
        </tr>
        <tr>
            <td><span class="redstar">*</span></td>
            <td>招聘人数</td>
            <td> <input type="text" placeholder="请输入招聘人数" value="" name="work_num" id="positionName" /> </td>
        </tr>
        <tr>
        <td width="25"><span class="redstar">*</span></td>
        <td width="85">职位类别</td>
        <td> <input type="text" id="positionType" value="" name="worktype" placeholder="职位类别"/>
        </td>
        </tr>
        <tr>
            <td><span class="redstar">*</span></td>
            <td>职位名称</td>
            <td> <input type="text" placeholder="请输入职位名称，如：产品经理" value="" name="positionName" id="positionName" /> </td>
        </tr>
        <tr>
            <td></td>
            <td>所属部门</td>
            <td> <input type="text" placeholder="请输入所属部门" value="" name="department" id="department" /> </td>
        </tr>
        </tbody>
        </table>
        <table class="btm">
            <tbody>
            <tr>
                <td width="25"><span class="redstar">*</span></td>
                <td width="85">工作性质</td>
                <td><input type="text" placeholder="工作性质" value="" name="jobNature" id="department1" /></td>
            </tr>
            <tr>
                <td><span class="redstar">*</span></td>
                <td>月薪范围</td>
                <td>
                    <div class="salary_range">
                        <div>
                            <input type="text" placeholder="最低月薪" value="" id="salaryMin" name="salaryMin" />
                            <span>k</span>
                        </div>
                        <div>
                            <input type="text" placeholder="最高月薪" value="" id="salaryMax" name="salaryMax" />
                            <span>k</span>
                        </div>
                        <span>只能输入整数，如：9</span>
                    </div> </td>
            </tr>
            <tr>
                <td><span class="redstar">*</span></td>
                <td>工作城市</td>
                <td> <input type="text" placeholder="请输入工作城市，如：北京" value="上海" name="workAddress" id="workAddress" /> </td>
            </tr>
            </tbody>
        </table>
        <table class="btm">
            <tbody>
            <tr>
                <td width="25"><span class="redstar">*</span></td>
                <td width="85">工作经验</td>
                <td> <input type="text" id="experience" value="" name="workYear" /></td>
            </tr>
            <tr>
                <td><span class="redstar">*</span></td>
                <td>学历要求</td>
                <!--<h3><span>(最高月薪不能大于最低月薪的2倍)</span></h3> -->
                <td> <input type="text" id="education" value="" name="education" /> </td>
            </tr>
            </tbody>
        </table>
        <table>
            <tbody>
            <tr>
                <td></td>
                <td>职位诱惑</td>
                <td> <input type="text" placeholder="" value="" name="temptation" id="temptation" /> </td>
            </tr>
            <tr>
                <td width="25"><span class="redstar">*</span></td>
                <td colspan="2"> 接收简历邮箱：<input type="text" value="admin@admin.com" id="receiveEmail" name="receiveEmail" /> </td>
            </tr>
            <tr>
                <td width="25"></td>
                <td colspan="2"> <input type="submit" value="发布" id="jobPreview" class="btn_32" /> </td>
            </tr>
            </tbody>
        </table>
        </form>
        </dd>
        </dl>
    </div>
    <!-- end .content -->
    <!-- 弹窗lightbox ----------------------------------------->
    <div style="display:none;">
        <!--联系方式弹窗-->
        <div style="height:180px;" class="popup" id="telTip">
            <form id="telForm">
                <table width="100%">
                    <tbody>
                    <tr>
                        <td align="center" class="f18">留个联系方式方便我们联系你吧！</td>
                    </tr>
                    <tr>
                        <td align="center"> <input type="text" maxlength="49" placeholder="请输入你的手机号码或座机号码" name="tel" /> <span style="display:none;" class="error" id="telError"></span> </td>
                    </tr>
                    <tr>
                        <td align="center"> <input type="submit" value="提交" class="btn" /> </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="clear"></div>
        <a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
    </div>
    <!-- end #container -->
</div>
<!-- end #body -->
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