<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_article`;");
E_C("CREATE TABLE `ecs_article` (
  `article_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `author` varchar(30) NOT NULL DEFAULT '',
  `author_email` varchar(60) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `article_type` tinyint(1) unsigned NOT NULL DEFAULT '2',
  `is_open` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `file_url` varchar(255) NOT NULL DEFAULT '',
  `open_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`article_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_article` values('1','2','免责条款','','','','','0','1','1292209847','','0','','');");
E_D("replace into `ecs_article` values('2','2','隐私保护','','','','','0','1','1292209847','','0','','');");
E_D("replace into `ecs_article` values('3','2','咨询热点','','','','','0','1','1292209847','','0','','');");
E_D("replace into `ecs_article` values('4','2','联系我们','','','','','0','1','1292209847','','0','','');");
E_D("replace into `ecs_article` values('5','2','公司简介','','','','','0','1','1292209847','','0','','');");
E_D("replace into `ecs_article` values('6','-1','用户协议','','','','','0','1','1292209847','','0','','');");
E_D("replace into `ecs_article` values('7','4','三星电子宣布将在中国发布15款3G手机','<p>全球领先的电子产品及第二大移动通信终端制造商三星电子今天在北京宣布，为全面支持中国开展3G移动通信业务，将在3G服务正式商用之际，向中国市场推出 15款3G手机。这些产品分别支持中国三大无线运营商的各种3G服务，并已经得到运营商的合作认可。凭借在电子和通信领域的整体技术实力和对消费者的准确 把握，三星电子已经开始全面发力中国的3G移动通信市场。<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;2009年1月，中国政府宣布正式启动3G移动通信服务。并根据中国的实际情况，决定由三大运营商分别采用全部三种3G网络制式，&nbsp;即以中国自主知识产权为核心的TD-SCDMA，以欧洲为主要市场的WCDMA和源自北美的CDMA2000技术。<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;多 年来，三星电子秉承&ldquo;做中国人民喜爱的企业，贡献于中国社会的企业&rdquo;的企业理念，准确地把握了中国社会的发展和市场的需求，推出了一系列深受中国消费者喜 爱的电子产品。为了配合中国推进具有自主知识产权的3G移动通信标准TD-SCDMA，&nbsp;三星电子从2000年开始在中国设立了通信技术研究院，&nbsp;开始进 行TD-SCDMA技术的研究。作为最早承诺支持中国3G标准的手机制造企业，三星电子已经先后投入了上亿元的研究费用，&nbsp;组建了几百人的研发团队。推出 的TD-SCDMA制式的产品，不仅通过了各级权威部门的试验和检测，也经历了2008年北京奥运会的现场考验。此次为中国移动定制的TD-SCDMA手 机，包括了满足高端商务需求的双待产品B7702C，以及数字电视手机、多媒体手机和时尚手机。<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;作为世界第二大手机制造企业，三 星电子已经在全球3G市场积累了多年的技术和市场经验。最新的统计表明，在完全采用WCDMA标准的欧洲，三星电子的市场份额已经排名第二。在为中国联通 准备的产品中，不仅包括能够支持HSDPA的高端多媒体手机S7520U，也涵盖了能够支持高速上网、在线电影、在线音乐等适合不同消费需求的各种产品。<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;而 在主要采用CDMA2000技术的北美市场，三星电子也取得了市场份额的第一名。即将陆续上市的支持中国电信3G服务的EVDO产品，有高端商务手机 W709。该机能够支持EVDO/GSM的双网双待功能，含800万像素拍摄系统。其他产品还包括音乐手机M609，双模手机W239，以及时尚设计的 F539等。<br />\n<br />\n&nbsp;&nbsp;&nbsp;&nbsp;作为世界上少数能够提供支持三种3G标准的终端厂商，三星电子正利用其在通信、半导体、显示器以及数字多媒体等方面 的优势，加快产品数字融合的进程。除上述3G手机产品外，三星电子也于近期推出了用于3G网络的上网卡和网络笔记本电脑。三星电子专务、无线事业部大中华 区高级副总裁卢基学先生说，&ldquo;上述15款新品，&nbsp;只是我们二季度新产品的一部分。随着中国3G移动通信市场的不断扩大，三星还将推出更多适合中国市场的终 端产品，以满足消费者对于通信和数字产品的不同需求。三星也将积极配合运营商业务的发展计划，加快技术和应用的研发。中国3G的移动通信市场前景将是非常 明亮的。&rdquo;</p>','','','','0','1','1241426864','','0','http://','');");
E_D("replace into `ecs_article` values('8','4','诺基亚牵手移动 5款热门TD手机机型推荐','<table width=\"100%\" cellspacing=\"0\" cellpadding=\"4\" align=\"center\" class=\"tableborder\">\r\n<tbody>\r\n<tr>\r\n<td width=\"180\" valign=\"top\" class=\"altbg4\">&nbsp;</td>\r\n<td height=\"100%\" valign=\"top\" class=\"altbg3\">\r\n<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"padding: 5px; table-layout: fixed; width: 973px; height: 2195px;\">\r\n<tbody>\r\n<tr>\r\n<td valign=\"top\">\r\n<div class=\"bbs_content clearfix\">随着5月17日电信日的来临，自从09年初网民对于3G方面关注越来越多，目前国内3G网络主要有中国移动TD-SCDMA，中国联通WCDMA以及 中国电信的CDMA2000这三种制式。到底是哪一种网络制式能让消费者满意，相信好多消费者都难以判断。<br />\r\n<br />\r\n而作为3G网络最主要的组 成部分-手持终端（手机） ，相信也是好多消费者关注的焦点。目前，中国移动TD-SCDMA手机机型频频爆出，其中不乏亮点产品，像联想联想 Ophone、诺基亚、多普达 Magic等，下面就让笔者与大家一起来了解TD-SCDMA网络制式下的几款强势机型吧。<br />\r\n<br />\r\n诺基亚TD-SCDMA手机　型号：待定　参考报价：尚未上市<br />\r\n<br />\r\n随着国内3G网络发展速度加快及众多手机厂商纷纷跟进，诺基亚终于推出TD-SCDMA手机，这款诺基亚的首台TD-SCDMA测试手机型号目前仍无法 得知，但从键盘及菜单设计来看，我们可以是知道其并没有采用S60操作系统，只是配备了S40系统，机身直板造型与早期热卖的6300有几分相像。<br />\r\n<br />\r\n<p><img width=\"450\" alt=\"\" src=\"http://dstatic.esqimg.com/4812278/1.jpg\" style=\"display: block;\" /></p>\r\n<br />\r\n<br />\r\n图为：诺基亚TD-SCDMA手机<br />\r\n<br />\r\n虽然没有更多的参数资料，但是从曝光的图片我们可以知道这款诺基亚TD-SCDMA手机必定配备了QVGA分辨率的屏幕以及320万像素的摄像头，而标准的MP3以及蓝牙等功能自然不会缺少，在功能方面不会比以往的S40手机逊色。<br />\r\n<br />\r\n<p><img width=\"450\" alt=\"\" src=\"http://dstatic.esqimg.com/4812279/2.jpg\" style=\"display: block;\" /></p>\r\n<br />\r\n<br />\r\n图为：诺基亚TD-SCDMA手机<br />\r\n<br />\r\n这款诺基亚的TD手机最大的卖点便是提供了对TD-HSDPA技术的支持，最大的功能特色便是该技术被看为是TD网络下一步的演进技术，能够同时适用于 WCDMA和TD-SCDMA两种不同的网络支持，能够很好的支持非对称的数据业务，也就是说这款诺基亚手机的用户即便在全球漫游都能够使用到3G网络。 而其机身前置的摄像头也更是证实了其3G手机的身份。<br />\r\n<br />\r\n<p><img width=\"450\" alt=\"\" src=\"http://dstatic.esqimg.com/4812280/3.jpg\" style=\"display: block;\" /></p>\r\n<p><br />\r\n<br />\r\n图为：诺基亚TD-SCDMA手机<br />\r\n<br />\r\n从目前曝光的测试情况来看，通过这款诺基亚TD手机连接网络，其下载速度能够稳定在1.3Mbps左右，不过根据国内有些媒体的报道，诺基亚官方已经证实将于今天下半年配合运营商中国移动对出自己的第一款TD-SCDMA制式的S60手机，大家要拭目以待了。</p>\r\n<p>&nbsp;</p>\r\n图为：诺基亚TD-SCDMA手机<br />\r\n<br />\r\n最后较为耐人寻味的便是目前有业内人士指出目前曝光的的诺基亚TD手机其实是去年夏季就出现过的 TD测试手机，但是随着诺基亚拥有部分股份的TD芯片厂商&ldquo;凯明&rdquo;的倒闭，这款机型也就被取消了。尽管对于目前这款诺基亚的TD测试手机的身份尚无官方的 消息，但是诺基亚将推出TD手机遗失毫无悬念的事情了，相信大家也希望在TD制式下能够有更多的手机可以选择。</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>','','','','0','1','1241427051','','0','http://','');");
E_D("replace into `ecs_article` values('9','5','售后流程','','','','','0','1','1242576700','','0','http://','');");
E_D("replace into `ecs_article` values('10','5','购物流程','','','','','0','1','1242576717','','0','http://','');");
E_D("replace into `ecs_article` values('11','5','订购方式','','','','','0','1','1242576727','','0','http://','');");
E_D("replace into `ecs_article` values('45','14','[分享] 邀请好友返现佣金现可领取','','','','','0','1','1313675164','','0','http://','');");
E_D("replace into `ecs_article` values('46','15','[公益] 乐淘小脚丫诞生记','','','','','0','1','1313675196','','0','http://','');");
E_D("replace into `ecs_article` values('47','15','[公益] 乐淘小脚丫开启河北第一','','','','','0','1','1313675216','','0','http://','');");
E_D("replace into `ecs_article` values('48','15','[分享] 邀请好友返现佣金现可领取','','','','','0','1','1313675227','','0','http://','');");
E_D("replace into `ecs_article` values('15','7','货到付款区域','','','','','0','1','1242577023','','0','http://','');");
E_D("replace into `ecs_article` values('16','7','配送支付智能查询 ','','','','','0','1','1242577032','','0','http://','');");
E_D("replace into `ecs_article` values('17','7','支付方式说明','','','','','0','1','1242577041','','0','http://','');");
E_D("replace into `ecs_article` values('18','10','资金管理','','','','','0','1','1242577127','','0','user.php?act=account_log','');");
E_D("replace into `ecs_article` values('19','10','我的收藏','','','','','0','1','1242577178','','0','user.php?act=collection_list','');");
E_D("replace into `ecs_article` values('20','10','我的订单','','','','','0','1','1242577199','','0','user.php?act=order_list','');");
E_D("replace into `ecs_article` values('43','14','[周年庆] 全场满200立减100元','','','','','0','1','1313675147','','0','http://','');");
E_D("replace into `ecs_article` values('44','14','[活动] 手机乐淘下单立减10元','','','','','0','1','1313675154','','0','http://','');");
E_D("replace into `ecs_article` values('24','9','网站故障报告','','','','','0','1','1242577432','','0','http://','');");
E_D("replace into `ecs_article` values('25','9','选机咨询 ','','','','','0','1','1242577448','','0','http://','');");
E_D("replace into `ecs_article` values('26','9','投诉与建议 ','','','','','0','1','1242577459','','0','http://','');");
E_D("replace into `ecs_article` values('27','4','800万像素超强拍照机 LG Viewty Smart再曝光','','','','','0','1','1242577702','','0','http://news.imobile.com.cn/index-a-view-id-66790.html','');");
E_D("replace into `ecs_article` values('36','12','高档羊绒,奢华兔毛,打造冬日俏佳人!','','','','','0','1','1298819035','','0','http://','');");
E_D("replace into `ecs_article` values('37','12','李宁新品劲爆4.8折 欢迎抢购','','','','','0','1','1298819060','','0','http://','');");
E_D("replace into `ecs_article` values('38','12','好乐买用户调查问卷','','','','','0','1','1298819086','','0','http://','');");
E_D("replace into `ecs_article` values('39','12','鸿星尔克【特惠巨献】全场83元起','','','','','0','1','1298819107','','0','http://','');");
E_D("replace into `ecs_article` values('40','12','网站联盟上线啦！大家一起赚佣金','','','','','0','1','1298819121','','0','http://','');");
E_D("replace into `ecs_article` values('41','12','好乐买获最具投资价值电商10强','','','','','0','1','1298819132','','0','http://','');");
E_D("replace into `ecs_article` values('42','12','专业健体品牌OFFSUN 立省100元','','','','','0','1','1298819150','','0','http://','');");

require("../../inc/footer.php");
?>