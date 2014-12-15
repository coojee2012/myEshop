<?php if ($this->_var['brand_list']): ?>
<div class="brands">


<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_72892200_1369205578');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_72892200_1369205578']):
        $this->_foreach['no']['iteration']++;
?>
<?php if ($this->_foreach['no']['iteration'] < 6): ?>
<dl>
<dt>
<a href="<?php echo $this->_var['cat_0_72892200_1369205578']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat_0_72892200_1369205578']['name']); ?></a>
<img src="themes/letao/images/tree<?php echo $this->_foreach['no']['iteration']; ?>.gif">
</dt>
<dd>
<?php $_from = $this->_var['cat_0_72892200_1369205578']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_72916300_1369205578');$this->_foreach['no1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no1']['total'] > 0):
    foreach ($_from AS $this->_var['child_0_72916300_1369205578']):
        $this->_foreach['no1']['iteration']++;
?>
<span class="span<?php echo $this->_foreach['no1']['iteration']; ?>"><a href="<?php echo $this->_var['child_0_72916300_1369205578']['url']; ?>"><?php echo htmlspecialchars($this->_var['child_0_72916300_1369205578']['name']); ?></a><b>|</b>
<font><br/></font>
</span>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</dd>
</dl>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
 
 
<dl>
<dt>
<a href="brand.php">热卖品牌</a>
<img src="themes/letao/images/brand_tit.gif">
</dt>
<dd>
<?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['no2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no2']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['no2']['iteration']++;
?>
<span class="span<?php echo $this->_foreach['no2']['iteration']; ?>"><a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?></a><b>|</b>
<font><br/></font>
</span>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</dd>
</dl>










</div>
<?php endif; ?>
