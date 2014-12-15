<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_attribute`;");
E_C("CREATE TABLE `ecs_attribute` (
  `attr_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_name` varchar(60) NOT NULL DEFAULT '',
  `attr_input_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_values` text NOT NULL,
  `attr_index` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_linked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `attr_group` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`attr_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=221 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_attribute` values('220','11','产地','1','0','中国\r\n越南\r\n日本\r\n韩国\r\n美国\r\n英国\r\n德国\r\n俄罗斯','0','0','0','0');");
E_D("replace into `ecs_attribute` values('218','11','尺码','1','1','37\r\n38\r\n39\r\n40\r\n41\r\n42\r\n43\r\n44\r\n45\r\n46\r\n47','0','0','0','0');");
E_D("replace into `ecs_attribute` values('219','11','材质','1','0','牛皮\r\n织物\r\n合成革\r\n混合面\r\n绒面皮\r\nEVA\r\n人造革\r\n网布','0','0','0','0');");
E_D("replace into `ecs_attribute` values('217','11','颜色','1','0','黑色\r\n白色\r\n红色\r\n蓝色\r\n绿色\r\n黄色\r\n橙色\r\n紫色','0','0','0','0');");

require("../../inc/footer.php");
?>