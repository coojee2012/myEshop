
<?php if ($this->_var['helps']): ?>
<div class="block" >
  <div class="boxhelp mod1 mod2">
  <span class="lt"></span><span class="lb"></span><span class="rt"></span><span class="rb"></span>
   <div class="helpTitBg clearfix">
   <div class="f_l" >
<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');if (count($_from)):
    foreach ($_from AS $this->_var['help_cat']):
?>
<dl>
  <dt><a href='<?php echo $this->_var['help_cat']['cat_id']; ?>' title="<?php echo $this->_var['help_cat']['cat_name']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></a></dt>
  <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
  <dd style="background:url(themes/jd/images/tubiao.gif)  no-repeat left center;"><a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a></dd>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</dl>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<div class="f_r" style="margin-right:10px;">
  <dl>
    <DD><strong>订购热线</strong>（免长途费）<BR>
        <strong class="r">400 600 5505</strong>
    
    <DD><strong>客户服务热线</strong>（免长途费）<BR>
        <strong class="r">400 600 5505</strong> </DD>
  </dl>
  </div>
   </div>
  </div>
</div>
<?php endif; ?>

<div class="blank"></div>