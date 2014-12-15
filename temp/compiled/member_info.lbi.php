
<?php if ($this->_var['user_info']): ?>

<?php echo $this->_var['lang']['hello']; ?>，<span class="f4_b"><?php echo $this->_var['user_info']['username']; ?></span> |  
<a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a> | 
 <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>　|

<?php else: ?>

 <a href="user.php">请登陆</a> | <a href="user.php?act=register">免费注册</a> |
<?php endif; ?>
 