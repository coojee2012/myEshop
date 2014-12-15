<?php exit;?>a:3:{s:8:"template";a:11:{i:0;s:49:"D:/download/WWW/AAAA/A1064/themes/letao/index.dwt";i:1;s:63:"D:/download/WWW/AAAA/A1064/themes/letao/library/page_header.lbi";i:2;s:63:"D:/download/WWW/AAAA/A1064/themes/letao/library/ad_position.lbi";i:3;s:65:"D:/download/WWW/AAAA/A1064/themes/letao/library/category_tree.lbi";i:4;s:60:"D:/download/WWW/AAAA/A1064/themes/letao/library/index_ad.lbi";i:5;s:64:"D:/download/WWW/AAAA/A1064/themes/letao/library/cat_articles.lbi";i:6;s:62:"D:/download/WWW/AAAA/A1064/themes/letao/library/brands_box.lbi";i:7;s:61:"D:/download/WWW/AAAA/A1064/themes/letao/library/cat_goods.lbi";i:8;s:58:"D:/download/WWW/AAAA/A1064/themes/letao/library/brands.lbi";i:9;s:56:"D:/download/WWW/AAAA/A1064/themes/letao/library/help.lbi";i:10;s:63:"D:/download/WWW/AAAA/A1064/themes/letao/library/page_footer.lbi";}s:7:"expires";i:1369209178;s:8:"maketime";i:1369205578;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="本源码由莎莎源码论坛[bbs.sasadown.cn]提供下载!" />
<meta name="Description" content="本源码由莎莎源码论坛[bbs.sasadown.cn]提供下载!" />
<title>本源码由莎莎源码论坛[bbs.sasadown.cn]提供下载! - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/letao/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|本源码由莎莎源码论坛[bbs.sasadown.cn]提供下载! - Powered by ECShop" href="feed.php" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/index.js"></script><script src="themes/letao/js/SlideTrans.js"></script>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
function changeAtt(t) {
t.lastChild.checked='checked';
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
        if (t.parentNode.childNodes[i].className == 'cattsel') {
            t.parentNode.childNodes[i].className = '';
        }
    }
t.className = "cattsel";
changePrice();
}
</script>
</head>
<body class="index_body">
<div class="top_nav">
<div class="block">
<div class="f_r log">
<ul> <script type="text/javascript" src="js/utils.js"></script>   <font id="ECS_MEMBERZONE">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </font>
</ul>
  <ul class="ul1" onmouseover="this.className='ul1 ul1_on'" onmouseout="this.className='ul1'">
 <a class="a1" href="user.php">我的账户</a>
  <div class="ul1_float">
     <a target="_blank" href="user.php">我的账户</a>
     <a href="user.php?act=order_list">我的订单</a>
     <a href="user.php?act=message_list">我的留言</a>
     <a href="user.php?act=collection_list">我的收藏</a>
     <a href="user.php?act=affiliate">我的推荐</a>
  </div>
 </ul>
 
 
   <ul>
   <li id="topNav" class="clearfix">
    | <a href="user.php" >我的账户</a>
 | <a href="article_cat.php?id=3" >帮助中心</a>
  
 
 
   | 
   
   <img src="themes/letao/images/biao3.gif" style="vertical-align:middle; padding-left:5px;">
   <a style="cursor: pointer; padding:0; color:#fc3398"  
onClick="window.external.AddFavorite(location.href,document.title);">收藏本站</a>
 
 
   </li>
   
   
   
   
   
   
   
   
   
   
   
   
  </ul>
 
  
  
  
 </div>
</div>
</div>
 
<script src="themes/letao/js/js.js"></script>
<script src="themes/letao/js/transport.js"></script>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="block clearfix" style="position:relative; height:95px;">
 <div class="f_l" style=" padding-top:8px; padding-left:33px "><a href="index.php" name="top"><img src="themes/letao/images/logo.gif" /></a></div>
 
<div id="search"  class="clearfix"> 
 
  <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" >
   <input name="keywords" type="text" id="keyword" value="运动鞋" onclick="javascript:this.value=''"         class="B_input"/>
   <input name="imageField" type="submit" value="" class="go" style="cursor:pointer;" />
  <img src="themes/letao/images/biao6.gif">
 
   </form>  
   
    <div class="keys  ">
   <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
           alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
    </script>
    
       <b>热搜：</b>
      <a href="search.php?keywords=%E7%AF%AE%E7%90%83%E9%9E%8B">篮球鞋</a>
      <a href="search.php?keywords=%E6%88%B7%E5%A4%96%E4%BC%91%E9%97%B2%E9%9E%8B">户外休闲鞋</a>
      <a href="search.php?keywords=%E8%B7%91%E6%AD%A5%E9%9E%8B">跑步鞋</a>
      <a href="search.php?keywords=%E6%B2%99%E6%BB%A9%E5%87%89%E9%9E%8B">沙滩凉鞋</a>
      <a href="search.php?keywords=%E8%BD%AF%E6%9C%A8%E6%8B%96%E9%9E%8B">软木拖鞋</a>
      <a href="search.php?keywords=%E5%A4%A7%E7%A0%81%E5%A5%B3%E9%9E%8B">大码女鞋</a>
         
   
  </div>
  
     
 
  
 
</div>
 <script type="text/javascript" src="js/transport.js"></script><div class="cart" id="ECS_CARTINFO">
<div class="f_l">
 554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</div> 
<div class="f_r" style="padding:5px 8px 0 0; ">
<a href="flow.php"><img style="float:left" src="themes/letao/images/jiesuan.gif"></a>
</div> 
</div>
 
  
 
</div>
 
 
<div id="mainNav"  >
<div class="block clearfix">
  <a class="a1  cur " href="index.php"  >首页 </a>
    <ul class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'" >
  <a  class="a1 "  href="category.php?id=140" >男鞋</a>
  </ul>
   <ul class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'" >
  <a  class="a1 "  href="category.php?id=159" >女鞋</a>
  </ul>
   <ul class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'" >
  <a  class="a1 "  href="category.php?id=243" >运动鞋</a>
  </ul>
   <ul class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'" >
  <a  class="a1 "  href="category.php?id=254" >户外</a>
  </ul>
   <ul class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'" >
  <a  class="a1 "  href="category.php?id=194" >童鞋</a>
  </ul>
  
    <div class="meun_r">
    <a href="search.php?intro=new">新品上架</a> | <a style="color:#ffff00" href="#">断码特卖</a>
    </div>
 
 
 
 </div>
