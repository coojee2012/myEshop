<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cat_recommend`;");
E_C("CREATE TABLE `ecs_cat_recommend` (
  `cat_id` smallint(5) NOT NULL,
  `recommend_type` tinyint(1) NOT NULL,
  PRIMARY KEY (`cat_id`,`recommend_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cat_recommend` values('3','1');");
E_D("replace into `ecs_cat_recommend` values('3','2');");
E_D("replace into `ecs_cat_recommend` values('3','3');");
E_D("replace into `ecs_cat_recommend` values('5','1');");
E_D("replace into `ecs_cat_recommend` values('5','2');");
E_D("replace into `ecs_cat_recommend` values('5','3');");
E_D("replace into `ecs_cat_recommend` values('12','1');");
E_D("replace into `ecs_cat_recommend` values('12','2');");
E_D("replace into `ecs_cat_recommend` values('12','3');");
E_D("replace into `ecs_cat_recommend` values('13','3');");
E_D("replace into `ecs_cat_recommend` values('14','2');");
E_D("replace into `ecs_cat_recommend` values('14','3');");
E_D("replace into `ecs_cat_recommend` values('15','1');");
E_D("replace into `ecs_cat_recommend` values('15','2');");
E_D("replace into `ecs_cat_recommend` values('16','3');");
E_D("replace into `ecs_cat_recommend` values('17','3');");
E_D("replace into `ecs_cat_recommend` values('18','3');");
E_D("replace into `ecs_cat_recommend` values('19','3');");
E_D("replace into `ecs_cat_recommend` values('20','3');");
E_D("replace into `ecs_cat_recommend` values('21','3');");
E_D("replace into `ecs_cat_recommend` values('22','3');");
E_D("replace into `ecs_cat_recommend` values('23','3');");
E_D("replace into `ecs_cat_recommend` values('24','3');");
E_D("replace into `ecs_cat_recommend` values('25','3');");
E_D("replace into `ecs_cat_recommend` values('26','3');");
E_D("replace into `ecs_cat_recommend` values('27','3');");
E_D("replace into `ecs_cat_recommend` values('28','3');");
E_D("replace into `ecs_cat_recommend` values('29','3');");
E_D("replace into `ecs_cat_recommend` values('30','3');");
E_D("replace into `ecs_cat_recommend` values('31','3');");
E_D("replace into `ecs_cat_recommend` values('32','3');");
E_D("replace into `ecs_cat_recommend` values('33','3');");
E_D("replace into `ecs_cat_recommend` values('34','3');");
E_D("replace into `ecs_cat_recommend` values('35','3');");
E_D("replace into `ecs_cat_recommend` values('36','3');");
E_D("replace into `ecs_cat_recommend` values('37','3');");
E_D("replace into `ecs_cat_recommend` values('38','3');");
E_D("replace into `ecs_cat_recommend` values('39','3');");
E_D("replace into `ecs_cat_recommend` values('60','3');");
E_D("replace into `ecs_cat_recommend` values('61','3');");
E_D("replace into `ecs_cat_recommend` values('62','3');");
E_D("replace into `ecs_cat_recommend` values('63','3');");
E_D("replace into `ecs_cat_recommend` values('64','3');");
E_D("replace into `ecs_cat_recommend` values('65','3');");
E_D("replace into `ecs_cat_recommend` values('66','3');");
E_D("replace into `ecs_cat_recommend` values('67','3');");
E_D("replace into `ecs_cat_recommend` values('68','3');");
E_D("replace into `ecs_cat_recommend` values('69','3');");
E_D("replace into `ecs_cat_recommend` values('70','3');");
E_D("replace into `ecs_cat_recommend` values('71','3');");
E_D("replace into `ecs_cat_recommend` values('72','3');");
E_D("replace into `ecs_cat_recommend` values('73','3');");
E_D("replace into `ecs_cat_recommend` values('74','3');");
E_D("replace into `ecs_cat_recommend` values('75','3');");
E_D("replace into `ecs_cat_recommend` values('76','3');");
E_D("replace into `ecs_cat_recommend` values('77','3');");
E_D("replace into `ecs_cat_recommend` values('82','3');");
E_D("replace into `ecs_cat_recommend` values('83','3');");
E_D("replace into `ecs_cat_recommend` values('84','3');");
E_D("replace into `ecs_cat_recommend` values('85','3');");
E_D("replace into `ecs_cat_recommend` values('86','3');");
E_D("replace into `ecs_cat_recommend` values('87','3');");
E_D("replace into `ecs_cat_recommend` values('88','3');");
E_D("replace into `ecs_cat_recommend` values('89','3');");
E_D("replace into `ecs_cat_recommend` values('90','3');");
E_D("replace into `ecs_cat_recommend` values('91','3');");
E_D("replace into `ecs_cat_recommend` values('92','3');");
E_D("replace into `ecs_cat_recommend` values('140','3');");
E_D("replace into `ecs_cat_recommend` values('141','3');");
E_D("replace into `ecs_cat_recommend` values('142','3');");
E_D("replace into `ecs_cat_recommend` values('143','3');");
E_D("replace into `ecs_cat_recommend` values('144','3');");
E_D("replace into `ecs_cat_recommend` values('145','3');");
E_D("replace into `ecs_cat_recommend` values('146','3');");
E_D("replace into `ecs_cat_recommend` values('147','3');");
E_D("replace into `ecs_cat_recommend` values('148','3');");
E_D("replace into `ecs_cat_recommend` values('149','3');");
E_D("replace into `ecs_cat_recommend` values('150','3');");
E_D("replace into `ecs_cat_recommend` values('151','3');");
E_D("replace into `ecs_cat_recommend` values('152','3');");
E_D("replace into `ecs_cat_recommend` values('153','3');");
E_D("replace into `ecs_cat_recommend` values('154','3');");
E_D("replace into `ecs_cat_recommend` values('155','3');");
E_D("replace into `ecs_cat_recommend` values('156','3');");
E_D("replace into `ecs_cat_recommend` values('157','3');");
E_D("replace into `ecs_cat_recommend` values('158','3');");
E_D("replace into `ecs_cat_recommend` values('159','3');");
E_D("replace into `ecs_cat_recommend` values('160','3');");
E_D("replace into `ecs_cat_recommend` values('161','3');");
E_D("replace into `ecs_cat_recommend` values('162','3');");
E_D("replace into `ecs_cat_recommend` values('163','3');");
E_D("replace into `ecs_cat_recommend` values('164','3');");
E_D("replace into `ecs_cat_recommend` values('165','3');");
E_D("replace into `ecs_cat_recommend` values('166','3');");
E_D("replace into `ecs_cat_recommend` values('167','3');");
E_D("replace into `ecs_cat_recommend` values('168','3');");
E_D("replace into `ecs_cat_recommend` values('169','3');");
E_D("replace into `ecs_cat_recommend` values('170','3');");
E_D("replace into `ecs_cat_recommend` values('171','3');");
E_D("replace into `ecs_cat_recommend` values('172','3');");
E_D("replace into `ecs_cat_recommend` values('173','3');");
E_D("replace into `ecs_cat_recommend` values('174','3');");
E_D("replace into `ecs_cat_recommend` values('175','3');");
E_D("replace into `ecs_cat_recommend` values('176','3');");
E_D("replace into `ecs_cat_recommend` values('177','3');");
E_D("replace into `ecs_cat_recommend` values('178','3');");
E_D("replace into `ecs_cat_recommend` values('179','3');");
E_D("replace into `ecs_cat_recommend` values('180','3');");
E_D("replace into `ecs_cat_recommend` values('181','3');");
E_D("replace into `ecs_cat_recommend` values('182','3');");
E_D("replace into `ecs_cat_recommend` values('183','3');");
E_D("replace into `ecs_cat_recommend` values('184','3');");
E_D("replace into `ecs_cat_recommend` values('185','3');");
E_D("replace into `ecs_cat_recommend` values('186','3');");
E_D("replace into `ecs_cat_recommend` values('187','3');");
E_D("replace into `ecs_cat_recommend` values('189','3');");
E_D("replace into `ecs_cat_recommend` values('207','3');");
E_D("replace into `ecs_cat_recommend` values('208','3');");
E_D("replace into `ecs_cat_recommend` values('209','3');");
E_D("replace into `ecs_cat_recommend` values('210','3');");
E_D("replace into `ecs_cat_recommend` values('211','3');");
E_D("replace into `ecs_cat_recommend` values('212','3');");
E_D("replace into `ecs_cat_recommend` values('213','3');");
E_D("replace into `ecs_cat_recommend` values('214','3');");
E_D("replace into `ecs_cat_recommend` values('215','3');");
E_D("replace into `ecs_cat_recommend` values('216','3');");
E_D("replace into `ecs_cat_recommend` values('217','3');");
E_D("replace into `ecs_cat_recommend` values('218','3');");
E_D("replace into `ecs_cat_recommend` values('219','3');");
E_D("replace into `ecs_cat_recommend` values('220','3');");
E_D("replace into `ecs_cat_recommend` values('221','3');");
E_D("replace into `ecs_cat_recommend` values('222','3');");
E_D("replace into `ecs_cat_recommend` values('223','3');");
E_D("replace into `ecs_cat_recommend` values('224','3');");
E_D("replace into `ecs_cat_recommend` values('225','3');");
E_D("replace into `ecs_cat_recommend` values('226','3');");
E_D("replace into `ecs_cat_recommend` values('227','3');");

require("../../inc/footer.php");
?>