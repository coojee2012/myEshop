<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_goods`;");
E_C("CREATE TABLE `ecs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `market_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_goods` values('1','1','8','飞利浦9@9v','ECS000008','0','1','478.79','385.00','颜色:黑 \n','0','1','','0','0','231');");
E_D("replace into `ecs_order_goods` values('2','2','12','摩托罗拉A810','ECS000012','0','1','1179.60','960.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('3','3','17','夏新N7','ECS000017','0','1','2760.00','2300.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('4','4','22','多普达Touch HD','ECS000022','0','1','7198.80','5999.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('5','5','9','诺基亚E66','ECS000009','0','3','2757.60','2200.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('6','5','24','P806','ECS000024','0','1','2400.00','2000.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('7','6','5','索爱原装M2卡读卡器','ECS000005','0','1','24.00','20.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('8','7','9','诺基亚E66','ECS000009','0','1','2757.60','2298.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('9','8','20','三星BC01','ECS000020','0','1','336.00','238.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('10','8','8','飞利浦9@9v','ECS000008','0','1','478.79','385.00','颜色:黑 \n','0','1','','0','0','231');");
E_D("replace into `ecs_order_goods` values('11','9','24','P806','ECS000024','0','1','2400.00','2000.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('12','10','24','P806','ECS000024','0','1','2400.00','0.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('13','11','23','诺基亚N96','ECS000023','0','1','4440.00','3800.00','附加配件: 原装电池 [+100]','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('14','12','20','三星BC01','ECS000020','0','1','336.00','238.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('15','13','12','摩托罗拉A810','ECS000012','0','1','1179.60','960.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('16','14','15','摩托罗拉A810','ECS000015','0','5','705.60','588.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('17','14','20','三星BC01','ECS000020','0','1','336.00','238.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('18','14','22','多普达Touch HD','ECS000022','0','1','7198.80','5999.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('19','14','3','诺基亚原装5800耳机','ECS000002','0','4','81.60','68.00','颜色:银色 \n','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('20','14','9','诺基亚E66','ECS000009','0','2','2757.60','2298.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('21','15','13','诺基亚5320 XpressMusic','ECS000013','0','3','1583.20','1210.00','颜色:红[10] \n','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('22','15','14','诺基亚5800XM','ECS000014','0','1','3150.00','2493.75','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('23','15','24','P806','ECS000024','0','4','2400.00','1900.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('24','15','9','诺基亚E66','ECS000009','0','1','2757.60','2183.10','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('25','15','8','飞利浦9@9v','ECS000008','0','3','478.79','379.05','颜色:黑 \n','0','1','','0','0','231');");
E_D("replace into `ecs_order_goods` values('26','16','12','摩托罗拉A810','ECS000012','0','2','1179.60','933.85','','2','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('27','16','1','KD876','ECS000000','0','1','1665.60','1318.60','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('28','17','24','P806','ECS000024','0','1','2400.00','1900.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('29','18','24','P806','ECS000024','0','5','2400.00','100.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('30','19','12','摩托罗拉A810','ECS000012','0','2','1179.60','933.85','','2','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('31','19','24','P806','ECS000024','0','2','2400.00','1850.00','颜色:灰色 \n','2','1','','0','0','167');");
E_D("replace into `ecs_order_goods` values('32','20','68','模板堂ecmoban.com测试商品11','ECS000068','0','1','264.00','220.00','尺码:37 \n','1','1','','0','0','1797');");
E_D("replace into `ecs_order_goods` values('33','20','69','模板堂ecmoban.com测试商品12','ECS000069','0','8','276.00','230.00','','8','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('34','20','67','模板堂ecmoban.com测试商品10','ECS000067','0','1','252.00','210.00','尺码:47 \n','1','1','','0','0','1769');");
E_D("replace into `ecs_order_goods` values('35','20','66','模板堂ecmoban.com测试商品9','ECS000066','0','1','240.00','200.00','尺码:37 \n','1','1','','0','0','1738');");
E_D("replace into `ecs_order_goods` values('36','20','65','模板堂ecmoban.com测试商品8','ECS000065','0','1','228.00','190.00','尺码:47 \n','1','1','','0','0','1710');");
E_D("replace into `ecs_order_goods` values('37','20','64','模板堂ecmoban.com测试商品7','ECS000064','0','1','216.00','180.00','尺码:37 \n','1','1','','0','0','1682');");
E_D("replace into `ecs_order_goods` values('38','20','63','模板堂ecmoban.com测试商品6','ECS000063','0','1','204.00','170.00','尺码:47 \n','1','1','','0','0','1654');");
E_D("replace into `ecs_order_goods` values('39','20','62','模板堂ecmoban.com测试商品5','ECS000062','0','1','192.00','160.00','尺码:37 \n','1','1','','0','0','1623');");
E_D("replace into `ecs_order_goods` values('40','20','61','模板堂ecmoban.com测试商品4','ECS000061','0','1','180.00','150.00','尺码:47 \n','1','1','','0','0','1595');");
E_D("replace into `ecs_order_goods` values('41','20','60','模板堂ecmoban.com测试商品3','ECS000060','0','1','168.00','140.00','尺码:37 \n','1','1','','0','0','1553');");

require("../../inc/footer.php");
?>