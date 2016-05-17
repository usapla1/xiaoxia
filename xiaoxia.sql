/*
Navicat MySQL Data Transfer

Source Server         : coobar_local
Source Server Version : 50538
Source Host           : 127.0.0.1:19306
Source Database       : xiaoxia

Target Server Type    : MYSQL
Target Server Version : 50538
File Encoding         : 65001

Date: 2016-05-17 19:37:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cb_mailsms`
-- ----------------------------
DROP TABLE IF EXISTS `cb_mailsms`;
CREATE TABLE `cb_mailsms` (
  `mailsmsid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `workname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '0',
  `content` varchar(50) NOT NULL DEFAULT '0',
  `add_time` varchar(250) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `workaddress` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`mailsmsid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cb_mailsms
-- ----------------------------
INSERT INTO `cb_mailsms` VALUES ('1', '1', 'root444', '', '4', '5', '2016-05-17 19:29:11', '2016-05-19', '上海');

-- ----------------------------
-- Table structure for `cb_more`
-- ----------------------------
DROP TABLE IF EXISTS `cb_more`;
CREATE TABLE `cb_more` (
  `moreid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `resumeid` varchar(50) NOT NULL,
  `mail` text NOT NULL,
  `edu` text,
  `work` text,
  `reward` text,
  `skill` text,
  `selftalk` text,
  `hopework` text,
  PRIMARY KEY (`moreid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cb_more
-- ----------------------------
INSERT INTO `cb_more` VALUES ('1', '3', '1', '', 'ffffddd', 'ggh', 'gggfff', 'h', 'h', 'h');

-- ----------------------------
-- Table structure for `cb_resume`
-- ----------------------------
DROP TABLE IF EXISTS `cb_resume`;
CREATE TABLE `cb_resume` (
  `resumeid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `mingzhu` varchar(50) DEFAULT NULL,
  `hunyin` varchar(50) DEFAULT NULL,
  `shenfen` varchar(50) DEFAULT NULL,
  `jiguan` varchar(50) DEFAULT NULL,
  `adress` varchar(50) DEFAULT NULL,
  `telphone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `edu` varchar(250) DEFAULT NULL,
  `reward` varchar(250) DEFAULT NULL,
  `work` varchar(250) DEFAULT NULL,
  `skill` varchar(250) DEFAULT NULL,
  `selftalk` varchar(250) DEFAULT NULL,
  `hopework` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`resumeid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cb_resume
-- ----------------------------
INSERT INTO `cb_resume` VALUES ('1', '3', 'root444', '女', '2', '2', '255555555555', '2', '333', '123456', '44444', '', '', '', '', '', '');
INSERT INTO `cb_resume` VALUES ('2', '4', '3333', '女', null, null, null, null, null, '18958063477', '1@qq.com', null, null, null, null, null, null);
INSERT INTO `cb_resume` VALUES ('3', '5', 'dad222', '女', null, null, null, null, null, '1111', '123456@qq.com', null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `cb_seek`
-- ----------------------------
DROP TABLE IF EXISTS `cb_seek`;
CREATE TABLE `cb_seek` (
  `seekid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `workid` varchar(50) NOT NULL,
  `work_title` varchar(50) NOT NULL,
  `is_look` varchar(50) NOT NULL DEFAULT '0',
  `create_time` varchar(250) DEFAULT NULL,
  `update_time` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`seekid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cb_seek
-- ----------------------------
INSERT INTO `cb_seek` VALUES ('12', '3', '2', '1', '1', '2016-04-26 15:05:40', '2016-04-26 15:05:40');

-- ----------------------------
-- Table structure for `cb_users`
-- ----------------------------
DROP TABLE IF EXISTS `cb_users`;
CREATE TABLE `cb_users` (
  `userid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telphone` varchar(50) DEFAULT NULL,
  `userdata` varchar(50) DEFAULT NULL,
  `repassword` varchar(50) DEFAULT NULL,
  `role` int(11) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cb_users
-- ----------------------------
INSERT INTO `cb_users` VALUES ('2', 'root', '1234@qq.com', '222', '', '123456', '2');
INSERT INTO `cb_users` VALUES ('3', 'root', '123@qq.com', '123456', '', '333', '1');
INSERT INTO `cb_users` VALUES ('4', '3333', '1@qq.com', '18958063477', '', '123456', '1');
INSERT INTO `cb_users` VALUES ('5', 'dad222', '123456@qq.com', '1111', '', '123456', '1');

-- ----------------------------
-- Table structure for `cb_work`
-- ----------------------------
DROP TABLE IF EXISTS `cb_work`;
CREATE TABLE `cb_work` (
  `workid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `work_num` varchar(50) NOT NULL,
  `work_type` varchar(50) DEFAULT NULL,
  `work_title` varchar(50) NOT NULL,
  `positionname` varchar(50) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `jobnature` varchar(50) DEFAULT NULL,
  `salarymin` varchar(50) DEFAULT NULL,
  `salarymax` varchar(50) DEFAULT NULL,
  `workaddress` varchar(50) DEFAULT NULL,
  `workyear` varchar(50) DEFAULT NULL,
  `education` varchar(50) DEFAULT NULL,
  `temptation` varchar(50) DEFAULT NULL,
  `receiveemail` varchar(250) DEFAULT NULL,
  `create_time` varchar(250) DEFAULT NULL,
  `update_time` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`workid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cb_work
-- ----------------------------
INSERT INTO `cb_work` VALUES ('2', '2', '5', null, '1', '全职', '研发部', '关注', '1', '55', '上海', '1年', '大专', '100万', 'admin@admin.com', '2016-04-20 16:37:49', '2016-04-20 16:37:49');
INSERT INTO `cb_work` VALUES ('3', '2', '5', null, '2', '全职', '研发部', '关注', '1', '55', '上海', '1年', '大专', '100万', 'admin@admin.com', '2016-04-20 17:11:01', '2016-04-20 17:11:01');
INSERT INTO `cb_work` VALUES ('4', '2', '55', '', '44', '77', '88', '888', '8', '8', '上海8', '8', '8', '8', 'admin@admin.com', '2016-05-17 17:32:27', '2016-05-17 17:32:27');
