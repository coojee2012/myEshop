<div class="box">
 <div class="box_1 art">
  <h3>
  <span> <?php echo htmlspecialchars($this->_var['articles_cat']['name']); ?> </span>
  <a style="float:right; padding-top:3px" href="<?php echo $this->_var['articles_cat']['url']; ?>">更多>></a>
  </h3>
  <div class="boxCenterList RelaArticle ">
  <?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['article_item']):
        $this->_foreach['no']['iteration']++;
?>
 <?php if ($this->_foreach['no']['iteration'] < 3): ?>
 <a style="color:#f9044e" href="<?php echo $this->_var['article_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article_item']['title']); ?>"><?php echo $this->_var['article_item']['short_title']; ?></a> 
  <?php else: ?>	
  <a href="<?php echo $this->_var['article_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article_item']['title']); ?>"><?php echo $this->_var['article_item']['short_title']; ?></a>  
    <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
 </div>
</div>
<div class="blank5"></div>
