<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_link_goods`;");
E_C("CREATE TABLE `ecs_link_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `link_goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_double` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`,`link_goods_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_link_goods` values('69','97','1','1');");
E_D("replace into `ecs_link_goods` values('68','97','1','1');");
E_D("replace into `ecs_link_goods` values('67','97','1','1');");
E_D("replace into `ecs_link_goods` values('66','97','1','1');");
E_D("replace into `ecs_link_goods` values('65','97','1','1');");
E_D("replace into `ecs_link_goods` values('64','97','1','1');");
E_D("replace into `ecs_link_goods` values('63','97','1','1');");
E_D("replace into `ecs_link_goods` values('97','69','1','1');");
E_D("replace into `ecs_link_goods` values('97','68','1','1');");
E_D("replace into `ecs_link_goods` values('97','67','1','1');");
E_D("replace into `ecs_link_goods` values('63','96','1','1');");
E_D("replace into `ecs_link_goods` values('64','96','1','1');");
E_D("replace into `ecs_link_goods` values('65','96','1','1');");
E_D("replace into `ecs_link_goods` values('66','96','1','1');");
E_D("replace into `ecs_link_goods` values('67','96','1','1');");
E_D("replace into `ecs_link_goods` values('68','96','1','1');");
E_D("replace into `ecs_link_goods` values('69','96','1','1');");
E_D("replace into `ecs_link_goods` values('96','69','1','1');");
E_D("replace into `ecs_link_goods` values('96','68','1','1');");
E_D("replace into `ecs_link_goods` values('96','67','1','1');");
E_D("replace into `ecs_link_goods` values('96','66','1','1');");
E_D("replace into `ecs_link_goods` values('96','65','1','1');");
E_D("replace into `ecs_link_goods` values('96','64','1','1');");
E_D("replace into `ecs_link_goods` values('96','63','1','1');");
E_D("replace into `ecs_link_goods` values('69','95','1','1');");
E_D("replace into `ecs_link_goods` values('68','95','1','1');");
E_D("replace into `ecs_link_goods` values('67','95','1','1');");
E_D("replace into `ecs_link_goods` values('66','95','1','1');");
E_D("replace into `ecs_link_goods` values('65','95','1','1');");
E_D("replace into `ecs_link_goods` values('64','95','1','1');");
E_D("replace into `ecs_link_goods` values('63','95','1','1');");
E_D("replace into `ecs_link_goods` values('95','69','1','1');");
E_D("replace into `ecs_link_goods` values('95','68','1','1');");
E_D("replace into `ecs_link_goods` values('95','67','1','1');");
E_D("replace into `ecs_link_goods` values('95','66','1','1');");
E_D("replace into `ecs_link_goods` values('95','65','1','1');");
E_D("replace into `ecs_link_goods` values('95','64','1','1');");
E_D("replace into `ecs_link_goods` values('95','63','1','1');");
E_D("replace into `ecs_link_goods` values('63','94','1','1');");
E_D("replace into `ecs_link_goods` values('64','94','1','1');");
E_D("replace into `ecs_link_goods` values('65','94','1','1');");
E_D("replace into `ecs_link_goods` values('66','94','1','1');");
E_D("replace into `ecs_link_goods` values('63','98','1','1');");
E_D("replace into `ecs_link_goods` values('64','98','1','1');");
E_D("replace into `ecs_link_goods` values('65','98','1','1');");
E_D("replace into `ecs_link_goods` values('67','94','1','1');");
E_D("replace into `ecs_link_goods` values('68','94','1','1');");
E_D("replace into `ecs_link_goods` values('69','94','1','1');");
E_D("replace into `ecs_link_goods` values('94','69','1','1');");
E_D("replace into `ecs_link_goods` values('94','68','1','1');");
E_D("replace into `ecs_link_goods` values('94','67','1','1');");
E_D("replace into `ecs_link_goods` values('94','66','1','1');");
E_D("replace into `ecs_link_goods` values('94','65','1','1');");
E_D("replace into `ecs_link_goods` values('94','64','1','1');");
E_D("replace into `ecs_link_goods` values('94','63','1','1');");
E_D("replace into `ecs_link_goods` values('66','98','1','1');");
E_D("replace into `ecs_link_goods` values('67','98','1','1');");
E_D("replace into `ecs_link_goods` values('68','98','1','1');");
E_D("replace into `ecs_link_goods` values('69','98','1','1');");
E_D("replace into `ecs_link_goods` values('98','69','1','1');");
E_D("replace into `ecs_link_goods` values('98','68','1','1');");
E_D("replace into `ecs_link_goods` values('98','67','1','1');");
E_D("replace into `ecs_link_goods` values('98','66','1','1');");
E_D("replace into `ecs_link_goods` values('98','65','1','1');");
E_D("replace into `ecs_link_goods` values('98','64','1','1');");
E_D("replace into `ecs_link_goods` values('98','63','1','1');");
E_D("replace into `ecs_link_goods` values('97','66','1','1');");
E_D("replace into `ecs_link_goods` values('97','65','1','1');");
E_D("replace into `ecs_link_goods` values('97','64','1','1');");
E_D("replace into `ecs_link_goods` values('97','63','1','1');");
E_D("replace into `ecs_link_goods` values('58','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','58','1','1');");
E_D("replace into `ecs_link_goods` values('59','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','59','1','1');");
E_D("replace into `ecs_link_goods` values('60','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','60','1','1');");
E_D("replace into `ecs_link_goods` values('61','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','61','1','1');");
E_D("replace into `ecs_link_goods` values('62','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','62','1','1');");
E_D("replace into `ecs_link_goods` values('63','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','63','1','1');");
E_D("replace into `ecs_link_goods` values('64','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','64','1','1');");
E_D("replace into `ecs_link_goods` values('65','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','65','1','1');");
E_D("replace into `ecs_link_goods` values('66','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','66','1','1');");
E_D("replace into `ecs_link_goods` values('67','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','67','1','1');");
E_D("replace into `ecs_link_goods` values('68','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','68','1','1');");
E_D("replace into `ecs_link_goods` values('70','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','70','1','1');");
E_D("replace into `ecs_link_goods` values('71','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','71','1','1');");
E_D("replace into `ecs_link_goods` values('72','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','72','1','1');");
E_D("replace into `ecs_link_goods` values('73','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','73','1','1');");
E_D("replace into `ecs_link_goods` values('74','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','74','1','1');");
E_D("replace into `ecs_link_goods` values('75','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','75','1','1');");
E_D("replace into `ecs_link_goods` values('76','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','76','1','1');");
E_D("replace into `ecs_link_goods` values('77','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','77','1','1');");
E_D("replace into `ecs_link_goods` values('78','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','78','1','1');");
E_D("replace into `ecs_link_goods` values('79','69','1','1');");
E_D("replace into `ecs_link_goods` values('69','79','1','1');");
E_D("replace into `ecs_link_goods` values('58','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','58','1','1');");
E_D("replace into `ecs_link_goods` values('59','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','59','1','1');");
E_D("replace into `ecs_link_goods` values('60','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','60','1','1');");
E_D("replace into `ecs_link_goods` values('61','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','61','1','1');");
E_D("replace into `ecs_link_goods` values('62','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','62','1','1');");
E_D("replace into `ecs_link_goods` values('63','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','63','1','1');");
E_D("replace into `ecs_link_goods` values('64','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','64','1','1');");
E_D("replace into `ecs_link_goods` values('65','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','65','1','1');");
E_D("replace into `ecs_link_goods` values('66','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','66','1','1');");
E_D("replace into `ecs_link_goods` values('67','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','67','1','1');");
E_D("replace into `ecs_link_goods` values('70','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','70','1','1');");
E_D("replace into `ecs_link_goods` values('71','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','71','1','1');");
E_D("replace into `ecs_link_goods` values('72','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','72','1','1');");
E_D("replace into `ecs_link_goods` values('73','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','73','1','1');");
E_D("replace into `ecs_link_goods` values('74','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','74','1','1');");
E_D("replace into `ecs_link_goods` values('75','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','75','1','1');");
E_D("replace into `ecs_link_goods` values('76','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','76','1','1');");
E_D("replace into `ecs_link_goods` values('77','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','77','1','1');");
E_D("replace into `ecs_link_goods` values('78','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','78','1','1');");
E_D("replace into `ecs_link_goods` values('79','68','1','1');");
E_D("replace into `ecs_link_goods` values('68','79','1','1');");
E_D("replace into `ecs_link_goods` values('58','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','58','1','1');");
E_D("replace into `ecs_link_goods` values('59','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','59','1','1');");
E_D("replace into `ecs_link_goods` values('60','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','60','1','1');");
E_D("replace into `ecs_link_goods` values('61','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','61','1','1');");
E_D("replace into `ecs_link_goods` values('62','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','62','1','1');");
E_D("replace into `ecs_link_goods` values('63','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','63','1','1');");
E_D("replace into `ecs_link_goods` values('64','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','64','1','1');");
E_D("replace into `ecs_link_goods` values('65','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','65','1','1');");
E_D("replace into `ecs_link_goods` values('66','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','66','1','1');");
E_D("replace into `ecs_link_goods` values('70','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','70','1','1');");
E_D("replace into `ecs_link_goods` values('71','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','71','1','1');");
E_D("replace into `ecs_link_goods` values('72','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','72','1','1');");
E_D("replace into `ecs_link_goods` values('73','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','73','1','1');");
E_D("replace into `ecs_link_goods` values('74','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','74','1','1');");
E_D("replace into `ecs_link_goods` values('75','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','75','1','1');");
E_D("replace into `ecs_link_goods` values('76','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','76','1','1');");
E_D("replace into `ecs_link_goods` values('77','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','77','1','1');");
E_D("replace into `ecs_link_goods` values('78','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','78','1','1');");
E_D("replace into `ecs_link_goods` values('79','67','1','1');");
E_D("replace into `ecs_link_goods` values('67','79','1','1');");
E_D("replace into `ecs_link_goods` values('58','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','58','1','1');");
E_D("replace into `ecs_link_goods` values('59','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','59','1','1');");
E_D("replace into `ecs_link_goods` values('60','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','60','1','1');");
E_D("replace into `ecs_link_goods` values('61','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','61','1','1');");
E_D("replace into `ecs_link_goods` values('62','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','62','1','1');");
E_D("replace into `ecs_link_goods` values('63','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','63','1','1');");
E_D("replace into `ecs_link_goods` values('64','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','64','1','1');");
E_D("replace into `ecs_link_goods` values('65','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','65','1','1');");
E_D("replace into `ecs_link_goods` values('70','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','70','1','1');");
E_D("replace into `ecs_link_goods` values('71','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','71','1','1');");
E_D("replace into `ecs_link_goods` values('72','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','72','1','1');");
E_D("replace into `ecs_link_goods` values('73','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','73','1','1');");
E_D("replace into `ecs_link_goods` values('74','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','74','1','1');");
E_D("replace into `ecs_link_goods` values('75','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','75','1','1');");
E_D("replace into `ecs_link_goods` values('76','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','76','1','1');");
E_D("replace into `ecs_link_goods` values('77','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','77','1','1');");
E_D("replace into `ecs_link_goods` values('78','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','78','1','1');");
E_D("replace into `ecs_link_goods` values('79','66','1','1');");
E_D("replace into `ecs_link_goods` values('66','79','1','1');");
E_D("replace into `ecs_link_goods` values('58','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','58','1','1');");
E_D("replace into `ecs_link_goods` values('59','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','59','1','1');");
E_D("replace into `ecs_link_goods` values('60','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','60','1','1');");
E_D("replace into `ecs_link_goods` values('61','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','61','1','1');");
E_D("replace into `ecs_link_goods` values('62','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','62','1','1');");
E_D("replace into `ecs_link_goods` values('63','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','63','1','1');");
E_D("replace into `ecs_link_goods` values('64','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','64','1','1');");
E_D("replace into `ecs_link_goods` values('70','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','70','1','1');");
E_D("replace into `ecs_link_goods` values('71','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','71','1','1');");
E_D("replace into `ecs_link_goods` values('72','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','72','1','1');");
E_D("replace into `ecs_link_goods` values('73','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','73','1','1');");
E_D("replace into `ecs_link_goods` values('74','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','74','1','1');");
E_D("replace into `ecs_link_goods` values('75','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','75','1','1');");
E_D("replace into `ecs_link_goods` values('76','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','76','1','1');");
E_D("replace into `ecs_link_goods` values('77','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','77','1','1');");
E_D("replace into `ecs_link_goods` values('78','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','78','1','1');");
E_D("replace into `ecs_link_goods` values('79','65','1','1');");
E_D("replace into `ecs_link_goods` values('65','79','1','1');");
E_D("replace into `ecs_link_goods` values('58','64','1','1');");
E_D("replace into `ecs_link_goods` values('64','58','1','1');");
E_D("replace into `ecs_link_goods` values('59','64','1','1');");
E_D("replace into `ecs_link_goods` values('64','59','1','1');");
E_D("replace into `ecs_link_goods` values('60','64','1','1');");
E_D("replace into `ecs_link_goods` values('64','60','1','1');");
E_D("replace into `ecs_link_goods` values('61','64','1','1');");
E_D("replace into `ecs_link_goods` values('64','61','1','1');");
E_D("replace into `ecs_link_goods` values('62','64','1','1');");
E_D("replace into `ecs_link_goods` values('64','62','1','1');");
E_D("replace into `ecs_link_goods` values('63','64','1','1');");
E_D("replace into `ecs_link_goods` values('64','63','1','1');");
E_D("replace into `ecs_link_goods` values('70','64','1','1');");
E_D("replace into `ecs_link_goods` values('64','70','1','1');");
E_D("replace into `ecs_link_goods` values('71','64','1','1');");
E_D("replace into `ecs_link_goods` values('64','71','1','1');");
E_D("replace into `ecs_link_goods` values('72','64','1','1');");
E_D("replace into `ecs_link_goods` values('64','72','1','1');");
E_D("replace into `ecs_link_goods` values('73','64','1','1');");
E_D("replace into `ecs_link_goods` values('64','73','1','1');");
E_D("replace into `ecs_link_goods` values('74','64','1','1');");
E_D("replace into `ecs_link_goods` values('64','74','1','1');");
E_D("replace into `ecs_link_goods` values('75','64','1','1');");
E_D("replace into `ecs_link_goods` values('64','75','1','1');");
E_D("replace into `ecs_link_goods` values('76','64','1','1');");
E_D("replace into `ecs_link_goods` values('64','76','1','1');");
E_D("replace into `ecs_link_goods` values('77','64','1','1');");
E_D("replace into `ecs_link_goods` values('64','77','1','1');");
E_D("replace into `ecs_link_goods` values('78','64','1','1');");
E_D("replace into `ecs_link_goods` values('64','78','1','1');");
E_D("replace into `ecs_link_goods` values('79','64','1','1');");
E_D("replace into `ecs_link_goods` values('64','79','1','1');");
E_D("replace into `ecs_link_goods` values('58','63','1','1');");
E_D("replace into `ecs_link_goods` values('63','58','1','1');");
E_D("replace into `ecs_link_goods` values('59','63','1','1');");
E_D("replace into `ecs_link_goods` values('63','59','1','1');");
E_D("replace into `ecs_link_goods` values('60','63','1','1');");
E_D("replace into `ecs_link_goods` values('63','60','1','1');");
E_D("replace into `ecs_link_goods` values('61','63','1','1');");
E_D("replace into `ecs_link_goods` values('63','61','1','1');");
E_D("replace into `ecs_link_goods` values('62','63','1','1');");
E_D("replace into `ecs_link_goods` values('63','62','1','1');");
E_D("replace into `ecs_link_goods` values('70','63','1','1');");
E_D("replace into `ecs_link_goods` values('63','70','1','1');");
E_D("replace into `ecs_link_goods` values('71','63','1','1');");
E_D("replace into `ecs_link_goods` values('63','71','1','1');");
E_D("replace into `ecs_link_goods` values('72','63','1','1');");
E_D("replace into `ecs_link_goods` values('63','72','1','1');");
E_D("replace into `ecs_link_goods` values('73','63','1','1');");
E_D("replace into `ecs_link_goods` values('63','73','1','1');");
E_D("replace into `ecs_link_goods` values('74','63','1','1');");
E_D("replace into `ecs_link_goods` values('63','74','1','1');");
E_D("replace into `ecs_link_goods` values('75','63','1','1');");
E_D("replace into `ecs_link_goods` values('63','75','1','1');");
E_D("replace into `ecs_link_goods` values('76','63','1','1');");
E_D("replace into `ecs_link_goods` values('63','76','1','1');");
E_D("replace into `ecs_link_goods` values('77','63','1','1');");
E_D("replace into `ecs_link_goods` values('63','77','1','1');");
E_D("replace into `ecs_link_goods` values('78','63','1','1');");
E_D("replace into `ecs_link_goods` values('63','78','1','1');");
E_D("replace into `ecs_link_goods` values('79','63','1','1');");
E_D("replace into `ecs_link_goods` values('63','79','1','1');");

require("../../inc/footer.php");
?>