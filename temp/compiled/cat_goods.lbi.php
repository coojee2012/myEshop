<?php
 $GLOBALS['smarty']->assign('cat_advlist',get_cat_advlist('cat_adlist_'.$GLOBALS['smarty']->_var['goods_cat']['id']));
?>


<DIV class="cat_goods block">
<div class="tit">
 <a href="<?php echo $this->_var['goods_cat']['url']; ?>" ><img style="float:left" src="themes/letao/images/cat/<?php echo $this->_var['goods_cat']['id']; ?>.gif">  </a>
 
 <div class="s">
  <?php $_from = $this->_var['goods_cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'children');$this->_foreach['child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child']['total'] > 0):
    foreach ($_from AS $this->_var['children']):
        $this->_foreach['child']['iteration']++;
?>
 
 
 
  <a href="category.php?id=<?php echo $this->_var['children']['cat_id']; ?>" target="_blank">
  <?php echo $this->_var['children']['cat_name']; ?>
  </a>
   |
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
   <a href="<?php echo $this->_var['goods_cat']['url']; ?>" >更多>></a>
  
  </div>
</div>
<div style="clear:both"></div>
<div class="cat_ads_box clearfix">
   <div class="f_l clearfix">
   <?php echo get_adv('cat_l1',$GLOBALS['smarty']->_var['goods_cat']['id'])?>
    <?php echo get_adv('cat_l2',$GLOBALS['smarty']->_var['goods_cat']['id'])?>
   </div>

 
   <div class="cat_gundong" id="idContainer<?php echo $this->_var['goods_cat']['id']; ?>">
	<ul id="idSlider<?php echo $this->_var['goods_cat']['id']; ?>">
		<li>
        <?php echo get_adv('cat_m1',$GLOBALS['smarty']->_var['goods_cat']['id'])?>
        </li>
		<li>
        <?php echo get_adv('cat_m2',$GLOBALS['smarty']->_var['goods_cat']['id'])?>
        </li>
	</ul>
	<ul class="num" id="idNum<?php echo $this->_var['goods_cat']['id']; ?>">
	</ul>
</div>
   

   <div class="f_r clearfix">
       <?php echo get_adv('cat_r1',$GLOBALS['smarty']->_var['goods_cat']['id'])?>
       <?php echo get_adv('cat_r2',$GLOBALS['smarty']->_var['goods_cat']['id'])?>
       <?php echo get_adv('cat_r3',$GLOBALS['smarty']->_var['goods_cat']['id'])?>
       <?php echo get_adv('cat_r4',$GLOBALS['smarty']->_var['goods_cat']['id'])?>
   </div>
  </div>

<div class="blank5"></div>

    <div class="clearfix goodsBox" style="border:none; padding:0; padding-left:0px;">
   
      <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['cat_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['cat_goods']['iteration']++;
?>
      <div class="goodsItem"  <?php if (($this->_foreach['cat_goods']['iteration'] - 1) % 5 == 0): ?>
            style='padding-left:0;'
            <?php endif; ?>   >
           <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a> 
           <p class="name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></p>
           
       
        <font class="market"> 市场价 <del><?php echo $this->_var['goods']['market_price']; ?></del> </font> <br/>
          
           <?php if ($this->_var['goods']['promote_price'] != ""): ?>
          售价 <font class="shop_s"><?php echo $this->_var['goods']['promote_price']; ?></font>
          <?php else: ?>
          售价 <font class="shop_s"><?php echo $this->_var['goods']['shop_price']; ?></font>
          <?php endif; ?> 
          
          
        </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>

 </div>
<div class="blank"></div>
<script>

var nums<?php echo $this->_var['goods_cat']['id']; ?> = [], timer, n = $$("idSlider<?php echo $this->_var['goods_cat']['id']; ?>").getElementsByTagName("li").length,
	st<?php echo $this->_var['goods_cat']['id']; ?> = new SlideTrans("idContainer<?php echo $this->_var['goods_cat']['id']; ?>", "idSlider<?php echo $this->_var['goods_cat']['id']; ?>", n, {
		onStart: function(){//设置按钮样式
			forEach(nums<?php echo $this->_var['goods_cat']['id']; ?>, function(o, i){ o.className = st<?php echo $this->_var['goods_cat']['id']; ?>.Index == i ? "on" : ""; })
		}
	});
for(var i = 1; i <= n; AddNum(i++)){};
function AddNum(i){
	var num<?php echo $this->_var['goods_cat']['id']; ?> = $$("idNum<?php echo $this->_var['goods_cat']['id']; ?>").appendChild(document.createElement("li"));
	num<?php echo $this->_var['goods_cat']['id']; ?>.innerHTML = i--;
	num<?php echo $this->_var['goods_cat']['id']; ?>.onmouseover = function(){
		timer = setTimeout(function(){ num<?php echo $this->_var['goods_cat']['id']; ?>.className = "on"; st<?php echo $this->_var['goods_cat']['id']; ?>.Auto = false; st<?php echo $this->_var['goods_cat']['id']; ?>.Run(i); }, 200);
	}
	num<?php echo $this->_var['goods_cat']['id']; ?>.onmouseout = function(){ clearTimeout(timer); num<?php echo $this->_var['goods_cat']['id']; ?>.className = ""; st<?php echo $this->_var['goods_cat']['id']; ?>.Auto = true; st<?php echo $this->_var['goods_cat']['id']; ?>.Run(); }
	nums<?php echo $this->_var['goods_cat']['id']; ?>[i] = num<?php echo $this->_var['goods_cat']['id']; ?>;
}
st<?php echo $this->_var['goods_cat']['id']; ?>.Run();




</script>
