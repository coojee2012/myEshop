<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_goods`;");
E_C("CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `extension_code` varchar(30) DEFAULT NULL,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_goods` values('1','1','13','0','','诺基亚5320 XpressMusic','诺基亚','ECS000013','1','','0','3','');");
E_D("replace into `ecs_delivery_goods` values('2','1','14','0','','诺基亚5800XM','诺基亚','ECS000014','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('3','2','24','0','','P806','联想','ECS000024','1','','0','3','');");
E_D("replace into `ecs_delivery_goods` values('4','2','9','0','','诺基亚E66','诺基亚','ECS000009','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('5','3','24','0','','P806','联想','ECS000024','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('6','3','8','0','','飞利浦9@9v','飞利浦','ECS000008','1','','0','3','');");
E_D("replace into `ecs_delivery_goods` values('7','4','12','0','','摩托罗拉A810','摩托罗拉','ECS000012','1','','0','2','');");
E_D("replace into `ecs_delivery_goods` values('8','5','24','0','','P806','联想','ECS000024','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('9','6','68','0','','模板堂ecmoban.com测试商品11','阿迪达斯','ECS000068','1','','0','1','尺码:37 \n');");
E_D("replace into `ecs_delivery_goods` values('10','6','69','0','','模板堂ecmoban.com测试商品12','雅客士','ECS000069','1','','0','8','');");
E_D("replace into `ecs_delivery_goods` values('11','6','67','0','','模板堂ecmoban.com测试商品10','耐克','ECS000067','1','','0','1','尺码:47 \n');");
E_D("replace into `ecs_delivery_goods` values('12','6','66','0','','模板堂ecmoban.com测试商品9','其 乐','ECS000066','1','','0','1','尺码:37 \n');");
E_D("replace into `ecs_delivery_goods` values('13','6','65','0','','模板堂ecmoban.com测试商品8','三叶草','ECS000065','1','','0','1','尺码:47 \n');");
E_D("replace into `ecs_delivery_goods` values('14','6','64','0','','模板堂ecmoban.com测试商品7','彪马','ECS000064','1','','0','1','尺码:37 \n');");
E_D("replace into `ecs_delivery_goods` values('15','6','63','0','','模板堂ecmoban.com测试商品6','匡威','ECS000063','1','','0','1','尺码:47 \n');");
E_D("replace into `ecs_delivery_goods` values('16','6','62','0','','模板堂ecmoban.com测试商品5','阿迪STYLE','ECS000062','1','','0','1','尺码:37 \n');");
E_D("replace into `ecs_delivery_goods` values('17','6','61','0','','模板堂ecmoban.com测试商品4','新百伦','ECS000061','1','','0','1','尺码:47 \n');");
E_D("replace into `ecs_delivery_goods` values('18','6','60','0','','模板堂ecmoban.com测试商品3','卡 帕','ECS000060','1','','0','1','尺码:37 \n');");

require("../../inc/footer.php");
?>