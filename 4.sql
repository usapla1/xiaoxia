CREATE TABLE `cb_seek` (
  `seekid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `workid` varchar(50) NOT NULL,
  `is_look` varchar(50) NOT NULL DEFAULT '0',
  `create_time` varchar(250) DEFAULT NULL,
  `update_time` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`seekid`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;