</div>
<div class="blank"></div>
<div class="block clearfix" style="overflow:hidden">
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:2:"29";s:3:"num";s:1:"0";}554fcae493e564ee0dc75bdf2ebf94ca
<div class="blank"></div>
<div class="index_l" style="float:left; width:187px;">
 
<img src="themes/letao/images/category_tit.gif" style="float:left">
  <div id="category_tree">
         <dl>
     <dt> <img src="themes/letao/images/tree1.gif"> <a href="category.php?id=159">女鞋</a></dt>
      <dd>
          <a href="category.php?id=174">单鞋</a>
                <a href="category.php?id=228">凉鞋</a>
                <a href="category.php?id=229">拖鞋</a>
                <a href="category.php?id=230">帆布鞋</a>
                <a href="category.php?id=231">平跟鞋</a>
                <a href="category.php?id=232">中跟鞋</a>
                <a href="category.php?id=233">休闲鞋</a>
                <a href="category.php?id=234">运动鞋</a>
                <a href="category.php?id=235">新款区</a>
                <a href="category.php?id=236">特价区</a>
               </dl>
         <dl>
     <dt> <img src="themes/letao/images/tree2.gif"> <a href="category.php?id=140">男鞋</a></dt>
      <dd>
          <a href="category.php?id=237">凉鞋</a>
                <a href="category.php?id=148">商务皮鞋</a>
                <a href="category.php?id=238">拖鞋</a>
                <a href="category.php?id=151">休闲皮鞋</a>
                <a href="category.php?id=239">休闲鞋</a>
                <a href="category.php?id=240">帆布鞋</a>
                <a href="category.php?id=241">新品区</a>
                <a href="category.php?id=242">特价区</a>
               </dl>
         <dl>
     <dt> <img src="themes/letao/images/tree3.gif"> <a href="category.php?id=243">运动鞋</a></dt>
      <dd>
          <a href="category.php?id=244">板鞋</a>
                <a href="category.php?id=245">跑步鞋</a>
                <a href="category.php?id=246">帆布鞋</a>
                <a href="category.php?id=247">休闲鞋</a>
                <a href="category.php?id=248">篮球鞋</a>
                <a href="category.php?id=249">网球鞋</a>
                <a href="category.php?id=250">训练鞋</a>
                <a href="category.php?id=251">足球鞋</a>
                <a href="category.php?id=252">新品区</a>
                <a href="category.php?id=253">特价区</a>
               </dl>
         <dl>
     <dt> <img src="themes/letao/images/tree4.gif"> <a href="category.php?id=254">户外</a></dt>
      <dd>
          <a href="category.php?id=255">户外鞋</a>
                <a href="category.php?id=256">拖鞋</a>
                <a href="category.php?id=257">休闲鞋</a>
                <a href="category.php?id=258">凉鞋</a>
                <a href="category.php?id=259">徒步鞋</a>
                <a href="category.php?id=260">布鞋</a>
                <a href="category.php?id=261">登山鞋</a>
                <a href="category.php?id=262">新品</a>
               </dl>
         <dl>
     <dt> <img src="themes/letao/images/tree5.gif"> <a href="category.php?id=194">童鞋</a></dt>
      <dd>
          <a href="category.php?id=195">篮球鞋</a>
                <a href="category.php?id=196">跑步鞋</a>
                <a href="category.php?id=197">板鞋</a>
                <a href="category.php?id=198">休闲鞋</a>
                <a href="category.php?id=199">帆布鞋</a>
                <a href="category.php?id=201">拖鞋</a>
                <a href="category.php?id=202">登山鞋</a>
                <a href="category.php?id=203">户外鞋</a>
                <a href="category.php?id=204">短靴</a>
                <a href="category.php?id=205">中筒靴</a>
                <a href="category.php?id=206">凉鞋</a>
               </dl>
     
  </div>
 
<div class="blank"></div>
</div>
<div style="float:right; width:792px">
<script src="themes/letao/js/jquery-1.4.2.min.js"></SCRIPT>
<script src="themes/letao/js/index.js"></SCRIPT>
 
<style type="text/css">
<!--
 
#top_ad {
	WIDTH: 550px; float:left
}
#top_ad_txt {
	WIDTH: 550px; BACKGROUND: #7b7a7a
}
#top_ad_txt LI {
	WIDTH: 109px; BACKGROUND: #767971; FLOAT: left; HEIGHT: 42px; line-height:18px; text-align:center;    BORDER-RIGHT: #cac9c7 1px solid
}
#top_ad_txt LI A {
	COLOR: white; TEXT-DECORATION: none
}
#top_ad_txt LI.current { background:url(themes/letao/images/biao9.gif) center 38px no-repeat #37a7d7 ; 
 
}
#top_ad_txt LI.current P {
 
}
#top_ad_txt LI P {
	MARGIN: 3px 0px 0px  0px
}
#top_ad_img {
	POSITION: relative; HEIGHT:280px
}
#top_ad_img A {
	POSITION: absolute; DISPLAY: none
}
#top_ad_txt {
	POSITION: relative
}
-->
</style>
 
<script src="themes/letao/js/index.js"></script>
<DIV id=top_ad>
<DIV id=top_ad_img>
<A style="DISPLAY: block" href="#" target=_blank>
<IMG src="a1.jpg" gid="1">
</A> 
<A href="#" target=_blank>
<IMG src="a2.jpg" gid="2">
</A> 
<A href="#" target=_blank>
<IMG src="a3.jpg" gid="3"></A> 
<A href="#" target=_blank>
<IMG src="a4.jpg" gid="4"></A> 
<A href="#" target=_blank>
<IMG src="a5.jpg" gid="5"></A> 
</DIV>
<UL id=top_ad_txt>
  <LI class=current gid="1">
  <A href="#" target=_blank>
  <P>乐淘三周年庆<br/>九元秒杀</P>
  </A>
  </LI>
  <LI gid="2">
  <A href="#" target=_blank>
  <P>精品户外专场<br/>168元起</P>
  </A>
  </LI>
  <LI gid="3"><A href="#" target=_blank>
  <P>男鞋秋季新品<br/>219元起</P>
  </A>
  </LI>
  <LI  gid="4">
  <A href="#" target=_blank>
  <P>女鞋店庆专场<br/>119元起</P>
  </A>
  </LI>
   <LI style="BORDER-RIGHT: #7b7a7a 1px solid" gid="5">
  <A href="#" target=_blank>
  <P>高镫真皮凉鞋<br/>89元限时抢</P>
  </A>
  </LI>
  </UL>
  </div><div style="float:right; width:230px">
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:2:"30";s:3:"num";s:1:"0";}554fcae493e564ee0dc75bdf2ebf94ca
<div class="blank"></div>
 
