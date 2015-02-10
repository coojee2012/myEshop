<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_users`;");
E_C("CREATE TABLE `ecs_users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `question` varchar(255) NOT NULL DEFAULT '',
  `answer` varchar(255) NOT NULL DEFAULT '',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `user_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `frozen_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_points` int(10) unsigned NOT NULL DEFAULT '0',
  `rank_points` int(10) unsigned NOT NULL DEFAULT '0',
  `address_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(11) unsigned NOT NULL DEFAULT '0',
  `last_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `visit_count` smallint(5) unsigned NOT NULL DEFAULT '0',
  `user_rank` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_special` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `salt` varchar(10) NOT NULL DEFAULT '0',
  `ec_salt` varchar(10) DEFAULT NULL,
  `parent_id` mediumint(9) NOT NULL DEFAULT '0',
  `flag` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `alias` varchar(60) NOT NULL,
  `msn` varchar(60) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `office_phone` varchar(20) NOT NULL,
  `home_phone` varchar(20) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `is_validated` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `credit_line` decimal(10,2) unsigned NOT NULL,
  `passwd_question` varchar(50) DEFAULT NULL,
  `passwd_answer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `email` (`email`),
  KEY `parent_id` (`parent_id`),
  KEY `flag` (`flag`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_users` values('1','ecshop@ecshop.com','ecshop','554fcae493e564ee0dc75bdf2ebf94ca','','','0','1960-03-03','0.00','0.00','98388','15390','1','0','1245048540','0000-00-00 00:00:00','0.0.0.0','11','0','0','0','','0','0','','','','','','','0','0.00','','');");
E_D("replace into `ecs_users` values('2','vip@ecshop.com','vip','232059cb5361a9336ccf1b8c2ba7657a','','','0','1949-01-01','0.00','0.00','0','0','0','0','0','0000-00-00 00:00:00','','0','0','0','0','','0','0','','','','','','','0','0.00','','');");
E_D("replace into `ecs_users` values('3','text@ecshop.com','text','1cb251ec0d568de6a929b520c4aed8d1','','','0','1949-01-01','0.00','0.00','0','0','2','0','1242973574','0000-00-00 00:00:00','0.0.0.0','2','0','0','0','','0','0','','','','','','','0','0.00','','');");
E_D("replace into `ecs_users` values('5','zuanshi@ecshop.com','zuanshi','815a71fb334412e7ba4595741c5a111d','','','0','1949-01-01','0.00','10000.00','0','0','0','0','0','0000-00-00 00:00:00','','0','3','0','0','','0','0','','','','','','','0','0.00','','');");
E_D("replace into `ecs_users` values('6','11@12311114.com','123456','e10adc3949ba59abbe56e057f20f883e','','','0','0000-00-00','0.00','0.00','0','0','0','1292210518','1314524583','0000-00-00 00:00:00','127.0.0.1','3','0','0','0','','0','0','','11@12311114.com','11111','11111111','11111111111111','111111111','0','0.00','friend_birthday','111111111');");

require("../../inc/footer.php");
?>