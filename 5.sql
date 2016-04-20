CREATE TABLE `cb_mailsms` (
  `mailsmsid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `workname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '0',
  `content` varchar(50) NOT NULL DEFAULT '0',
  `add_time` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`mailsmsid`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;