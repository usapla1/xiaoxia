CREATE TABLE `cb_work` (
  `workid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `work_num` varchar(50) NOT NULL,
  `work_title` varchar(50) NOT NULL,
  `positionName` varchar(50) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `jobNature` varchar(50) DEFAULT NULL,
  `salaryMin` varchar(50) DEFAULT NULL,
  `salaryMax` varchar(50) DEFAULT NULL,
  `workAddress` varchar(50) DEFAULT NULL,
  `workYear` varchar(50) DEFAULT NULL,
  `education` varchar(50) DEFAULT NULL,
  `temptation` varchar(50) DEFAULT NULL,
  `receiveEmail` varchar(250) DEFAULT NULL,
  `create_time` varchar(250) DEFAULT NULL,
  `update_time` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`workid`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;