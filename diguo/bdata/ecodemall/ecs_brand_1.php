<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_brand`;");
E_C("CREATE TABLE `ecs_brand` (
  `brand_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL DEFAULT '',
  `brand_logo` varchar(80) NOT NULL DEFAULT '',
  `brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`brand_id`),
  KEY `is_show` (`is_show`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_brand` values('37','达芙妮','1303051115292225225.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('38','千百度','1303051124428290241.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('34','梦特娇','1303051087991142924.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('35','奥 康','1303051098492633692.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('36','斯凯奇','1303051108835243536.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('32','SALO','1303051060063656510.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('33','骆驼','1303051072920253321.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('29','探路者','1303051019277612306.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('30','骆驼队长','1303051031839576360.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('31','LaSportiva','1303051046498697607.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('27','鸿星尔克','1303050943836421506.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('28','保罗盖帝','1303051009715674716.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('24','crocs','1303050898829550831.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('25','万斯','1303050911013740107.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('26','爱威亚','1303050929979697684.gif','','http://','1','1');");
E_D("replace into `ecs_brand` values('21','李宁','1303050843455547536.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('22','安踏','1303050855861835850.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('23','361度','1303050874202259545.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('19','卡 帕','1303050810307093631.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('20','新百伦','1303050832251647173.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('16','阿迪','1303050779014352048.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('17','匡威','1303050791560648910.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('18','彪马','1303050801334770203.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('15','三叶草','1303050762969561992.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('12','其 乐','1303050723823575211.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('13','耐克','1303050737236555387.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('14','阿迪达斯','1303050753040010783.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('39','雅客士','1303051145361330359.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('40','DRAGONSEA','1303051160546823820.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('41','回 力','1303051173847413047.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('42','FTP','1303051180295446552.gif','','http://','50','1');");
E_D("replace into `ecs_brand` values('43','策 乐','1303051196810785901.gif','','http://#','50','1');");

require("../../inc/footer.php");
?>