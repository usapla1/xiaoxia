SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cb_pass_round`
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
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;