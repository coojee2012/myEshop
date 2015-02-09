<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/SlideTrans.js"></script>
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
<?php echo $this->fetch('library/page_header.lbi'); ?>



<div class="block clearfix" style="overflow:hidden">

<?php $this->assign('ads_id','29'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>









<div class="index_l" style="float:left; width:187px;">

 
<?php echo $this->fetch('library/category_tree.lbi'); ?>




</div>

<div style="float:right; width:792px">
<?php echo $this->fetch('library/index_ad.lbi'); ?>
<div style="float:right; width:230px">

<?php $this->assign('ads_id','30'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

 
<div class="gonggao_box  ">
<div class="ff_1">
    <h2 id="ECS_tree1" class=" tabFront" style="border-left:1px solid #d5d5d5;border-right:1px solid #d5d5d5; width:114px;  ">公告</h2>
    <h2 id="ECS_tree2" class=" tabBack" style="border-right:1px solid #d5d5d5;">小脚丫</h2>
</div>   
<div style="clear:both"></div>
<div  id="ECS_tree1_BODY">

<?php $this->assign('articles',$this->_var['articles_14']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_14']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>

</div>
<div    id="ECS_tree2_BODY" style="display:none;">

<?php $this->assign('articles',$this->_var['articles_15']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_15']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>

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
 
 
 <?php echo $this->fetch('library/brands_box.lbi'); ?>





</div>
<div class="blank"></div>

      <div class="shangpin">
   
<?php $this->assign('cat_goods',$this->_var['cat_goods_159']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_159']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_140']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_140']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_194']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_194']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php echo $this->fetch('library/brands.lbi'); ?>

 
 
</div>

</div>

    <?php echo $this->fetch('library/help.lbi'); ?>
 

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
