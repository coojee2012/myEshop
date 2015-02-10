<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="诚和办公 v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title><?php echo $this->_var['page_title']; ?></title>




<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
<script type="text/javascript" src="themes/jd/js/action.js"></script>
<script type="text/javascript" src="themes/jd/js/scrollpic.js"></script>
<script type="text/javascript" src="themes/jd/js/roll.js"></script>

</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>




<div class="block clearfix">
  <div id="pageLeft" class="fl">

	<?php echo $this->fetch('library/category_tree.lbi'); ?>
	<?php echo $this->fetch('library/top10.lbi'); ?>
    <?php echo $this->fetch('library/brands.lbi'); ?> 
    	
<?php echo $this->fetch('library/ad_position.lbi'); ?>

	<?php echo $this->fetch('library/promotion_info.lbi'); ?>
	<?php echo $this->fetch('library/invoice_query.lbi'); ?>
	<?php echo $this->fetch('library/order_query.lbi'); ?>
	<?php echo $this->fetch('library/vote_list.lbi'); ?>
    

	
	</div>
	<div id="pageRight" class="fr clearfix" >
	 <div class="clearfix" >
	  <div class="w574 fl" >
	  <div class="blank">
	  <?php echo $this->fetch('library/index_ad.lbi'); ?>
	  </div>
	 </div>
	  <div class="w200 fr" >
			 <div class="mod1 blank" id="mod1"  >
			   <span class="lt"></span><span class="lb"></span><span class="rt"></span><span class="rb"></span>
				 <h1 class="mod1tit"><?php echo $this->_var['lang']['shop_notice']; ?></h1>
				 <div class="mod1con shop_notice">
					 <ul>
                  <li><?php echo $this->_var['shop_notice']; ?></li>
                   </ul>
				 </div>
			 </div>
			 <script type="text/javascript">divheight("mod1");</script>
	 </div>
     <div class="blank"></div>
     <div class=" w200 fr">
     
<?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>
     
     
     
     
	 </div>
	 <div class="clearfix blank" style=" display:none">
     <div class="w780">
     	  <?php if ($this->_var['promotion_goods']): ?>
        
<h1 class="mod2tit" style="background:url(themes/jd/images/tejiaTitle.gif); position:relative;">
			<div class="more clearfix">
			 
			 <div id="more"><a href="search.php?intro=promotion">更多</a></div>
			</div>
			</h1>
        
        
		<div class="mod1 mod2" style="border-top:none; padding-top:8px;">
			<span class="lb"></span><span class="rb"></span>
			<div class="clearfix">
            
            <DIV class=blk_18>
            <A onmouseup=ISL_StopUp_1() class=LeftBotton 
            onmousedown=ISL_GoUp_1() onmouseout=ISL_StopUp_1() href="javascript:void(0);" 
            target=_self></A>
            
            <DIV class=pcont id=ISL_Cont_1>
            <DIV class=ScrCont>
            <DIV id=List1_1>
            
             <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
                        <div class="roll_goodsbox">
                       <div class="roll_imgbox">
                         <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a>
                       </div>
                         <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a><br />
                        <font class="goodspice market"><?php echo $this->_var['goods']['market_price']; ?></font>
                         <?php if ($this->_var['goods']['promote_price'] != ""): ?>
                         <b class="f1"><?php echo $this->_var['goods']['promote_price']; ?></b><br />
                         <?php else: ?>
                         <b class="f1"><?php echo $this->_var['goods']['shop_price']; ?></b><br />
                         <?php endif; ?>
            
                        </div>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
            </DIV>
            
            <DIV id=List2_1>
            </DIV>
            </DIV>
            </DIV>
            <A onmouseup=ISL_StopDown_1() 
            class=RightBotton onmousedown=ISL_GoDown_1() onmouseout=ISL_StopDown_1() 
            href="javascript:void(0);" target=_self></A>
            </DIV>
            <SCRIPT type=text/javascript>
            <!--
            picrun_ini()
            //-->
            </SCRIPT>
                                 
			</div>
		</div>
		<script  type="text/javascript">
		  var itemLi = $("scrollCont").getElementsByTagName("li").length;
			if(itemLi>4){
			$("more").style.display  = "none";
			var scrollPic = new ScrollPic();
			scrollPic.scrollContId   = "scrollCont";
			scrollPic.arrLeftId      = "scrollArrLeft";
      scrollPic.arrRightId     = "scrollArrRight"; 
			scrollPic.dotListId      = "scrollDotList";
			scrollPic.dotClassName   = "dotItem";
			scrollPic.dotOnClassName   = "dotItemOn";
			scrollPic.frameWidth     = 428;
			scrollPic.pageWidth      = 428;
			scrollPic.speed          = 10; 
			scrollPic.space          = 10; 
			scrollPic.autoPlay       = false; 
			scrollPic.autoPlayTime   = 5; 
			scrollPic.initialize();
			}else{
			$("more").style.display  = "block";
			$("scrollArrLeft").style.display  = "none";
			$("scrollArrRight").style.display  = "none";
			}
		</script>
		<?php endif; ?>
     </div> 
     </div>


<div class="clearfix">
			<div class="w780">

 
		 </div>

	 </div>





	 
	 <div class="clearfix ">
			<div class="w780">
			<?php if ($this->_var['hot_goods']): ?>
        <?php echo $this->fetch('library/recommend_hot.lbi'); ?>  
			<?php endif; ?> 
		 </div>

	 </div>
	 
	 <div>
	 </div>
	 <?php if ($this->_var['best_goods']): ?>

        <?php echo $this->fetch('library/recommend_best.lbi'); ?>     

	 <?php endif; ?>
        <?php echo $this->fetch('library/recommend_new.lbi'); ?> 
        
        
<?php echo $this->fetch('library/cat_goods.lbi'); ?>
 

        
<?php echo $this->fetch('library/cat_goods.lbi'); ?>
 
	</div>
</div>


<script>
<!--
/*第一种形式 第二种形式 更换显示样式*/
function setTab(name,cursel,n){
for(i=1;i<=n;i++){
var menu=document.getElementById(name+i);
var con=document.getElementById("con_"+name+"_"+i);
menu.className=i==cursel?"hover":"";
con.style.display=i==cursel?"block":"none";
}
}
//-->
</script>

<div class="blank"></div>

<?php echo $this->fetch('library/help.lbi'); ?>
<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>

<div class="block blank" >
  <div class="mod1 mod2" id="links" style=" border-top: 1px solid #ccc">
	 <span class="lt"></span><span class="lb"></span><span class="rt"></span><span class="rb"></span>
	  <div class="links clearfix">

       
        <p>
        <a href="http://www.baidu.com/" target="_blank" title="<?php echo $this->_var['link']['name']; ?>" class="linkTxt">友情链接</a>
            <a href="http://www.baidu.com/" target="_blank" title="<?php echo $this->_var['link']['name']; ?>" class="linkTxt">友情链接</a>
            <a href="http://www.baidu.com/" target="_blank" title="<?php echo $this->_var['link']['name']; ?>" class="linkTxt">友情链接</a>
			<?php if ($this->_var['txt_links']): ?>
			<?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
			<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>" class="linkTxt"><?php echo $this->_var['link']['name']; ?></a>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<?php endif; ?>
            
            
       </p>
		</div>
  </div>
<script type="text/javascript">divheight("links");</script>	
</div> 

<?php endif; ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
