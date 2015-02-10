<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_nav`;");
E_C("CREATE TABLE `ecs_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_nav` values('2','','0','选购中心','0','2','0','pick_out.php','top');");
E_D("replace into `ecs_nav` values('3','','0','查看购物车','0','0','0','flow.php','top');");
E_D("replace into `ecs_nav` values('33','c','194','童鞋','1','6','0','category.php?id=194','middle');");
E_D("replace into `ecs_nav` values('6','','0','我的账户','1','5','0','user.php','top');");
E_D("replace into `ecs_nav` values('7','','0','免责条款','1','1','0','article.php?id=1','bottom');");
E_D("replace into `ecs_nav` values('8','','0','隐私保护','1','2','0','article.php?id=2','bottom');");
E_D("replace into `ecs_nav` values('9','','0','咨询热点','1','3','0','article.php?id=3','bottom');");
E_D("replace into `ecs_nav` values('10','','0','联系我们','1','4','0','article.php?id=4','bottom');");
E_D("replace into `ecs_nav` values('11','','0','公司简介','1','5','0','article.php?id=5','bottom');");
E_D("replace into `ecs_nav` values('12','','0','批发方案','1','6','0','wholesale.php','bottom');");
E_D("replace into `ecs_nav` values('14','','0','配送方式','1','7','0','myship.php','bottom');");
E_D("replace into `ecs_nav` values('28','c','140','男鞋','1','1','0','category.php?id=140','middle');");
E_D("replace into `ecs_nav` values('29','c','159','女鞋','1','2','0','category.php?id=159','middle');");
E_D("replace into `ecs_nav` values('23','a','3','帮助中心','1','6','0','article_cat.php?id=3','top');");
E_D("replace into `ecs_nav` values('32','c','254','户外','1','5','0','category.php?id=254','middle');");
E_D("replace into `ecs_nav` values('31','c','243','运动鞋','1','4','0','category.php?id=243','middle');");
E_D("replace into `ecs_nav` values('41','','0','3G资讯','1','8','0','article_cat.php?id=4','bottom');");
E_D("replace into `ecs_nav` values('42','','0','最新资讯','1','9','0','article_cat.php?id=12','bottom');");

require("../../inc/footer.php");
?>