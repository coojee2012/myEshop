


<form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">



<?php if ($this->_var['pager']['styleid'] == 0): ?>
<div id="pager">
 <a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a> </span>
    <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_06156800_1369207040');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_06156800_1369207040']):
?>
      <?php if ($this->_var['key'] == 'keywords'): ?>
          <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo urldecode($this->_var['item_0_06156800_1369207040']); ?>" />
        <?php else: ?>
          <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_06156800_1369207040']; ?>" />
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <select name="page" id="page" onchange="selectPage(this)">
    <?php echo $this->html_options(array('options'=>$this->_var['pager']['array'],'selected'=>$this->_var['pager']['page'])); ?>
    </select>
</div>
<?php else: ?>


 <div id="pager" class="pagebar" style="float:left">
 
  <?php if ($this->_var['pager']['page_first']): ?><a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?> ...</a><?php endif; ?>
  <?php if ($this->_var['pager']['page_prev']): ?>
  <a class="prev" href="<?php echo $this->_var['pager']['page_prev']; ?>" style="padding-bottom:5px;">< 第一页</a>
   <?php else: ?>
   
   <a class="no"  style="padding-bottom:5px;">< 上一页</a>
  
  <?php endif; ?>
  <?php if ($this->_var['pager']['page_count'] != 1): ?>
    <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_06218300_1369207040');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_06218300_1369207040']):
?>
      <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>
      <span class="page_now"><?php echo $this->_var['key']; ?></span>
      <?php else: ?>
      <a href="<?php echo $this->_var['item_0_06218300_1369207040']; ?>"><?php echo $this->_var['key']; ?></a>
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <?php endif; ?>

  <?php if ($this->_var['pager']['page_next']): ?>
  
  <a class="next" href="<?php echo $this->_var['pager']['page_next']; ?>" style="padding-bottom:5px;">下一页 ></a>
  
  <?php else: ?>
 <a class="no" style="padding-bottom:5px;">最后页 ></a>
  <?php endif; ?>
  
  
  <?php if ($this->_var['pager']['page_last']): ?><a class="last" href="<?php echo $this->_var['pager']['page_last']; ?>">...<?php echo $this->_var['lang']['page_last']; ?></a><?php endif; ?>
  <?php if ($this->_var['pager']['page_kbd']): ?>
    <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_06267300_1369207040');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_06267300_1369207040']):
?>
      <?php if ($this->_var['key'] == 'keywords'): ?>
          <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo urldecode($this->_var['item_0_06267300_1369207040']); ?>" />
        <?php else: ?>
          <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_06267300_1369207040']; ?>" />
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <kbd style="float:left; margin-left:8px; position:relative; bottom:3px;"><input type="text" name="page" onkeydown="if(event.keyCode==13)selectPage(this)" size="3" class="B_blue" /></kbd>
    <?php endif; ?>
</div>



<div class="f_r">
 <?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?><?php echo $this->_var['lang']['pager_3']; ?><?php echo $this->_var['pager']['page_count']; ?><?php echo $this->_var['lang']['pager_4']; ?> <span>  
</div>


<?php endif; ?>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<div  class="blank" style="height:40px;"></div>