<div class="gonggao_box  ">
<div class="ff_1">
    <h2 id="ECS_tree1" class=" tabFront" style="border-left:1px solid #d5d5d5;border-right:1px solid #d5d5d5; width:114px;  ">公告</h2>
    <h2 id="ECS_tree2" class=" tabBack" style="border-right:1px solid #d5d5d5;">小脚丫</h2>
</div>   
<div style="clear:both"></div>
<div  id="ECS_tree1_BODY">
<div class="box">
 <div class="box_1 art">
  <h3>
  <span> 公告 </span>
  <a style="float:right; padding-top:3px" href="article_cat.php?id=14">更多>></a>
  </h3>
  <div class="boxCenterList RelaArticle ">
    <a style="color:#f9044e" href="article.php?id=45" title="[分享] 邀请好友返现佣金现可领取">[分享] 邀请好友返现佣金现可领取</a> 
      <a style="color:#f9044e" href="article.php?id=44" title="[活动] 手机乐淘下单立减10元">[活动] 手机乐淘下单立减10元</a> 
     	
  <a href="article.php?id=43" title="[周年庆] 全场满200立减100元">[周年庆] 全场满200立减100元</a>  
        </div>
 </div>
</div>
<div class="blank5"></div>
</div>
<div    id="ECS_tree2_BODY" style="display:none;">
<div class="box">
 <div class="box_1 art">
  <h3>
  <span> 小脚丫 </span>
  <a style="float:right; padding-top:3px" href="article_cat.php?id=15">更多>></a>
  </h3>
  <div class="boxCenterList RelaArticle ">
    <a style="color:#f9044e" href="article.php?id=48" title="[分享] 邀请好友返现佣金现可领取">[分享] 邀请好友返现佣金现可领取</a> 
      <a style="color:#f9044e" href="article.php?id=47" title="[公益] 乐淘小脚丫开启河北第一">[公益] 乐淘小脚丫开启河北第一</a> 
     	
  <a href="article.php?id=46" title="[公益] 乐淘小脚丫诞生记">[公益] 乐淘小脚丫诞生记</a>  
        </div>
 </div>
</div>
<div class="blank5"></div>
</div>
</div>
 <script type="text/javascript">
//<![CDATA[
  var cycleList = ['ECS_tree1','ECS_tree2'];
  var tabFront = 'tabFront';
  var tabBack = 'tabBack';
  function cycleShow(obj)
  {
    var curObj;
    var curBody;
    for (i=0; i < cycleList.length; i++)
    {
      curObj = document.getElementById(cycleList[i]);
      curBody = document.getElementById(cycleList[i] + '_BODY');
      if (obj.id == curObj.id)
      {
        curObj.className = tabFront;
        curBody.style.display = "";
      }
      else
      {
        curObj.className = tabBack;
        curBody.style.display = "none";
      }
    }
  }
  // 添加事件
  for (i=0; i< cycleList.length; i++)
  {
    document.getElementById(cycleList[i]).onmousemove = function()
    {
      cycleShow(this);
    };
  }
//]]>
</script>
</div>
 
 <div style="clear:both"></div>
 
 
 <div class="brands_box">
<div id="com_b" class="tit clearfix">
    <img class="f_l" src="themes/letao/images/ti_brands.gif">
    <ul>
    <h2><p>运动</p><img src="themes/letao/images/biao10.gif"></h2>
    <h2 class="h2bg"><p>女鞋</p> <img src="themes/letao/images/biao10.gif"></h2>
    <h2 class="h2bg"><p>男鞋</p> <img src="themes/letao/images/biao10.gif"></h2>
    <h2 class="h2bg"><p>Applife</p> <img src="themes/letao/images/biao10.gif"></h2>
    </ul>
</div>
<div id="com_v"  class="brands_box_in clearfix"  ></div>
<div id="com_h">
<blockquote>
<div style="padding:5px;">
    <ul>
    <li class="t">
    <a href="#"><img src="themes/letao/images/brand1.jpg"></a>
    <p><a href="#">阿迪达斯</a></p>
    </li>
    <li class="b">
    <a href="#">[双星热卖] 经典鞋款79元起</a>
    <a href="#">[跑行天下] 顶级舒适跑步鞋</a>
    </li>
    </ul>
    <ul>
    <li class="t">
    <a href="#"><img src="themes/letao/images/brand2.jpg"></a>
    <p><a href="#">耐克</a></p>
    </li>
    <li class="b">
    <a href="#">[愤怒小鸟] 独家销售89元抢</a>
    <a href="#">[水果忍者] 炫彩洞洞鞋39元起</a>
    </li>
    </ul>
    <ul>
    <li class="t">
    <a href="#"><img src="themes/letao/images/brand3.jpg"></a>
    <p><a href="#">李宁</a></p>
    </li>
    <li class="b">
    <a href="#">[Agile阿姐兒] 时尚蝴蝶结凉鞋</a>
    <a href="#">[ PinkyRose ] 波西米亚风凉鞋</a>
    </li>
    </ul>
    <ul>
    <li class="t">
    <a href="#"><img src="themes/letao/images/brand4.jpg"></a>
    <p><a href="#">安踏</a></p>
    </li>
    <li class="b">
    <a href="#">[金猴] 夏季休闲皮鞋热卖</a>
    <a href="#">[百速] 真皮凉鞋99元抢</a>
    </li>
    </ul>
