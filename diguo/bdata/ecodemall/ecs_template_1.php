<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_template`;");
E_C("CREATE TABLE `ecs_template` (
  `filename` varchar(30) NOT NULL DEFAULT '',
  `region` varchar(40) NOT NULL DEFAULT '',
  `library` varchar(40) NOT NULL DEFAULT '',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `number` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(60) NOT NULL DEFAULT '',
  `remarks` varchar(30) NOT NULL DEFAULT '',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_template` values('goods','右侧区域','/library/bought_goods.lbi','0','0','0','0','letao','');");
E_D("replace into `ecs_template` values('goods','右侧区域','/library/goods_related.lbi','0','0','0','0','letao','');");
E_D("replace into `ecs_template` values('index','播放器右侧广告','/library/ad_position.lbi','0','30','0','4','letao','');");
E_D("replace into `ecs_template` values('index','小脚丫','/library/cat_articles.lbi','0','15','3','3','letao','');");
E_D("replace into `ecs_template` values('index','首页顶部广告位','/library/ad_position.lbi','0','29','0','4','letao','');");
E_D("replace into `ecs_template` values('index','商品主区域','/library/cat_goods.lbi','2','194','5','1','letao','');");
E_D("replace into `ecs_template` values('index','公告','/library/cat_articles.lbi','0','14','3','3','letao','');");
E_D("replace into `ecs_template` values('index','商品主区域','/library/cat_goods.lbi','1','140','5','1','letao','');");
E_D("replace into `ecs_template` values('index','商品主区域','/library/cat_goods.lbi','0','159','5','1','letao','');");
E_D("replace into `ecs_template` values('index','商品主区域','/library/brands.lbi','3','0','8','0','letao','');");
E_D("replace into `ecs_template` values('index','','/library/auction.lbi','0','0','3','0','letao','');");
E_D("replace into `ecs_template` values('index','','/library/group_buy.lbi','0','0','3','0','letao','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_promotion.lbi','0','0','4','0','letao','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_hot.lbi','0','0','3','0','letao','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_new.lbi','0','0','4','0','letao','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_best.lbi','0','0','3','0','letao','');");
E_D("replace into `ecs_template` values('index','首页左侧区域','/library/category_tree.lbi','0','0','0','0','letao','');");

require("../../inc/footer.php");
?>