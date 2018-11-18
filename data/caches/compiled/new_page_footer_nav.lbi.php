<div class="filter-btn dis-box">
	<a class="filter-btn-kefu filter-btn-a"><i class="iconfont icon-kefu"></i><em>客服</em></a>
	<a href="<?php echo url('flow/cart');?>" class="filter-btn-flow filter-btn-a"><i class="iconfont icon-gouwuche"></i><sup class="b-color" id='total_number'><?php if ($this->_var['seller_cart_total_number']): ?><?php echo $this->_var['seller_cart_total_number']; ?><?php else: ?>0<?php endif; ?></sup><em>购物车</em></a>
	<a type="button" class="btn-cart box-flex" onClick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);">加入购物车</a>
	<a type="button" class="btn-submit box-flex" onClick="addToCart_quick(<?php echo $this->_var['goods']['goods_id']; ?>);">立即购买</a>
</div>