</div>
</blockquote>
<blockquote>
<div style="padding:5px;">
    <ul>
    <li class="t">
    <a href="#"><img src="themes/letao/images/brand5.jpg"></a>
    <p><a href="#">伊伴</a></p>
    </li>
    <li class="b">
    <a href="#">[双星热卖] 经典鞋款79元起</a>
    <a href="#">[跑行天下] 顶级舒适跑步鞋</a>
    </li>
    </ul>
    <ul>
    <li class="t">
    <a href="#"><img src="themes/letao/images/brand6.jpg"></a>
    <p><a href="#">达芙妮</a></p>
    </li>
    <li class="b">
    <a href="#">[愤怒小鸟] 独家销售89元抢</a>
    <a href="#">[水果忍者] 炫彩洞洞鞋39元起</a>
    </li>
    </ul>
    <ul>
    <li class="t">
    <a href="#"><img src="themes/letao/images/brand7.jpg"></a>
    <p><a href="#">千百度</a></p>
    </li>
    <li class="b">
    <a href="#">[Agile阿姐兒] 时尚蝴蝶结凉鞋</a>
    <a href="#">[ PinkyRose ] 波西米亚风凉鞋</a>
    </li>
    </ul>
    <ul>
    <li class="t">
    <a href="#"><img src="themes/letao/images/brand8.jpg"></a>
    <p><a href="#">接吻猫</a></p>
    </li>
    <li class="b">
    <a href="#">[金猴] 夏季休闲皮鞋热卖</a>
    <a href="#">[百速] 真皮凉鞋99元抢</a>
    </li>
    </ul>
</div>
</blockquote>
<blockquote>
<div style="padding:5px;">
    <ul>
    <li class="t">
    <a href="#"><img src="themes/letao/images/brand9.jpg"></a>
    <p><a href="#">麦高</a></p>
    </li>
    <li class="b">
    <a href="#">[双星热卖] 经典鞋款79元起</a>
    <a href="#">[跑行天下] 顶级舒适跑步鞋</a>
    </li>
    </ul>
    <ul>
    <li class="t">
    <a href="#"><img src="themes/letao/images/brand10.jpg"></a>
    <p><a href="#">康奈</a></p>
    </li>
    <li class="b">
    <a href="#">[愤怒小鸟] 独家销售89元抢</a>
    <a href="#">[水果忍者] 炫彩洞洞鞋39元起</a>
    </li>
    </ul>
    <ul>
    <li class="t">
    <a href="#"><img src="themes/letao/images/brand11.jpg"></a>
    <p><a href="#">蜘蛛王</a></p>
    </li>
    <li class="b">
    <a href="#">[Agile阿姐兒] 时尚蝴蝶结凉鞋</a>
    <a href="#">[ PinkyRose ] 波西米亚风凉鞋</a>
    </li>
    </ul>
    <ul>
    <li class="t">
    <a href="#"><img src="themes/letao/images/brand12.jpg"></a>
    <p><a href="#">保罗盖帝</a></p>
    </li>
    <li class="b">
    <a href="#">[金猴] 夏季休闲皮鞋热卖</a>
    <a href="#">[百速] 真皮凉鞋99元抢</a>
    </li>
    </ul>
</div>
</blockquote>
<blockquote>
<div style="padding:5px;">
    <ul>
    <li class="t">
    <a href="#"><img src="themes/letao/images/brand13.jpg"></a>
    <p><a href="#">愤怒小鸟</a></p>
    </li>
    <li class="b">
    <a href="#">[双星热卖] 经典鞋款79元起</a>
    <a href="#">[跑行天下] 顶级舒适跑步鞋</a>
    </li>
    </ul>
    <ul>
    <li class="t">
    <a href="#"><img src="themes/letao/images/brand14.jpg"></a>
    <p><a href="#">REKLIM</a></p>
    </li>
    <li class="b">
    <a href="#">[愤怒小鸟] 独家销售89元抢</a>
    <a href="#">[水果忍者] 炫彩洞洞鞋39元起</a>
    </li>
    </ul>
    <ul>
    <li class="t">
    <a href="#"><img src="themes/letao/images/brand15.jpg"></a>
    <p><a href="#">太鼓达人</a></p>
    </li>
    <li class="b">
    <a href="#">[Agile阿姐兒] 时尚蝴蝶结凉鞋</a>
    <a href="#">[ PinkyRose ] 波西米亚风凉鞋</a>
    </li>
    </ul>
    <ul>
    <li class="t">
    <a href="#"><img src="themes/letao/images/brand16.jpg"></a>
    <p><a href="#">水果忍者</a></p>
    </li>
    <li class="b">
    <a href="#">[金猴] 夏季休闲皮鞋热卖</a>
    <a href="#">[百速] 真皮凉鞋99元抢</a>
    </li>
    </ul>
</div>
</blockquote>
</div>
</div>
<script type="text/javascript">
<!--
reg("com");
//-->
</script>
</div>
<div class="blank"></div>
      <div class="shangpin">
   
<DIV class="cat_goods block">
<div class="tit">
 <a href="category.php?id=159" ><img style="float:left" src="themes/letao/images/cat/159.gif">  </a>
 
 <div class="s">
    
   <a href="category.php?id=159" >更多>></a>
  
  </div>
</div>
<div style="clear:both"></div>
<div class="cat_ads_box clearfix">
   <div class="f_l clearfix">
   <a href='#' target='_blank'><img src='data/afficheimg/1314281267081018048.jpg' width='187' height='140' /></a>    <a href='#' target='_blank'><img src='data/afficheimg/1314281286421687751.jpg' width='187' height='140' /></a>   </div>
 
   <div class="cat_gundong" id="idContainer159">
	<ul id="idSlider159">
		<li>
        <a href='#' target='_blank'><img src='data/afficheimg/1314281308504051971.jpg' width='493' height='281' /></a>        </li>
		<li>
        <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314281323303082265.jpg' width='493' height='281' /></a>        </li>
	</ul>
	<ul class="num" id="idNum159">
	</ul>
</div>
   
   <div class="f_r clearfix">
       <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314281351000309718.jpg' width='150' height='140' /></a>       <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314281366431966011.jpg' width='150' height='140' /></a>       <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314281382294024800.jpg' width='150' height='140' /></a>       <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314281406369618745.jpg' width='150' height='140' /></a>   </div>
  </div>
