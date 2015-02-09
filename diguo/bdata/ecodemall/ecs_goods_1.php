<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods`;");
E_C("CREATE TABLE `ecs_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_name_style` varchar(60) NOT NULL DEFAULT '+',
  `click_count` int(10) unsigned NOT NULL DEFAULT '0',
  `brand_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `provider_name` varchar(100) NOT NULL DEFAULT '',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_weight` decimal(10,3) unsigned NOT NULL DEFAULT '0.000',
  `market_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `shop_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `promote_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `promote_start_date` int(11) unsigned NOT NULL DEFAULT '0',
  `promote_end_date` int(11) unsigned NOT NULL DEFAULT '0',
  `warn_number` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `goods_brief` varchar(255) NOT NULL DEFAULT '',
  `goods_desc` text NOT NULL,
  `goods_thumb` varchar(255) NOT NULL DEFAULT '',
  `goods_img` varchar(255) NOT NULL DEFAULT '',
  `original_img` varchar(255) NOT NULL DEFAULT '',
  `is_real` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `is_on_sale` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_alone_sale` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_shipping` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `integral` int(10) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `sort_order` smallint(4) unsigned NOT NULL DEFAULT '100',
  `is_delete` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_best` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_new` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_hot` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_promote` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `bonus_type_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `last_update` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_type` smallint(5) unsigned NOT NULL DEFAULT '0',
  `seller_note` varchar(255) NOT NULL DEFAULT '',
  `give_integral` int(11) NOT NULL DEFAULT '-1',
  `rank_integral` int(11) NOT NULL DEFAULT '-1',
  `suppliers_id` smallint(5) unsigned DEFAULT NULL,
  `is_check` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`goods_id`),
  KEY `goods_sn` (`goods_sn`),
  KEY `cat_id` (`cat_id`),
  KEY `last_update` (`last_update`),
  KEY `brand_id` (`brand_id`),
  KEY `goods_weight` (`goods_weight`),
  KEY `promote_end_date` (`promote_end_date`),
  KEY `promote_start_date` (`promote_start_date`),
  KEY `goods_number` (`goods_number`),
  KEY `sort_order` (`sort_order`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods` values('95','194','ECS000095','易源码商城 ecodemall.com测试商品24','+','0','32','','9999','0.000','156.00','130.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/95_thumb_G_1339236278010.jpg','images/201206/goods_img/95_G_1339236278196.jpg','images/201108/source_img/95_G_1314372488615.jpg','1','','1','1','0','1','1314372072','100','0','0','1','0','0','0','1339238712','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('96','194','ECS000096','易源码商城 ecodemall.com测试商品25','+','1','32','','9999','0.000','156.00','130.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/96_thumb_G_1339236278370.jpg','images/201206/goods_img/96_G_1339236278516.jpg','images/201108/source_img/96_G_1314372446806.jpg','1','','1','1','0','1','1314372085','100','0','0','1','0','0','0','1339238716','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('97','194','ECS000097','易源码商城 ecodemall.com测试商品26','+','0','32','','9999','0.000','156.00','130.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/97_thumb_G_1339236279236.jpg','images/201206/goods_img/97_G_1339236279823.jpg','images/201108/source_img/97_G_1314372397656.jpg','1','','1','1','0','1','1314372397','100','0','0','1','0','0','0','1339238721','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('98','194','ECS000098','易源码商城 ecodemall.com测试商品27','+','0','32','','9999','0.000','156.00','130.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/98_thumb_G_1339236279871.jpg','images/201206/goods_img/98_G_1339236279122.jpg','images/201108/source_img/98_G_1314372408128.jpg','1','','1','1','0','1','1314372408','100','0','0','1','0','0','0','1339238724','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('94','194','ECS000080','易源码商城 ecodemall.com测试商品23','+','0','32','','9999','0.000','156.00','130.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/94_thumb_G_1339236280072.jpg','images/201206/goods_img/94_G_1339236279374.jpg','images/201108/source_img/94_G_1314372475685.jpg','1','','1','1','0','1','1314372056','100','0','0','1','0','0','0','1339238709','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('58','148','ECS000058','易源码商城 ecodemall.com测试商品1','+','21','37','','9999','0.000','144.00','120.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/58_thumb_G_1339236280499.jpg','images/201206/goods_img/58_G_1339236280665.jpg','images/201104/source_img/58_G_1303048810071.jpg','1','','1','1','0','1','1303048810','100','0','0','1','0','0','0','1339238770','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('59','148','ECS000059','易源码商城 ecodemall.com测试商品2','+','1','23','','9999','0.000','156.00','130.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/59_thumb_G_1339236280051.jpg','images/201206/goods_img/59_G_1339236280811.jpg','images/201104/source_img/59_G_1303051911102.jpg','1','','1','1','0','1','1303051644','100','0','1','0','0','0','0','1339238768','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('60','148','ECS000060','易源码商城 ecodemall.com测试商品3','+','2','19','','9998','0.000','168.00','140.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/60_thumb_G_1339236281753.jpg','images/201206/goods_img/60_G_1339236281195.jpg','images/201104/source_img/60_G_1303051982423.jpg','1','','1','1','0','1','1303051982','100','0','0','0','1','0','0','1339238765','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('61','151','ECS000061','易源码商城 ecodemall.com测试商品4','+','3','20','','9998','0.000','180.00','150.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/61_thumb_G_1339236281268.jpg','images/201206/goods_img/61_G_1339236281951.jpg','images/201104/source_img/61_G_1303052034266.jpg','1','','1','1','0','1','1303052034','100','0','0','1','0','0','0','1339238760','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('62','151','ECS000062','易源码商城 ecodemall.com测试商品5','+','1','16','','9998','0.000','192.00','160.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/62_thumb_G_1339236282458.jpg','images/201206/goods_img/62_G_1339236281374.jpg','images/201104/source_img/62_G_1303052116051.jpg','1','','1','1','0','1','1303052116','100','0','1','0','0','0','0','1339238757','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('63','151','ECS000063','易源码商城 ecodemall.com测试商品6','+','2','17','','9998','0.000','204.00','170.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/63_thumb_G_1339236282279.jpg','images/201206/goods_img/63_G_1339236282280.jpg','images/201104/source_img/63_G_1303052179204.jpg','1','','1','1','0','1','1303052179','100','0','0','1','0','0','0','1339238754','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('64','151','ECS000064','易源码商城 ecodemall.com测试商品7','+','1','18','','9998','0.000','216.00','180.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/64_thumb_G_1339236282620.jpg','images/201206/goods_img/64_G_1339236282507.jpg','images/201104/source_img/64_G_1303053147025.jpg','1','','1','1','0','1','1303053147','100','0','0','0','1','0','0','1339238751','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('65','151','ECS000065','易源码商城 ecodemall.com测试商品8','+','3','15','','9998','0.000','228.00','190.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/65_thumb_G_1339236283229.jpg','images/201206/goods_img/65_G_1339236283059.jpg','images/201104/source_img/65_G_1303053167920.jpg','1','','1','1','0','1','1303053167','100','0','0','1','0','0','0','1339238748','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('66','151','ECS000066','易源码商城 ecodemall.com测试商品9','+','2','12','','9998','0.000','240.00','200.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/66_thumb_G_1339236283336.jpg','images/201206/goods_img/66_G_1339236283990.jpg','images/201104/source_img/66_G_1303053214511.jpg','1','','1','1','0','1','1303053214','100','0','1','0','0','0','0','1339238743','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('67','148','ECS000067','易源码商城 ecodemall.com测试商品10','+','6','13','','9998','0.000','252.00','210.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/67_thumb_G_1339236284874.jpg','images/201206/goods_img/67_G_1339236284520.jpg','images/201104/source_img/67_G_1303053295498.jpg','1','','1','1','0','1','1303053295','100','0','0','1','0','0','0','1339238739','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('68','148','ECS000068','易源码商城 ecodemall.com测试商品11','+','5','14','','9998','0.000','264.00','220.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/68_thumb_G_1339236284355.jpg','images/201206/goods_img/68_G_1339236284693.jpg','images/201104/source_img/68_G_1303053335374.jpg','1','','1','1','0','1','1303053335','100','0','0','0','1','0','0','1339238737','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('69','148','ECS000069','易源码商城 ecodemall.com测试商品12','+','90','39','','9991','0.000','276.00','230.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/69_thumb_G_1339236284287.jpg','images/201206/goods_img/69_G_1339236284859.jpg','images/201104/source_img/69_G_1303053366245.jpg','1','','1','1','0','1','1303053366','100','0','0','1','0','0','0','1339238733','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('70','174','ECS000070','易源码商城 ecodemall.com测试商品13','+','1','40','','9999','0.000','144.00','120.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/70_thumb_G_1339236285209.jpg','images/201206/goods_img/70_G_1339236285790.jpg','images/201104/source_img/70_G_1303134918600.jpg','1','','1','1','0','1','1303134918','100','0','1','0','0','0','0','1339238662','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('71','174','ECS000071','易源码商城 ecodemall.com测试商品14','+','2','41','','9999','0.000','156.00','130.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/71_thumb_G_1339236285401.jpg','images/201206/goods_img/71_G_1339236285938.jpg','images/201104/source_img/71_G_1303135007001.jpg','1','','1','1','0','1','1303135007','100','0','0','1','0','0','0','1339238666','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('72','174','ECS000072','易源码商城 ecodemall.com测试商品15','+','1','42','','9999','0.000','156.00','130.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/72_thumb_G_1339236285736.jpg','images/201206/goods_img/72_G_1339236285767.jpg','images/201104/source_img/72_G_1303135060499.jpg','1','','1','1','0','1','1303135060','100','0','0','0','1','0','0','1339238671','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('73','174','ECS000073','易源码商城 ecodemall.com测试商品16','+','5','22','','9999','0.000','156.00','130.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/73_thumb_G_1339236286942.jpg','images/201206/goods_img/73_G_1339236286296.jpg','images/201104/source_img/73_G_1303135109207.jpg','1','','1','1','0','1','1303135109','100','0','0','1','0','0','0','1339238676','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('74','174','ECS000074','易源码商城 ecodemall.com测试商品17','+','1','21','','9999','0.000','156.00','130.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/74_thumb_G_1339236286472.jpg','images/201206/goods_img/74_G_1339236286467.jpg','images/201104/source_img/74_G_1303135211910.jpg','1','','1','1','0','1','1303135211','100','0','1','0','0','0','0','1339238680','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('75','174','ECS000075','易源码商城 ecodemall.com测试商品18','+','1','38','','9999','0.000','156.00','130.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/75_thumb_G_1339236286138.jpg','images/201206/goods_img/75_G_1339236286261.jpg','images/201104/source_img/75_G_1303135333671.jpg','1','','1','1','0','1','1303135333','100','0','0','1','0','0','0','1339238686','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('76','174','ECS000076','易源码商城 ecodemall.com测试商品19','+','1','34','','9999','0.000','156.00','130.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/76_thumb_G_1339236287644.jpg','images/201206/goods_img/76_G_1339236287069.jpg','images/201104/source_img/76_G_1303135446436.jpg','1','','1','1','0','1','1303135446','100','0','0','0','1','0','0','1339238691','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('77','174','ECS000077','易源码商城 ecodemall.com测试商品20','+','3','35','','9999','0.000','156.00','130.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/77_thumb_G_1339236287025.jpg','images/201206/goods_img/77_G_1339236287710.jpg','images/201104/source_img/77_G_1303136757361.jpg','1','','1','1','0','1','1303136757','100','0','0','1','0','0','0','1339238696','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('78','174','ECS000078','易源码商城 ecodemall.com测试商品21','+','21','36','','9999','0.000','156.00','130.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/78_thumb_G_1339236287428.jpg','images/201206/goods_img/78_G_1339236287628.jpg','images/201104/source_img/78_G_1303136848018.jpg','1','','1','1','0','1','1303136848','100','0','1','0','0','0','0','1339238699','11','','-1','-1','0','0');");
E_D("replace into `ecs_goods` values('79','174','ECS000079','易源码商城 ecodemall.com测试商品22','+','56','32','','9999','0.000','156.00','130.00','0.00','0','0','1','','','<p style=\"text-align: center\">&nbsp;</p>\r\n<p style=\"text-align: center\"><img alt=\"\"  src=\"./images/upload/Image/bb.jpg\" /></p>','images/201206/thumb_img/79_thumb_G_1339236288949.jpg','images/201206/goods_img/79_G_1339236288705.jpg','images/201104/source_img/79_G_1303136904494.jpg','1','','1','1','0','1','1303136904','100','0','0','1','0','0','0','1339238703','11','','-1','-1','0','0');");

require("../../inc/footer.php");
?>