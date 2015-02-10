<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keywords`;");
E_C("CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keywords` values('2009-04-21','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-04-27','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-04','ecshop','斤','1');");
E_D("replace into `ecs_keywords` values('2009-05-10','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-11','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-11','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','三星','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','p806','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','夏新','1');");
E_D("replace into `ecs_keywords` values('2009-05-18','ecshop','52','2');");
E_D("replace into `ecs_keywords` values('2009-05-22','ecshop','p','1');");

require("../../inc/footer.php");
?>