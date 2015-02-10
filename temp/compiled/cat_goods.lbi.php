<div class="mod1 blank" id="CatGoods">
	<span class="lt"></span><span class="lb"></span><span class="rt"></span><span class="rb"></span>
	<h1 class="mod1tit"><?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?><a href="<?php echo $this->_var['goods_cat']['url']; ?>" class="more">更多</a></h1>
	<div class="mod1con group">
		<?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_47195000_1419685117');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_47195000_1419685117']):
?>
	 <div class="goodsbox">
	  <div class="imgbox"><a href="<?php echo $this->_var['goods_0_47195000_1419685117']['url']; ?>"><img src="<?php echo $this->_var['goods_0_47195000_1419685117']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_47195000_1419685117']['name']); ?>" /></a></div>
   <a href="<?php echo $this->_var['goods_0_47195000_1419685117']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_47195000_1419685117']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_47195000_1419685117']['short_name']); ?></a><br />
   <?php if ($this->_var['goods_0_47195000_1419685117']['promote_price'] != ""): ?>
   <?php echo $this->_var['lang']['promote_price']; ?><b class="f1"><?php echo $this->_var['goods_0_47195000_1419685117']['promote_price']; ?></b><br>
   <?php else: ?>
   <?php echo $this->_var['lang']['shop_price']; ?><b  class="f1"><?php echo $this->_var['goods_0_47195000_1419685117']['shop_price']; ?></b><br>
   <?php endif; ?>
	</div>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
</div>
<script type="text/javascript">divheight("CatGoods");</script>