<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_order`;");
E_C("CREATE TABLE `ecs_delivery_order` (
  `delivery_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(50) DEFAULT NULL,
  `add_time` int(10) unsigned DEFAULT '0',
  `shipping_id` tinyint(3) unsigned DEFAULT '0',
  `shipping_name` varchar(120) DEFAULT NULL,
  `user_id` mediumint(8) unsigned DEFAULT '0',
  `action_user` varchar(30) DEFAULT NULL,
  `consignee` varchar(60) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `country` smallint(5) unsigned DEFAULT '0',
  `province` smallint(5) unsigned DEFAULT '0',
  `city` smallint(5) unsigned DEFAULT '0',
  `district` smallint(5) unsigned DEFAULT '0',
  `sign_building` varchar(120) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `zipcode` varchar(60) DEFAULT NULL,
  `tel` varchar(60) DEFAULT NULL,
  `mobile` varchar(60) DEFAULT NULL,
  `best_time` varchar(120) DEFAULT NULL,
  `postscript` varchar(255) DEFAULT NULL,
  `how_oos` varchar(120) DEFAULT NULL,
  `insure_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `shipping_fee` decimal(10,2) unsigned DEFAULT '0.00',
  `update_time` int(10) unsigned DEFAULT '0',
  `suppliers_id` smallint(5) DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `agency_id` smallint(5) unsigned DEFAULT '0',
  PRIMARY KEY (`delivery_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_order` values('1','20090615054961769','2009061585887','15','2009061585884','1245044533','3','城际快递','1','admin','刘先生','海兴大厦','1','2','52','502','','ecshop@ecshop.com','','010-25851234','13986765412','','','等待所有商品备齐后再发','0.00','10.00','1245044964','2','1','0');");
E_D("replace into `ecs_delivery_order` values('2','20090615055104671','2009061585887','15','20090615','1245044533','3','城际快递','1','admin','刘先生','海兴大厦','1','2','52','502','','ecshop@ecshop.com','','010-25851234','13986765412','','','等待所有商品备齐后再发','0.00','10.00','1245045061','1','1','0');");
E_D("replace into `ecs_delivery_order` values('3','20090615055780744','2009061585887','15','123232','1245044533','3','城际快递','1','admin','刘先生','海兴大厦','1','2','52','502','','ecshop@ecshop.com','','010-25851234','13986765412','','','等待所有商品备齐后再发','0.00','10.00','1245045443','0','1','0');");
E_D("replace into `ecs_delivery_order` values('4','20090615060281017','2009061525429','16','2009061525121','1245045672','3','城际快递','1','admin','刘先生','海兴大厦','1','2','52','502','','ecshop@ecshop.com','','010-25851234','13986765412','','','等待所有商品备齐后再发','0.00','10.00','1245045723','2','0','0');");
E_D("replace into `ecs_delivery_order` values('5','20090615064331475','2009061503335','17','00906150333512','1245047978','3','城际快递','1','admin','刘先生','海兴大厦','1','2','52','502','','ecshop@ecshop.com','','010-25851234','13986765412','','','等待所有商品备齐后再发','0.00','10.00','1245048189','0','1','0');");
E_D("replace into `ecs_delivery_order` values('6','20110511131117279','2011051108885','20','','1305119203','3','城际快递','0','admin','1111111111','111111111','1','3','37','411','','1111111111111@125.COM','','11111111','','','','等待所有商品备齐后再发','0.00','10.00','1305119511','0','0','0');");

require("../../inc/footer.php");
?>