<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_gallery`;");
E_C("CREATE TABLE `ecs_goods_gallery` (
  `img_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_desc` varchar(255) NOT NULL DEFAULT '',
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`img_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_gallery` values('110','98','images/201206/goods_img/98_P_1339236288795.jpg','','images/201206/thumb_img/98_thumb_P_1339236288582.jpg','images/201108/source_img/98_P_1314372408640.jpg');");
E_D("replace into `ecs_goods_gallery` values('111','96','images/201206/goods_img/96_P_1339236288964.jpg','','images/201206/thumb_img/96_thumb_P_1339236288029.jpg','images/201108/source_img/96_P_1314372446358.jpg');");
E_D("replace into `ecs_goods_gallery` values('109','97','images/201206/goods_img/97_P_1339236288618.jpg','','images/201206/thumb_img/97_thumb_P_1339236289669.jpg','images/201108/source_img/97_P_1314372397399.jpg');");
E_D("replace into `ecs_goods_gallery` values('113','95','images/201206/goods_img/95_P_1339236289492.jpg','','images/201206/thumb_img/95_thumb_P_1339236289251.jpg','images/201108/source_img/95_P_1314372488320.jpg');");
E_D("replace into `ecs_goods_gallery` values('76','60','images/201206/goods_img/60_P_1339236289811.jpg','','images/201206/thumb_img/60_thumb_P_1339236289444.jpg','images/201104/source_img/60_P_1303051982443.jpg');");
E_D("replace into `ecs_goods_gallery` values('75','59','images/201206/goods_img/59_P_1339236289349.jpg','','images/201206/thumb_img/59_thumb_P_1339236289532.jpg','images/201104/source_img/59_P_1303051911403.jpg');");
E_D("replace into `ecs_goods_gallery` values('73','58','images/201206/goods_img/58_P_1339236289957.jpg','','images/201206/thumb_img/58_thumb_P_1339236289801.jpg','images/201104/source_img/58_P_1303048810978.jpg');");
E_D("replace into `ecs_goods_gallery` values('82','66','images/201206/goods_img/66_P_1339236289503.jpg','','images/201206/thumb_img/66_thumb_P_1339236289708.jpg','images/201104/source_img/66_P_1303053214454.jpg');");
E_D("replace into `ecs_goods_gallery` values('81','65','images/201206/goods_img/65_P_1339236289384.jpg','','images/201206/thumb_img/65_thumb_P_1339236289856.jpg','images/201104/source_img/65_P_1303053167467.jpg');");
E_D("replace into `ecs_goods_gallery` values('80','64','images/201206/goods_img/64_P_1339236289125.jpg','','images/201206/thumb_img/64_thumb_P_1339236290516.jpg','images/201104/source_img/64_P_1303053147696.jpg');");
E_D("replace into `ecs_goods_gallery` values('79','63','images/201206/goods_img/63_P_1339236290547.jpg','','images/201206/thumb_img/63_thumb_P_1339236290460.jpg','images/201104/source_img/63_P_1303052180332.jpg');");
E_D("replace into `ecs_goods_gallery` values('78','62','images/201206/goods_img/62_P_1339236290426.jpg','','images/201206/thumb_img/62_thumb_P_1339236290795.jpg','images/201104/source_img/62_P_1303052116821.jpg');");
E_D("replace into `ecs_goods_gallery` values('77','61','images/201206/goods_img/61_P_1339236290776.jpg','','images/201206/thumb_img/61_thumb_P_1339236290019.jpg','images/201104/source_img/61_P_1303052034300.jpg');");
E_D("replace into `ecs_goods_gallery` values('112','94','images/201206/goods_img/94_P_1339236290610.jpg','','images/201206/thumb_img/94_thumb_P_1339236290021.jpg','images/201108/source_img/94_P_1314372475753.jpg');");
E_D("replace into `ecs_goods_gallery` values('83','67','images/201206/goods_img/67_P_1339236290628.jpg','','images/201206/thumb_img/67_thumb_P_1339236290024.jpg','images/201104/source_img/67_P_1303053295983.jpg');");
E_D("replace into `ecs_goods_gallery` values('84','68','images/201206/goods_img/68_P_1339236290697.jpg','','images/201206/thumb_img/68_thumb_P_1339236290816.jpg','images/201104/source_img/68_P_1303053335590.jpg');");
E_D("replace into `ecs_goods_gallery` values('85','69','images/201206/goods_img/69_P_1339236290793.jpg','','images/201206/thumb_img/69_thumb_P_1339236291219.jpg','images/201104/source_img/69_P_1303053366403.jpg');");
E_D("replace into `ecs_goods_gallery` values('86','70','images/201206/goods_img/70_P_1339236291216.jpg','','images/201206/thumb_img/70_thumb_P_1339236291963.jpg','images/201104/source_img/70_P_1303134918861.jpg');");
E_D("replace into `ecs_goods_gallery` values('87','71','images/201206/goods_img/71_P_1339236291047.jpg','','images/201206/thumb_img/71_thumb_P_1339236291302.jpg','images/201104/source_img/71_P_1303135007593.jpg');");
E_D("replace into `ecs_goods_gallery` values('88','72','images/201206/goods_img/72_P_1339236291108.jpg','','images/201206/thumb_img/72_thumb_P_1339236291107.jpg','images/201104/source_img/72_P_1303135060716.jpg');");
E_D("replace into `ecs_goods_gallery` values('89','73','images/201206/goods_img/73_P_1339236291380.jpg','','images/201206/thumb_img/73_thumb_P_1339236291736.jpg','images/201104/source_img/73_P_1303135109865.jpg');");
E_D("replace into `ecs_goods_gallery` values('90','74','images/201206/goods_img/74_P_1339236291479.jpg','','images/201206/thumb_img/74_thumb_P_1339236291704.jpg','images/201104/source_img/74_P_1303135211266.jpg');");
E_D("replace into `ecs_goods_gallery` values('91','75','images/201206/goods_img/75_P_1339236291266.jpg','','images/201206/thumb_img/75_thumb_P_1339236291672.jpg','images/201104/source_img/75_P_1303135333613.jpg');");
E_D("replace into `ecs_goods_gallery` values('92','76','images/201206/goods_img/76_P_1339236291884.jpg','','images/201206/thumb_img/76_thumb_P_1339236292901.jpg','images/201104/source_img/76_P_1303135446151.jpg');");
E_D("replace into `ecs_goods_gallery` values('93','77','images/201206/goods_img/77_P_1339236292392.jpg','','images/201206/thumb_img/77_thumb_P_1339236292175.jpg','images/201104/source_img/77_P_1303136757313.jpg');");
E_D("replace into `ecs_goods_gallery` values('94','78','images/201206/goods_img/78_P_1339236292708.jpg','','images/201206/thumb_img/78_thumb_P_1339236292757.jpg','images/201104/source_img/78_P_1303136848184.jpg');");
E_D("replace into `ecs_goods_gallery` values('95','79','images/201206/goods_img/79_P_1339236292153.jpg','','images/201206/thumb_img/79_thumb_P_1339236292034.jpg','images/201104/source_img/79_P_1303136904464.jpg');");

require("../../inc/footer.php");
?>