<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_category`;");
E_C("CREATE TABLE `ecs_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=263 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_category` values('262','新品','','','254','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('206','凉鞋','','','194','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('205','中筒靴','','','194','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('204','短靴','','','194','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('203','户外鞋','','','194','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('202','登山鞋','','','194','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('201','拖鞋','','','194','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('199','帆布鞋','','','194','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('198','休闲鞋','','','194','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('197','板鞋','','','194','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('196','跑步鞋','','','194','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('195','篮球鞋','','','194','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('194','童鞋','','','0','50','','','1','','1','0','');");
E_D("replace into `ecs_category` values('260','布鞋','','','254','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('261','登山鞋','','','254','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('258','凉鞋','','','254','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('259','徒步鞋','','','254','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('243','运动鞋','','','0','3','','','1','','1','0','');");
E_D("replace into `ecs_category` values('244','板鞋','','','243','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('245','跑步鞋','','','243','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('246','帆布鞋','','','243','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('247','休闲鞋','','','243','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('248','篮球鞋','','','243','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('249','网球鞋','','','243','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('250','训练鞋','','','243','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('251','足球鞋','','','243','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('252','新品区','','','243','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('253','特价区','','','243','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('254','户外','','','0','4','','','1','','1','0','');");
E_D("replace into `ecs_category` values('255','户外鞋','','','254','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('256','拖鞋','','','254','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('228','凉鞋','','','159','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('174','单鞋','','','159','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('229','拖鞋','','','159','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('230','帆布鞋','','','159','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('231','平跟鞋','','','159','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('232','中跟鞋','','','159','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('233','休闲鞋','','','159','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('234','运动鞋','','','159','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('235','新款区','','','159','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('236','特价区','','','159','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('159','女鞋','','','0','1','','','1','','1','0','');");
E_D("replace into `ecs_category` values('241','新品区','','','140','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('257','休闲鞋','','','254','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('242','特价区','','','140','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('151','休闲皮鞋','','','140','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('148','商务皮鞋','','','140','41','','','0','','1','9','218,217');");
E_D("replace into `ecs_category` values('238','拖鞋','','','140','42','','','0','','1','0','');");
E_D("replace into `ecs_category` values('239','休闲鞋','','','140','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('240','帆布鞋','','','140','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('140','男鞋','','','0','2','','','1','','1','9','220,218');");
E_D("replace into `ecs_category` values('237','凉鞋','','','140','40','','','0','','1','0','');");

require("../../inc/footer.php");
?>