  <script language="javascript"> 
<!--
function killerrors() { 
return true; 
} 
window.onerror = killerrors; 
//-->
</script>

<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
<div class="AllWrap">
<div class="headerInfo">
  <div class="logo" id="logo">
    <div id="4114">
    <a href="index.php"><img src="themes/jd/images/logo.gif" border="0"/></a>
    </div>
  </div>
  <div class="Landing" style="text-align:right;">

   
    <div style="float:left">
    <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
	<font id="ECS_MEMBERZONE">
    <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 
    </font>
    </div>
    <div>
		 <?php if ($this->_var['navigator_list']['top']): ?>
				<?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
            <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
            <?php if (! ($this->_foreach['nav_top_list']['iteration'] == $this->_foreach['nav_top_list']['total'])): ?>
             |
            <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		 <?php endif; ?>
         </div>


  </div>

  <div class="Navigation">
    <div id="4117">
    <a href=""></a>
    <a href=""></a>
    <a href=""></a>
    <a href=""></a>
    <a href=""></a>
    <a href=""></a>
    <a href=""></a>
    </div>
  </div> 
  
  <div class="guanjianzi" style="display:none">
  <ul>
    <?php if ($this->_var['searchkeywords']): ?>
    <li style="color:#fa5889"><?php echo $this->_var['lang']['hot_search']; ?>：</li>
   <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
   <li><a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a></li>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <?php endif; ?>
   </ul>
  </div>
  <div class="Search">
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
    <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
       <input name="keywords" type="text" id="keyword" value="输入你要查找的商品" onclick="javascript:this.value='';"/>
       <input name="btsearch" type="submit" id="btsearch" value="" />
    </form>
  </div> 
  <div class="Nalist" >
    <div id="4119">
      <ul class="MenuList">
        		 <li <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="curs"<?php endif; ?>><?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> <span class="l"></span><span class="r"></span><?php endif; ?><a href="index.php"><?php echo $this->_var['lang']['home']; ?></a></li>
		 <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
			<li <?php if ($this->_var['nav']['active'] == 1): ?> class="curs"<?php endif; ?>><?php if ($this->_var['nav']['active'] == 1): ?> <span class="l"></span><span class="r"></span><?php endif; ?><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li>
		 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><li><a href="message.php" style=" float:right"><img src="themes/jd/images/meun_r.gif"  style=" float:right; position: relative; bottom:38px;"></a></li>
        
  
      </ul>     
    </div>
    
  </div>
  <div class="cartinfo fr" id="ECS_CARTINFO"><a><?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </a> 
  </div>
</div>
</div>
<div class="blank"></div>