<div class="blank5"></div>
    <div class="clearfix goodsBox" style="border:none; padding:0; padding-left:0px;">
   
            <div class="goodsItem"              style='padding-left:0;'
               >
           <a href="goods.php?id=79"><img src="images/201206/thumb_img/79_thumb_G_1339236288949.jpg" alt="易源码商城 ecodemall.com测试商品22" class="goodsimg" /></a> 
           <p class="name"><a href="goods.php?id=79" title="易源码商城 ecodemall.com测试商品22">易源码商城 ecodemall.com测试商...</a></p>
           
       
        <font class="market"> 市场价 <del>￥156元</del> </font> <br/>
          
                     售价 <font class="shop_s">￥130元</font>
           
          
          
        </div>
            <div class="goodsItem"     >
           <a href="goods.php?id=78"><img src="images/201206/thumb_img/78_thumb_G_1339236287428.jpg" alt="易源码商城 ecodemall.com测试商品21" class="goodsimg" /></a> 
           <p class="name"><a href="goods.php?id=78" title="易源码商城 ecodemall.com测试商品21">易源码商城 ecodemall.com测试商...</a></p>
           
       
        <font class="market"> 市场价 <del>￥156元</del> </font> <br/>
          
                     售价 <font class="shop_s">￥130元</font>
           
          
          
        </div>
            <div class="goodsItem"     >
           <a href="goods.php?id=77"><img src="images/201206/thumb_img/77_thumb_G_1339236287025.jpg" alt="易源码商城 ecodemall.com测试商品20" class="goodsimg" /></a> 
           <p class="name"><a href="goods.php?id=77" title="易源码商城 ecodemall.com测试商品20">易源码商城 ecodemall.com测试商...</a></p>
           
       
        <font class="market"> 市场价 <del>￥156元</del> </font> <br/>
          
                     售价 <font class="shop_s">￥130元</font>
           
          
          
        </div>
            <div class="goodsItem"     >
           <a href="goods.php?id=76"><img src="images/201206/thumb_img/76_thumb_G_1339236287644.jpg" alt="易源码商城 ecodemall.com测试商品19" class="goodsimg" /></a> 
           <p class="name"><a href="goods.php?id=76" title="易源码商城 ecodemall.com测试商品19">易源码商城 ecodemall.com测试商...</a></p>
           
       
        <font class="market"> 市场价 <del>￥156元</del> </font> <br/>
          
                     售价 <font class="shop_s">￥130元</font>
           
          
          
        </div>
            <div class="goodsItem"     >
           <a href="goods.php?id=75"><img src="images/201206/thumb_img/75_thumb_G_1339236286138.jpg" alt="易源码商城 ecodemall.com测试商品18" class="goodsimg" /></a> 
           <p class="name"><a href="goods.php?id=75" title="易源码商城 ecodemall.com测试商品18">易源码商城 ecodemall.com测试商...</a></p>
           
       
        <font class="market"> 市场价 <del>￥156元</del> </font> <br/>
          
                     售价 <font class="shop_s">￥130元</font>
           
          
          
        </div>
          </div>
 </div>
<div class="blank"></div>
<script>
var nums159 = [], timer, n = $$("idSlider159").getElementsByTagName("li").length,
	st159 = new SlideTrans("idContainer159", "idSlider159", n, {
		onStart: function(){//设置按钮样式
			forEach(nums159, function(o, i){ o.className = st159.Index == i ? "on" : ""; })
		}
	});
for(var i = 1; i <= n; AddNum(i++)){};
function AddNum(i){
	var num159 = $$("idNum159").appendChild(document.createElement("li"));
	num159.innerHTML = i--;
	num159.onmouseover = function(){
		timer = setTimeout(function(){ num159.className = "on"; st159.Auto = false; st159.Run(i); }, 200);
	}
	num159.onmouseout = function(){ clearTimeout(timer); num159.className = ""; st159.Auto = true; st159.Run(); }
	nums159[i] = num159;
}
st159.Run();
</script>
<DIV class="cat_goods block">
<div class="tit">
 <a href="category.php?id=140" ><img style="float:left" src="themes/letao/images/cat/140.gif">  </a>
 
 <div class="s">
    
   <a href="category.php?id=140" >更多>></a>
  
  </div>
</div>
<div style="clear:both"></div>
<div class="cat_ads_box clearfix">
   <div class="f_l clearfix">
   <a href='http://www.ecodemall.com' target='_blank'><img src='data/afficheimg/1314284853641893306.jpg' width='187' height='140' /></a>    <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314284873330307215.jpg' width='187' height='140' /></a>   </div>
 
   <div class="cat_gundong" id="idContainer140">
	<ul id="idSlider140">
		<li>
        <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314284891104144607.jpg' width='493' height='281' /></a>        </li>
		<li>
        <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314284906717957176.jpg' width='493' height='281' /></a>        </li>
	</ul>
	<ul class="num" id="idNum140">
	</ul>
</div>
   
   <div class="f_r clearfix">
       <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314284925307261045.jpg' width='150' height='140' /></a>       <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314284941353559215.jpg' width='150' height='140' /></a>       <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314284956537711218.jpg' width='150' height='140' /></a>       <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314284974106572323.jpg' width='150' height='140' /></a>   </div>
  </div>
