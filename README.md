﻿## 简介

晓霞同志的毕业设计

#1:求职者模块：
新增简历，简历修改，简历投递，申请记录查看，企业人事反馈（短信或邮箱）
#2：企业模块
发布职位，职位的修改，职位的删除，查看应聘者个人信息，查看应聘者简历，简历筛选，简历汇总，应聘者信息数据分析，对应聘者的反馈（短信或邮箱）；
#3:通用模块
求职者的注册，求职者的登录，企业用户的登录，

##已完成接口

##首页:Index/index
#简历投递:Index/submitResume

##注册首页:Register/index
#注册操作：Register/register

##登录首页:Login/index
#登录操作：Login/login

##查看所有已经发布的职位:Work/index
#发布职位:Work/add
#职位的修改:Work/edit
#职位的删除:Work/del

##查看职位下的求职者列表:Work/seejob
#查看应聘者个人信息:Work/seeUserinfo
#查看应聘者简历:Work/seeResumeinfo

##个人简历首页：Resume/index
#新增简历:Resume/add,
#简历修改:Resume/edit
#对应聘者的反馈（短信或邮箱）:Mail/add,index
#企业人事反馈:Mail/userMail
#申请记录查看:Submit/index

##简历筛选:Choose/choose,
#简历汇总:Choose/expUser
#应聘者信息数据分析:Analysis/index



