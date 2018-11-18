<section class="product-sequence dis-box">
	<?php if ($this->_var['order'] == 'ASC' && $this->_var['sort'] == 'sort_order'): ?>
	<a class="box-flex a-change active" href="<?php echo url('index', array('id'=>$this->_var['id'], 'display'=>$this->_var['display'], 'brand'=>$this->_var['brand'], 'price_min'=>$this->_var['price_min'], 'price_max'=>$this->_var['price_max'], 'filter_attr'=>$this->_var['filter_attr'], 'page'=>$this->_var['page'], 'sort'=>'sort_order', 'order'=>'DESC', 'keywords'=>$this->_var['keywords']));?>#goods_list">综合<i class="iconfont icon-xiajiantou"></i></a>
	<?php elseif ($this->_var['order'] == 'DESC' && $this->_var['sort'] == 'sort_order'): ?>
	<a class="box-flex active" href="<?php echo url('index', array('id'=>$this->_var['id'], 'display'=>$this->_var['display'], 'brand'=>$this->_var['brand'], 'price_min'=>$this->_var['price_min'], 'price_max'=>$this->_var['price_max'], 'filter_attr'=>$this->_var['filter_attr'], 'page'=>$this->_var['page'], 'sort'=>'sort_order', 'order'=>'ASC', 'keywords'=>$this->_var['keywords']));?>#goods_list">综合<i class="iconfont icon-xiajiantou"></i></a>
	<?php else: ?>
	<a class="box-flex" href="<?php echo url('index', array('id'=>$this->_var['id'], 'display'=>$this->_var['display'], 'brand'=>$this->_var['brand'], 'price_min'=>$this->_var['price_min'], 'price_max'=>$this->_var['price_max'], 'filter_attr'=>$this->_var['filter_attr'], 'page'=>$this->_var['page'], 'sort'=>'sort_order', 'order'=>'DESC', 'keywords'=>$this->_var['keywords']));?>#goods_list">综合<i class="iconfont icon-xiajiantou"></i></a>
	<?php endif; ?>
	<a class="box-flex <?php if ($this->_var['sort'] == 'last_update'): ?>active<?php endif; ?>" href="<?php echo url('index', array('id'=>$this->_var['id'], 'display'=>$this->_var['display'], 'brand'=>$this->_var['brand'], 'price_min'=>$this->_var['price_min'], 'price_max'=>$this->_var['price_max'], 'filter_attr'=>$this->_var['filter_attr'], 'page'=>$this->_var['page'], 'sort'=>'last_update', 'order'=>'DESC', 'keywords'=>$this->_var['keywords']));?>#goods_list">新品</a>
	<a class="box-flex <?php if ($this->_var['sort'] == 'sales_volume'): ?>active<?php endif; ?>" href="<?php echo url('index', array('id'=>$this->_var['id'], 'display'=>$this->_var['display'], 'brand'=>$this->_var['brand'], 'price_min'=>$this->_var['price_min'], 'price_max'=>$this->_var['price_max'], 'filter_attr'=>$this->_var['filter_attr'], 'page'=>$this->_var['page'], 'sort'=>'sales_volume', 'order'=>'DESC', 'keywords'=>$this->_var['keywords']));?>#goods_list">销量</a>
	<?php if ($this->_var['order'] == 'ASC' && $this->_var['sort'] == 'shop_price'): ?>
	<a class="box-flex a-change active" href="<?php echo url('index', array('id'=>$this->_var['id'], 'display'=>$this->_var['display'], 'brand'=>$this->_var['brand'], 'price_min'=>$this->_var['price_min'], 'price_max'=>$this->_var['price_max'], 'filter_attr'=>$this->_var['filter_attr'], 'page'=>$this->_var['page'], 'sort'=>'shop_price', 'order'=>'DESC', 'keywords'=>$this->_var['keywords']));?>#goods_list">价格<i class="iconfont icon-xiajiantou"></i></a>
	<?php elseif ($this->_var['order'] == 'DESC' && $this->_var['sort'] == 'shop_price'): ?>
	<a class="box-flex active" href="<?php echo url('index', array('id'=>$this->_var['id'], 'display'=>$this->_var['display'], 'brand'=>$this->_var['brand'], 'price_min'=>$this->_var['price_min'], 'price_max'=>$this->_var['price_max'], 'filter_attr'=>$this->_var['filter_attr'], 'page'=>$this->_var['page'], 'sort'=>'shop_price', 'order'=>'ASC', 'keywords'=>$this->_var['keywords']));?>#goods_list">价格<i class="iconfont icon-xiajiantou"></i></a>
	<?php else: ?>
	<a class="box-flex" href="<?php echo url('index', array('id'=>$this->_var['id'], 'display'=>$this->_var['display'], 'brand'=>$this->_var['brand'], 'price_min'=>$this->_var['price_min'], 'price_max'=>$this->_var['price_max'], 'filter_attr'=>$this->_var['filter_attr'], 'page'=>$this->_var['page'], 'sort'=>'shop_price', 'order'=>'DESC', 'keywords'=>$this->_var['keywords']));?>#goods_list">价格<i class="iconfont icon-xiajiantou"></i></a>
	<?php endif; ?>
	<a class="a-sequence j-a-sequence"><i class="iconfont icon-pailie" data="1"></i></a>
</section>
<section class="product-list j-product-list product-list-medium" data="1">
<script id="j-product" type="text/html">
	<ul id="j-product-box">
		<%each list as vo%>
		<li>
			<div class="product-div">
				<a class="product-div-link" href="<%vo.url%>"></a>
				<img class="product-list-img" src="<%vo.goods_img%>" />
				<div class="product-text">
					<h4><%vo.goods_name%></h4>
					<p class="dis-box p-t-remark"><span class="box-flex">库存：<%vo.goods_number%><?php echo $this->_var['category']['measure_unit']; ?></span><!--<span class="box-flex">销量：<%vo.goods_sales%><?php echo $this->_var['category']['measure_unit']; ?></span>--></p>
					<p><span class="p-price t-first ">¥<%vo.shop_price%><small><del>¥<%vo.market_price%></del></small></span></p>
					<a href="javascript:addCart(<%vo.goods_id%>)" class="icon-flow-cart fr j-goods-attr" style="display:None"><i class="iconfont icon-gouwuche"></i></a>
				</div>
			</div>
		</li>
		<%/each%>
	</ul>
	</script>
</section>