<div class="blank5"></div>
    <div class="clearfix goodsBox" style="border:none; padding:0; padding-left:0px;">
   
            <div class="goodsItem"              style='padding-left:0;'
               >
           <a href="goods.php?id=69"><img src="images/201206/thumb_img/69_thumb_G_1339236284287.jpg" alt="易源码商城 ecodemall.com测试商品12" class="goodsimg" /></a> 
           <p class="name"><a href="goods.php?id=69" title="易源码商城 ecodemall.com测试商品12">易源码商城 ecodemall.com测试商...</a></p>
           
       
        <font class="market"> 市场价 <del>￥276元</del> </font> <br/>
          
                     售价 <font class="shop_s">￥230元</font>
           
          
          
        </div>
            <div class="goodsItem"     >
           <a href="goods.php?id=68"><img src="images/201206/thumb_img/68_thumb_G_1339236284355.jpg" alt="易源码商城 ecodemall.com测试商品11" class="goodsimg" /></a> 
           <p class="name"><a href="goods.php?id=68" title="易源码商城 ecodemall.com测试商品11">易源码商城 ecodemall.com测试商...</a></p>
           
       
        <font class="market"> 市场价 <del>￥264元</del> </font> <br/>
          
                     售价 <font class="shop_s">￥220元</font>
           
          
          
        </div>
            <div class="goodsItem"     >
           <a href="goods.php?id=67"><img src="images/201206/thumb_img/67_thumb_G_1339236284874.jpg" alt="易源码商城 ecodemall.com测试商品10" class="goodsimg" /></a> 
           <p class="name"><a href="goods.php?id=67" title="易源码商城 ecodemall.com测试商品10">易源码商城 ecodemall.com测试商...</a></p>
           
       
        <font class="market"> 市场价 <del>￥252元</del> </font> <br/>
          
                     售价 <font class="shop_s">￥210元</font>
           
          
          
        </div>
            <div class="goodsItem"     >
           <a href="goods.php?id=66"><img src="images/201206/thumb_img/66_thumb_G_1339236283336.jpg" alt="易源码商城 ecodemall.com测试商品9" class="goodsimg" /></a> 
           <p class="name"><a href="goods.php?id=66" title="易源码商城 ecodemall.com测试商品9">易源码商城 ecodemall.com测试商...</a></p>
           
       
        <font class="market"> 市场价 <del>￥240元</del> </font> <br/>
          
                     售价 <font class="shop_s">￥200元</font>
           
          
          
        </div>
            <div class="goodsItem"     >
           <a href="goods.php?id=65"><img src="images/201206/thumb_img/65_thumb_G_1339236283229.jpg" alt="易源码商城 ecodemall.com测试商品8" class="goodsimg" /></a> 
           <p class="name"><a href="goods.php?id=65" title="易源码商城 ecodemall.com测试商品8">易源码商城 ecodemall.com测试商...</a></p>
           
       
        <font class="market"> 市场价 <del>￥228元</del> </font> <br/>
          
                     售价 <font class="shop_s">￥190元</font>
           
          
          
        </div>
          </div>
 </div>
<div class="blank"></div>
<script>
var nums140 = [], timer, n = $$("idSlider140").getElementsByTagName("li").length,
	st140 = new SlideTrans("idContainer140", "idSlider140", n, {
		onStart: function(){//设置按钮样式
			forEach(nums140, function(o, i){ o.className = st140.Index == i ? "on" : ""; })
		}
	});
for(var i = 1; i <= n; AddNum(i++)){};
function AddNum(i){
	var num140 = $$("idNum140").appendChild(document.createElement("li"));
	num140.innerHTML = i--;
	num140.onmouseover = function(){
		timer = setTimeout(function(){ num140.className = "on"; st140.Auto = false; st140.Run(i); }, 200);
	}
	num140.onmouseout = function(){ clearTimeout(timer); num140.className = ""; st140.Auto = true; st140.Run(); }
	nums140[i] = num140;
}
st140.Run();
</script>
<DIV class="cat_goods block">
<div class="tit">
 <a href="category.php?id=194" ><img style="float:left" src="themes/letao/images/cat/194.gif">  </a>
 
 <div class="s">
    
   <a href="category.php?id=194" >更多>></a>
  
  </div>
</div>
<div style="clear:both"></div>
<div class="cat_ads_box clearfix">
   <div class="f_l clearfix">
   <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314373043274254104.jpg' width='187' height='140' /></a>    <a href='#' target='_blank'><img src='data/afficheimg/1314373056474524779.jpg' width='187' height='140' /></a>   </div>
 
   <div class="cat_gundong" id="idContainer194">
	<ul id="idSlider194">
		<li>
        <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314373074195376280.jpg' width='493' height='281' /></a>        </li>
		<li>
        <a href='http://www.ecodemall.com' target='_blank'><img src='data/afficheimg/1314373089117211899.jpg' width='493' height='281' /></a>        </li>
	</ul>
	<ul class="num" id="idNum194">
	</ul>
</div>
   
   <div class="f_r clearfix">
       <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314373116738334037.jpg' width='150' height='140' /></a>       <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314373131379767311.jpg' width='150' height='140' /></a>       <a href='http://www.ecodemall.com/' target='_blank'><img src='data/afficheimg/1314373144185442288.jpg' width='150' height='140' /></a>       <a href='#' target='_blank'><img src='data/afficheimg/1314373159818497636.jpg' width='150' height='140' /></a>   </div>
  </div>
<div class="blank5"></div>
    <div class="clearfix goodsBox" style="border:none; padding:0; padding-left:0px;">
   
            <div class="goodsItem"              style='padding-left:0;'
               >
           <a href="goods.php?id=98"><img src="images/201206/thumb_img/98_thumb_G_1339236279871.jpg" alt="易源码商城 ecodemall.com测试商品27" class="goodsimg" /></a> 
           <p class="name"><a href="goods.php?id=98" title="易源码商城 ecodemall.com测试商品27">易源码商城 ecodemall.com测试商...</a></p>
           
       
        <font class="market"> 市场价 <del>￥156元</del> </font> <br/>
          
                     售价 <font class="shop_s">￥130元</font>
           
          
          
        </div>
            <div class="goodsItem"     >
           <a href="goods.php?id=97"><img src="images/201206/thumb_img/97_thumb_G_1339236279236.jpg" alt="易源码商城 ecodemall.com测试商品26" class="goodsimg" /></a> 
           <p class="name"><a href="goods.php?id=97" title="易源码商城 ecodemall.com测试商品26">易源码商城 ecodemall.com测试商...</a></p>
           
       
        <font class="market"> 市场价 <del>￥156元</del> </font> <br/>
          
                     售价 <font class="shop_s">￥130元</font>
           
          
          
        </div>
            <div class="goodsItem"     >
           <a href="goods.php?id=96"><img src="images/201206/thumb_img/96_thumb_G_1339236278370.jpg" alt="易源码商城 ecodemall.com测试商品25" class="goodsimg" /></a> 
           <p class="name"><a href="goods.php?id=96" title="易源码商城 ecodemall.com测试商品25">易源码商城 ecodemall.com测试商...</a></p>
           
       
        <font class="market"> 市场价 <del>￥156元</del> </font> <br/>
          
                     售价 <font class="shop_s">￥130元</font>
           
          
          
        </div>
            <div class="goodsItem"     >
           <a href="goods.php?id=95"><img src="images/201206/thumb_img/95_thumb_G_1339236278010.jpg" alt="易源码商城 ecodemall.com测试商品24" class="goodsimg" /></a> 
           <p class="name"><a href="goods.php?id=95" title="易源码商城 ecodemall.com测试商品24">易源码商城 ecodemall.com测试商...</a></p>
           
       
        <font class="market"> 市场价 <del>￥156元</del> </font> <br/>
          
                     售价 <font class="shop_s">￥130元</font>
           
          
          
        </div>
            <div class="goodsItem"     >
           <a href="goods.php?id=94"><img src="images/201206/thumb_img/94_thumb_G_1339236280072.jpg" alt="易源码商城 ecodemall.com测试商品23" class="goodsimg" /></a> 
           <p class="name"><a href="goods.php?id=94" title="易源码商城 ecodemall.com测试商品23">易源码商城 ecodemall.com测试商...</a></p>
           
       
        <font class="market"> 市场价 <del>￥156元</del> </font> <br/>
          
                     售价 <font class="shop_s">￥130元</font>
           
          
          
        </div>
          </div>
 </div>
