<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ad`;");
E_C("CREATE TABLE `ecs_ad` (
  `ad_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `position_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `media_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ad_name` varchar(60) NOT NULL DEFAULT '',
  `ad_link` varchar(255) NOT NULL DEFAULT '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(11) NOT NULL DEFAULT '0',
  `link_man` varchar(60) NOT NULL DEFAULT '',
  `link_email` varchar(60) NOT NULL DEFAULT '',
  `link_phone` varchar(60) NOT NULL DEFAULT '',
  `click_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ad` values('74','33','0','cat_r4_194','#','1314373159818497636.jpg','1314288000','1790265600','','','','0','1');");
E_D("replace into `ecs_ad` values('62','32','0','cat_m2_140','http://www.ecodemall.com/','1314284906717957176.jpg','1314201600','1853337600','','','','0','1');");
E_D("replace into `ecs_ad` values('63','33','0','cat_r1_140','http://www.ecodemall.com/','1314284925307261045.jpg','1314201600','1853337600','','','','0','1');");
E_D("replace into `ecs_ad` values('64','33','0','cat_r2_140','http://www.ecodemall.com/','1314284941353559215.jpg','1314201600','1727107200','','','','0','1');");
E_D("replace into `ecs_ad` values('65','33','0','cat_r3_140','http://www.ecodemall.com/','1314284956537711218.jpg','1314201600','1790179200','','','','0','1');");
E_D("replace into `ecs_ad` values('66','33','0','cat_r4_140','http://www.ecodemall.com/','1314284974106572323.jpg','1314201600','1790179200','','','','0','1');");
E_D("replace into `ecs_ad` values('67','31','0','cat_l1_194','http://www.ecodemall.com/','1314373043274254104.jpg','1314288000','1790265600','','','','0','1');");
E_D("replace into `ecs_ad` values('68','31','0','cat_l2_194','#','1314373056474524779.jpg','1314288000','1790265600','','','','0','1');");
E_D("replace into `ecs_ad` values('69','32','0','cat_m1_194','http://www.ecodemall.com/','1314373074195376280.jpg','1314288000','1853424000','','','','0','1');");
E_D("replace into `ecs_ad` values('70','32','0','cat_m2_194','http://www.ecodemall.com','1314373089117211899.jpg','1314288000','1853424000','','','','0','1');");
E_D("replace into `ecs_ad` values('71','33','0','cat_r1_194','http://www.ecodemall.com/','1314373116738334037.jpg','1314288000','1853424000','','','','0','1');");
E_D("replace into `ecs_ad` values('72','33','0','cat_r2_194','http://www.ecodemall.com/','1314373131379767311.jpg','1314288000','1853424000','','','','0','1');");
E_D("replace into `ecs_ad` values('73','33','0','cat_r3_194','http://www.ecodemall.com/','1314373144185442288.jpg','1314288000','1790265600','','','','0','1');");
E_D("replace into `ecs_ad` values('61','32','0','cat_m1_140','http://www.ecodemall.com/','1314284891104144607.jpg','1314201600','1790179200','','','','0','1');");
E_D("replace into `ecs_ad` values('49','29','0','首页顶部广告位','http://www.ecodemall.com/','1313588076720013507.jpg','1313510400','1852646400','','','','0','1');");
E_D("replace into `ecs_ad` values('50','30','0','播放器右侧广告','http://www.ecodemall.com/','1313674509971923264.jpg','1313596800','1789574400','','','','0','1');");
E_D("replace into `ecs_ad` values('51','31','0','cat_l1_159','#','1314281267081018048.jpg','1314201600','1790179200','','','','0','1');");
E_D("replace into `ecs_ad` values('52','31','0','cat_l2_159','#','1314281286421687751.jpg','1314201600','1727107200','','','','0','1');");
E_D("replace into `ecs_ad` values('53','32','0','cat_m1_159','#','1314281308504051971.jpg','1314201600','1853337600','','','','0','1');");
E_D("replace into `ecs_ad` values('54','32','0','cat_m2_159','http://www.ecodemall.com/','1314281323303082265.jpg','1314201600','1790179200','','','','0','1');");
E_D("replace into `ecs_ad` values('55','33','0','cat_r1_159','http://www.ecodemall.com/','1314281351000309718.jpg','1314201600','1853337600','','','','0','1');");
E_D("replace into `ecs_ad` values('56','33','0','cat_r2_159','http://www.ecodemall.com/','1314281366431966011.jpg','1314201600','1853337600','','','','0','1');");
E_D("replace into `ecs_ad` values('57','33','0','cat_r3_159','http://www.ecodemall.com/','1314281382294024800.jpg','1314201600','1853337600','','','','0','1');");
E_D("replace into `ecs_ad` values('58','33','0','cat_r4_159','http://www.ecodemall.com/','1314281406369618745.jpg','1314201600','1853337600','','','','0','1');");
E_D("replace into `ecs_ad` values('59','31','0','cat_l1_140','http://www.ecodemall.com','1314284853641893306.jpg','1314201600','1790179200','','','','0','1');");
E_D("replace into `ecs_ad` values('60','31','0','cat_l2_140','http://www.ecodemall.com/','1314284873330307215.jpg','1314201600','1853337600','','','','0','1');");

require("../../inc/footer.php");
?>