



<div class="top_nav">
<div class="block">
<div class="f_r log">

<ul> <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
   <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
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
   <?php if ($this->_var['navigator_list']['top']): ?><?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?> | <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> <?php endif; ?>
 
 
 
   | 
   
   <img src="themes/letao/images/biao3.gif" style="vertical-align:middle; padding-left:5px;">
   <a style="cursor: pointer; padding:0; color:#fc3398"  
onClick="window.external.AddFavorite(location.href,document.title);">收藏本站</a>
 
 
   </li>
   
   
   
   
   
   
   
   
   
   
   
   
  </ul>
 
  
  
  
 </div>


</div>
</div>













<?php
 include_once('themes/' . $GLOBALS['_CFG']['template'].'/init.php');
?>
 
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/js.js"></script>
<script src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/transport.js"></script>

<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
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
           alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
    
    <?php if ($this->_var['searchkeywords']): ?>
   <b>热搜：</b>
   <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
   <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <?php endif; ?>
   
   
  </div>
  
     
 
  
 
</div>






 <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
<div class="cart" id="ECS_CARTINFO">
<div class="f_l">
 <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
</div> 
<div class="f_r" style="padding:5px 8px 0 0; ">
<a href="flow.php"><img style="float:left" src="themes/letao/images/jiesuan.gif"></a>
</div> 

</div>
 



  

 

</div>

 
 
<div id="mainNav"  >



<div class="block clearfix">



  <a class="a1 <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> cur <?php endif; ?>" href="index.php"  ><?php echo $this->_var['lang']['home']; ?> </a>
  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
  <ul class="u1" onmouseover="this.className='u1 u1_over'" onmouseout="this.className='u1'" >
  <a  class="a1 <?php if ($this->_var['nav']['active'] == 1): ?> cur <?php endif; ?>"  href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
  </ul>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
    <div class="meun_r">
    <a href="search.php?intro=new">新品上架</a> | <a style="color:#ffff00" href="#">断码特卖</a>
    </div>
 
 
 
 </div>
</div>

<div class="blank"></div>

