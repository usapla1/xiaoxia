CREATE TABLE `cb_work` (
  `workid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `work_num` varchar(50) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;