<div class="blank"></div>
<script>
var nums194 = [], timer, n = $$("idSlider194").getElementsByTagName("li").length,
	st194 = new SlideTrans("idContainer194", "idSlider194", n, {
		onStart: function(){//设置按钮样式
			forEach(nums194, function(o, i){ o.className = st194.Index == i ? "on" : ""; })
		}
	});
for(var i = 1; i <= n; AddNum(i++)){};
function AddNum(i){
	var num194 = $$("idNum194").appendChild(document.createElement("li"));
	num194.innerHTML = i--;
	num194.onmouseover = function(){
		timer = setTimeout(function(){ num194.className = "on"; st194.Auto = false; st194.Run(i); }, 200);
	}
	num194.onmouseout = function(){ clearTimeout(timer); num194.className = ""; st194.Auto = true; st194.Run(); }
	nums194[i] = num194;
}
st194.Run();
</script>
<div class="brands">
<dl>
<dt>
<a href="category.php?id=159">女鞋</a>
<img src="themes/letao/images/tree1.gif">
</dt>
<dd>
<span class="span1"><a href="category.php?id=174">单鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span2"><a href="category.php?id=228">凉鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span3"><a href="category.php?id=229">拖鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span4"><a href="category.php?id=230">帆布鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span5"><a href="category.php?id=231">平跟鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span6"><a href="category.php?id=232">中跟鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span7"><a href="category.php?id=233">休闲鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span8"><a href="category.php?id=234">运动鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span9"><a href="category.php?id=235">新款区</a><b>|</b>
<font><br/></font>
</span>
<span class="span10"><a href="category.php?id=236">特价区</a><b>|</b>
<font><br/></font>
</span>
</dd>
</dl>
<dl>
<dt>
<a href="category.php?id=140">男鞋</a>
<img src="themes/letao/images/tree2.gif">
</dt>
<dd>
<span class="span1"><a href="category.php?id=237">凉鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span2"><a href="category.php?id=148">商务皮鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span3"><a href="category.php?id=238">拖鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span4"><a href="category.php?id=151">休闲皮鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span5"><a href="category.php?id=239">休闲鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span6"><a href="category.php?id=240">帆布鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span7"><a href="category.php?id=241">新品区</a><b>|</b>
<font><br/></font>
</span>
<span class="span8"><a href="category.php?id=242">特价区</a><b>|</b>
<font><br/></font>
</span>
</dd>
</dl>
<dl>
<dt>
<a href="category.php?id=243">运动鞋</a>
<img src="themes/letao/images/tree3.gif">
</dt>
<dd>
<span class="span1"><a href="category.php?id=244">板鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span2"><a href="category.php?id=245">跑步鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span3"><a href="category.php?id=246">帆布鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span4"><a href="category.php?id=247">休闲鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span5"><a href="category.php?id=248">篮球鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span6"><a href="category.php?id=249">网球鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span7"><a href="category.php?id=250">训练鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span8"><a href="category.php?id=251">足球鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span9"><a href="category.php?id=252">新品区</a><b>|</b>
<font><br/></font>
</span>
<span class="span10"><a href="category.php?id=253">特价区</a><b>|</b>
<font><br/></font>
</span>
</dd>
</dl>
<dl>
<dt>
<a href="category.php?id=254">户外</a>
<img src="themes/letao/images/tree4.gif">
</dt>
<dd>
<span class="span1"><a href="category.php?id=255">户外鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span2"><a href="category.php?id=256">拖鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span3"><a href="category.php?id=257">休闲鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span4"><a href="category.php?id=258">凉鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span5"><a href="category.php?id=259">徒步鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span6"><a href="category.php?id=260">布鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span7"><a href="category.php?id=261">登山鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span8"><a href="category.php?id=262">新品</a><b>|</b>
<font><br/></font>
</span>
</dd>
</dl>
<dl>
<dt>
<a href="category.php?id=194">童鞋</a>
<img src="themes/letao/images/tree5.gif">
</dt>
<dd>
<span class="span1"><a href="category.php?id=195">篮球鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span2"><a href="category.php?id=196">跑步鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span3"><a href="category.php?id=197">板鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span4"><a href="category.php?id=198">休闲鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span5"><a href="category.php?id=199">帆布鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span6"><a href="category.php?id=201">拖鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span7"><a href="category.php?id=202">登山鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span8"><a href="category.php?id=203">户外鞋</a><b>|</b>
<font><br/></font>
</span>
<span class="span9"><a href="category.php?id=204">短靴</a><b>|</b>
<font><br/></font>
</span>
<span class="span10"><a href="category.php?id=205">中筒靴</a><b>|</b>
<font><br/></font>
</span>
<span class="span11"><a href="category.php?id=206">凉鞋</a><b>|</b>
<font><br/></font>
</span>
</dd>
</dl>
 
 
 
