<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_activity`;");
E_C("CREATE TABLE `ecs_goods_activity` (
  `act_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(3) unsigned NOT NULL,
  `ext_info` text NOT NULL,
  PRIMARY KEY (`act_id`),
  KEY `act_name` (`act_name`,`act_type`,`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_activity` values('1','夺宝奇兵之诺基亚N96','新一轮的夺宝开始了\n本期是 诺基亚n96','0','23','0','诺基亚N96','1242107580','1242193980','0','a:4:{s:11:\"start_price\";s:4:\"1.00\";s:9:\"end_price\";s:6:\"800.00\";s:9:\"max_price\";i:0;s:11:\"cost_points\";s:1:\"1\";}');");
E_D("replace into `ecs_goods_activity` values('2','夺宝奇兵之夏新N7','本期的夺宝奖品是 夏新N7','0','17','0','夏新N7','1242107820','1250661420','0','a:4:{s:11:\"start_price\";s:4:\"1.00\";s:9:\"end_price\";s:6:\"800.00\";s:9:\"max_price\";i:0;s:11:\"cost_points\";s:1:\"1\";}');");
E_D("replace into `ecs_goods_activity` values('3','P806','本期团购活动——联想新品P806\n团购买的多优惠多','1','24','0','P806','1241971200','1242403200','3','a:4:{s:12:\"price_ladder\";a:3:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:1850;}i:1;a:2:{s:6:\"amount\";i:15;s:5:\"price\";d:1800;}i:2;a:2:{s:6:\"amount\";i:20;s:5:\"price\";d:1780;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:1000;}');");
E_D("replace into `ecs_goods_activity` values('4','拍卖活动——索爱C702c','','2','10','0','索爱C702c','1242144000','1242403200','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:0;s:9:\"end_price\";i:0;s:9:\"amplitude\";d:20;s:6:\"no_top\";i:1;}');");
E_D("replace into `ecs_goods_activity` values('5','摩托罗拉E8 大礼包','礼包大优惠','4','31','0','摩托罗拉E8 ','1242110400','1252046400','0','a:1:{s:13:\"package_price\";s:4:\"1430\";}');");
E_D("replace into `ecs_goods_activity` values('6','诺基亚N85大礼包','诺基亚N85超值大礼包','4','32','0','诺基亚N85','1242110760','1248936360','0','a:1:{s:13:\"package_price\";s:4:\"3150\";}');");
E_D("replace into `ecs_goods_activity` values('7','拍卖活动——索爱C702c(第2期)','拍卖活动————索爱C702c （第2期）','2','10','0','索爱C702c','1241712000','1274803200','0','a:5:{s:7:\"deposit\";d:50;s:11:\"start_price\";d:0;s:9:\"end_price\";i:0;s:9:\"amplitude\";d:50;s:6:\"no_top\";i:1;}');");
E_D("replace into `ecs_goods_activity` values('8','P806','团购第2期','1','24','0','P806','1242316800','1274803200','0','a:4:{s:12:\"price_ladder\";a:2:{i:0;a:2:{s:6:\"amount\";i:5;s:5:\"price\";d:1910;}i:1;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:1860;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:1000;}');");
E_D("replace into `ecs_goods_activity` values('10','模板堂ecmoban.com测试商品1','','1','58','0','模板堂ecmoban.com测试商品1','1305129600','1431705600','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:10;s:5:\"price\";d:100;}}s:15:\"restrict_amount\";i:10;s:13:\"gift_integral\";i:10;s:7:\"deposit\";d:10;}');");

require("../../inc/footer.php");
?>