<dl>
<dt>
<a href="brand.php">热卖品牌</a>
<img src="themes/letao/images/brand_tit.gif">
</dt>
<dd>
<span class="span1"><a href="brand.php?id=32">SALO</a><b>|</b>
<font><br/></font>
</span>
<span class="span2"><a href="brand.php?id=37">达芙妮</a><b>|</b>
<font><br/></font>
</span>
<span class="span3"><a href="brand.php?id=23">361度</a><b>|</b>
<font><br/></font>
</span>
<span class="span4"><a href="brand.php?id=19">卡 帕</a><b>|</b>
<font><br/></font>
</span>
<span class="span5"><a href="brand.php?id=20">新百伦</a><b>|</b>
<font><br/></font>
</span>
<span class="span6"><a href="brand.php?id=16">阿迪</a><b>|</b>
<font><br/></font>
</span>
<span class="span7"><a href="brand.php?id=17">匡威</a><b>|</b>
<font><br/></font>
</span>
<span class="span8"><a href="brand.php?id=18">彪马</a><b>|</b>
<font><br/></font>
</span>
</dd>
</dl>
</div>
 
 
</div>
</div>
     
<div class="blank"></div><div class="blank"></div>
 
<div class="block">
<div class="helpTitBg clearfix">
   
<img src="themes/letao/images/help_right.gif" style="float:right">
<dl>
  <dt><a href='article_cat.php?id=5' title="新手上路 ">新手上路 </a></dt>
    <dd><a href="article.php?id=9" title="售后流程">售后流程</a></dd>
    <dd><a href="article.php?id=10" title="购物流程">购物流程</a></dd>
    <dd><a href="article.php?id=11" title="订购方式">订购方式</a></dd>
  </dl>
<dl>
  <dt><a href='article_cat.php?id=7' title="配送与支付 ">配送与支付 </a></dt>
    <dd><a href="article.php?id=15" title="货到付款区域">货到付款区域</a></dd>
    <dd><a href="article.php?id=16" title="配送支付智能查询 ">配送支付智能查询</a></dd>
    <dd><a href="article.php?id=17" title="支付方式说明">支付方式说明</a></dd>
  </dl>
<dl>
  <dt><a href='article_cat.php?id=10' title="会员中心">会员中心</a></dt>
    <dd><a href="article.php?id=18" title="资金管理">资金管理</a></dd>
    <dd><a href="article.php?id=19" title="我的收藏">我的收藏</a></dd>
    <dd><a href="article.php?id=20" title="我的订单">我的订单</a></dd>
  </dl>
<dl>
  <dt><a href='article_cat.php?id=9' title="联系我们 ">联系我们 </a></dt>
    <dd><a href="article.php?id=24" title="网站故障报告">网站故障报告</a></dd>
    <dd><a href="article.php?id=25" title="选机咨询 ">选机咨询</a></dd>
    <dd><a href="article.php?id=26" title="投诉与建议 ">投诉与建议</a></dd>
  </dl>
  </div>
<div class="blank"></div><div class="blank"></div>
<div class="bottomNav3" >
今天我们共有<b>181</b>个品牌 <b>14752</b>个款式供您选购
</div>
<div id="bottomNav2">
 
  <div class="bNavList clearfix">
   <div class="f_l">
              <a href="article.php?id=1" >免责条款</a>
       
              <a href="article.php?id=2" >隐私保护</a>
       
              <a href="article.php?id=3" >咨询热点</a>
       
              <a href="article.php?id=4" >联系我们</a>
       
              <a href="article.php?id=5" >公司简介</a>
       
              <a href="wholesale.php" >批发方案</a>
       
              <a href="myship.php" >配送方式</a>
       
              <a href="article_cat.php?id=4" >3G资讯</a>
       
              <a href="article_cat.php?id=12" >最新资讯</a>
       
           </div>
   <div class="f_r">
    <input type="text" id="user_email" class="inputBg" value="Email获取最新优惠信息" onclick="javascript:this.value=''"  style=" vertical-align:middle; "/>
  
    <input type="button" value=" " onclick="add_email_list();" style="width:52px; height:22px; vertical-align:middle; border:none; background:url(themes/letao/images/dy.gif) no-repeat; cursor:pointer" />
 
<script type="text/javascript">
var email = document.getElementById('user_email');
function add_email_list()
{
  if (check_email())
  {
    Ajax.call('user.php?act=email_list&job=add&email=' + email.value, '', rep_add_email_list, 'GET', 'TEXT');
  }
}
function rep_add_email_list(text)
{
  alert(text);
}
function cancel_email_list()
{
  if (check_email())
  {
    Ajax.call('user.php?act=email_list&job=del&email=' + email.value, '', rep_cancel_email_list, 'GET', 'TEXT');
  }
}
function rep_cancel_email_list(text)
{
  alert(text);
}
function check_email()
{
  if (Utils.isEmail(email.value))
  {
    return true;
  }
  else
  {
    alert('邮件地址非法！');
    return false;
  }
}
</script>
   </div>
  </div>
</div>
<div class="blank"></div>
<div id="footer">
 <div class="text" >
 &copy; 2005-2013 本源码由莎莎源码论坛[bbs.sasadown.cn]提供下载! 版权所有，并保留所有权利。<br />
 本源码由莎莎源码论坛[bbs.sasadown.cn]提供下载!        Tel: 0351-2559825               <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=1091098809&amp;Site=本源码由莎莎源码论坛[bbs.sasadown.cn]提供下载!&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:1091098809:4" height="16" border="0" alt="QQ" /> 1091098809</a>
                                                                                <br />
    ICP备案证书号:<a href="http://www.miibeian.gov.cn/" target="_blank">晋ICP备12002810号</a><br />
    554fcae493e564ee0dc75bdf2ebf94caquery_info|a:1:{s:4:"name";s:10:"query_info";}554fcae493e564ee0dc75bdf2ebf94ca<br />
  <a href="http://www.ecshop.com" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v2.7.3</span></strong></a>&nbsp;<br />
           <div align="center" style="padding-bottom:15px;" ><a href=" http://www.ecodemall.com" target="_blank"><img src="themes/letao/images/ecmoban.gif" alt="ECShop模板" /></a></div>
       
          <div align="center" style="padding-bottom:15px;" >
          
          <a href="#"><img src="themes/letao/images/b1.jpg" /></a>
          <a href="#"><img src="themes/letao/images/b2.jpg"/></a>
    <a href="#"><img src="themes/letao/images/b3.jpg"/></a>
          
          </div>
       
 </div>
</div>
</div></body>
</html>