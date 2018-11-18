<?php echo $this->fetch('library/new_page_header.lbi'); ?>
<div class="con">
	
	<div class="goods">
		<div class="ect-bg">
			<header class="ect-header ect-margin-tb ect-margin-lr text-center icon-write ect-bg">
				<a href="javascript:history.go(-1)" class="pull-left ect-icon ect-icon1 ect-icon-history"></a> <span><?php echo $this->_var['title']; ?></span>
				<a href="javascript:;" onClick="openMune()" class="pull-right ect-icon ect-icon1 ect-icon-mune icon-write"></a>
			</header>
			<nav class="ect-nav ect-nav-list" style="display:none;">
				<?php echo $this->fetch('library/page_menu.lbi'); ?>
			</nav>
		</div>

		
		<div class="goods-photo j-show-goods-img">
			<div class="hd">
				<ul>
				</ul>
			</div>
			<span class="goods-num" id="goods-num"><span id="g-active-num"></span>/<span id="g-all-num"></span></span>
			<ul class="swiper-wrapper">
				<li class="swiper-slide tb-lr-center"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" /></li>
				<?php if ($this->_var['pictures']): ?>
				<?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
?>
				<?php if (($this->_foreach['no']['iteration'] - 1) > 0): ?>
				<li class="swiper-slide tb-lr-center"><img src="<?php echo $this->_var['picture']['img_url']; ?>" alt="<?php echo $this->_var['picture']['img_desc']; ?>" /></li>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<?php endif; ?>
			</ul>
			<div class="swiper-pagination"></div>
		</div>
		
		<div class="goods-info">
			
			<section class="goods-title b-color-f padding-all ">
				<div class="dis-box">
					<h3 class="box-flex"><?php echo $this->_var['goods']['goods_style_name']; ?></h3>
		
		<span class="heart j-heart <?php if ($this->_var['sc'] == 1): ?>active<?php endif; ?>" onClick="collect(<?php echo $this->_var['goods']['goods_id']; ?>)" id='ECS_COLLECT'><i class="ts-2"></i><em class="ts-2"><?php echo $this->_var['lang']['btn_collect']; ?></em></span>
				</div>
			</section>
  
			<section class="goods-price padding-all b-color-f">
				<p class="p-price">
					<span class="t-first">
				<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
				<?php echo $this->_var['goods']['promote_price']; ?>
				<?php else: ?>
				<?php echo $this->_var['goods']['shop_price_formated']; ?>
				<?php endif; ?></span>
					<!-- <em class="em-promotion">5.8折</em></p> -->
				<p class="p-market">
					市场价<del><?php if ($this->_var['cfg']['SHOW_MARKETPRICE']): ?><?php echo $this->_var['goods']['market_price']; ?> <?php endif; ?></del>
				</p>
				<p class=" dis-box g-p-tthree m-top06">
					<span class="box-flex text-left"><?php echo $this->_var['lang']['sort_sales']; ?>：<?php echo $this->_var['sales_count']; ?></span>
					<span class="box-flex text-right">库存 <?php echo $this->_var['goods']['goods_number']; ?></span>
				</p>
			</section>
			<?php if ($this->_var['promotion']): ?>
			<section class="ect-margin-tb ect-margin-bottom0 ect-padding-tb goods-promotion ect-padding-lr ">
				<h5><b><?php echo $this->_var['lang']['activity']; ?>：</b></h5>
				<p class="ect-border-top ect-margin-tb">
					<?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
					<?php if ($this->_var['item']['type'] == "snatch"): ?>
					<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang']['snatch']; ?>"><i class="label tbqb"><?php echo $this->_var['lang']['snatch_act']; ?></i> [<?php echo $this->_var['lang']['snatch']; ?>]<i class="pull-right fa fa-angle-right"></i></a>
					<?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
					<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang']['group_buy']; ?>"><i class="label tuan"><?php echo $this->_var['lang']['group_buy_act']; ?></i> [<?php echo $this->_var['lang']['group_buy']; ?>]<i class="pull-right fa fa-angle-right"></i></a>
					<?php elseif ($this->_var['item']['type'] == "auction"): ?>
					<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang']['auction']; ?>"><i class="label pm"><?php echo $this->_var['lang']['auction_act']; ?></i> [<?php echo $this->_var['lang']['auction']; ?>]<i class="pull-right fa fa-angle-right"></i></a>
					<?php elseif ($this->_var['item']['type'] == "favourable"): ?>
					<a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>">
						<?php if ($this->_var['item']['act_type'] == 0): ?>
						<i class="label mz"><?php echo $this->_var['lang']['favourable_mz']; ?></i>
						<?php elseif ($this->_var['item']['act_type'] == 1): ?>
						<i class="label mj"><?php echo $this->_var['lang']['favourable_mj']; ?></i>
						<?php elseif ($this->_var['item']['act_type'] == 2): ?>
						<i class="label zk"><?php echo $this->_var['lang']['favourable_zk']; ?></i>
						<?php endif; ?><?php echo $this->_var['item']['act_name']; ?> <i class="pull-right fa fa-angle-right"></i></a>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</p>
			</section>
			<?php endif; ?>
			

			<form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY">
				<section class="goods-more-a">
					<!--  <a class="ect-padding-lr ect-padding-tb" href="<?php echo url('goods/info',array('id'=>$this->_var['goods']['goods_id']));?>"><span class="Text"><?php echo $this->_var['lang']['goods_brief']; ?></span> <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a> 
      <a class="ect-padding-lr ect-padding-tb" href="<?php echo url('goods/comment_list',array('id'=>$this->_var['goods']['goods_id']));?>"><span class="Text"><?php echo $this->_var['lang']['goods_comment']; ?></span> <span class="pull-right"><span class="ect-color"><?php echo $this->_var['comments']['count']; ?></span><?php echo $this->_var['lang']['comment_num']; ?> <span class="ect-color"><?php echo $this->_var['comments']['favorable']; ?>%</span><?php echo $this->_var['lang']['favorable_comment']; ?> <i class="fa fa-chevron-right"></i></span></a>  -->
				</section>

				<section class="m-top1px padding-all b-color-f goods-attr j-goods-attr j-show-div">
					<div class="dis-box">
						<label class="t-remark g-t-temark">已选</label>
						<div class="box-flex t-goods1 ">请选择</div>
						<span class="t-jiantou"><i class="iconfont icon-jiantou tf-180"></i></span>
					</div>
					
					<div class="mask-filter-div"></div>
					<div class="show-goods-attr j-filter-show-div ts-3 b-color-1">
						<section class="s-g-attr-title b-color-1  product-list-small">
							<div class="product-div">
								<img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" class="product-list-img" />
								<div class="product-text">
									<div class="dis-box">
										<h4 class="box-flex"><?php echo $this->_var['goods']['goods_style_name']; ?></h4>
										<i class="iconfont icon-guanbi1 show-div-guanbi"></i>
									</div>
									<p><span class="p-price t-first" id="ECS_GOODS_AMOUNT">
										<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
										<?php echo $this->_var['goods']['promote_price']; ?>
										<?php else: ?>
										<?php echo $this->_var['goods']['shop_price_formated']; ?>
										<?php endif; ?></span>
									</p>
									<p class="dis-box p-t-remark"><span class="box-flex">库存:<?php echo $this->_var['goods']['goods_number']; ?></span></p>
								</div>
							</div>
						</section>
						<section class="s-g-attr-con swiper-scroll b-color-f padding-all m-top1px">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['spec'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['spec']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['spec']['iteration']++;
?>
									<h4 class="t-remark"><?php echo $this->_var['spec']['name']; ?>：</h4>
									<ul class="select-one  <?php if ($this->_var['spec']['attr_type'] == 1): ?>j-get-one<?php else: ?>j-get-more<?php endif; ?> m-top10">
										<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
										<li class="ect-select dis-flex fl" >
											<input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
											<label class="ts-1 <?php if ($this->_var['key'] == 0): ?>active<?php endif; ?>" for="spec_value_<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?></label>
										</li>
										 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
									</ul>
									 <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
									 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 

									<h4 class="t-remark">数量</h4>
									<div class="div-num dis-box m-top08">
										<a class="num-less" onClick="changePrice('1')"></a>
										<input class="box-flex" type="text" value="1" name="number" id="goods_number" autocomplete="off" />
										<a class="num-plus" onClick="changePrice('3')"></a>
									</div>
								</div>
							</div>
							<div class="swiper-scrollbar"></div>
						</section>
						<section class="ect-button-more dis-box padding-all">
							<a class="btn-cart box-flex" type="button" onClick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);">加入购物车</a>
							<a class="btn-submit box-flex" type="button" onClick="addToCart_quick(<?php echo $this->_var['goods']['goods_id']; ?>);">立即购买</a>
						</section>
						</form>
					</div>
					
			</section>
			
		<section class="m-top04 goods-evaluation">
			<a href="<?php echo url('goods/comment_list',array('id'=>$this->_var['goods']['goods_id']));?>">
				<div class="dis-box padding-all b-color-f  g-evaluation-title">
					<label class="t-remark g-t-temark">用户评价</label>
					<div class="box-flex t-goods1">好评率 <em class="t-first"><?php echo $this->_var['comments']['favorable']; ?>%</em></div>
					<div class="t-goods1"><em class="t-first"><?php echo $this->_var['goods']['comment_count']; ?></em><span class="t-jiantou"><?php echo $this->_var['comments']['count']; ?>人评论<i class="iconfont icon-jiantou tf-180"></i></span></div>
				</div>
			</a>
			<div class="padding-all m-top1px b-color-f g-evaluation-con">
				<?php $_from = $this->_var['comment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');$this->_foreach['com'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['com']['total'] > 0):
    foreach ($_from AS $this->_var['comment']):
        $this->_foreach['com']['iteration']++;
?>
				<?php if (($this->_foreach['com']['iteration'] - 1) < 5): ?>
				<div class="of-hidden evaluation-list">
					<div class="of-hidden ">
						<p class="fl"><span class="grade-star g-star-<?php echo $this->_var['comment']['rank']; ?> fl"></span><em class="t-remark fl"><?php if ($this->_var['comment']['user_name']): ?><?php echo htmlspecialchars($this->_var['comment']['user_name']); ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></em></p>
						<p class="fr t-remark"><?php echo $this->_var['comment']['add_time']; ?></p>
					</div>
					<p class="clear m-top10 t-goods1"><?php echo $this->_var['comment']['content']; ?></p>
					<?php if ($this->_var['comment']['re_content']): ?>
						  <p><font class="f1"><?php echo $this->_var['lang']['admin_username']; ?></font><?php echo $this->_var['comment']['re_content']; ?></p>
					<?php endif; ?>
					<p style="display:none;" class="clear m-top08 t-remark">颜色分类：70cm、5144蓝色</p>
				</div>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<!--<div class="of-hidden evaluation-list">
					<div class="of-hidden ">
						<p class="fl"><span class="grade-star g-star-5 fl"></span><em class="t-remark fl">s****y</em></p>
						<p class="fr t-remark">2015-08-09 10:46:43</p>
					</div>
					<p class="clear m-top10 t-goods1">很好看，大小刚刚好 很好看</p>
					<p class="clear m-top08 t-remark">颜色分类：70cm、5144蓝色</p>
					<div class="ect-button-more m-top10 dis-box">
						<a class="box-flex btn-default">有图评价</a>
						<a href="<?php echo url('goods/comment_list',array('id'=>$this->_var['goods']['goods_id']));?>" class="box-flex btn-default">全部评价</a>
					</div>
				</div>-->
			</div>
		</section>
		<section class="padding-all text-center t-remark2 ">
			<a href="<?php echo url('goods/info',array('id'=>$this->_var['goods']['goods_id']));?>" class="j-goodsinfo-div">点击查看商品详情</a>
		</section>

		</form>
		
	</div>
	
	<div class="mask-filter-div"></div>
	
	<script type="text/javascript">
		function showDiv() {
			document.getElementById('popDiv').style.display = 'block';
			document.getElementById('hidDiv').style.display = 'block';
			document.getElementById('cartNum').innerHTML = document.getElementById('goods_number').value;
			document.getElementById('cartPrice').innerHTML = document.getElementById('ECS_GOODS_AMOUNT').innerHTML;
		}

		function closeDiv() {
			document.getElementById('popDiv').style.display = 'none';
			document.getElementById('hidDiv').style.display = 'none';
		}
	</script>
	<div class="tipMask" id="hidDiv" style="display:none"></div>

	

</div>
<?php echo $this->fetch('library/new_page_footer_nav.lbi'); ?>
<?php echo $this->fetch('library/search.lbi'); ?>
<?php echo $this->fetch('library/new_page_footer.lbi'); ?>

</div>

<script type="text/javascript" src="__TPL__/js/lefttime.js"></script>
<script type="text/javascript">
	/*点击下拉菜单*/
	function openMune() {
	    if ($(".ect-nav").is(":visible")) {
	        $(".ect-nav").hide();
	    } else {
	        $(".ect-nav").show();
	    }
	}
	/*倒计时*/
	var goods_id = <?php echo $this->_var['goods_id']; ?>;
	var goodsattr_style = 1;
	var gmt_end_time = 0;
	var day = "天";
	var hour = "小时";
	var minute = "分钟";
	var second = "秒";
	var end = "结束";
	var goodsId = <?php echo $this->_var['goods_id']; ?>;
	var now_time = <?php echo $this->_var['now_time']; ?>;
	var use_how_oos = <?php echo C('use_how_oos');?>;
$(function() {
  changePrice(2);
  //fixpng();
  try {onload_leftTime();}
  catch (e) {}
});

	function back_goods_number() {
		var goods_number = document.getElementById('goods_number').value;
		document.getElementById('back_number').value = goods_number;
	}
	/**
	 * 点选可选属性或改变数量时修改商品价格的函数
	 */
	function changePrice(type) {
		var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
		if (type == 1) {
			qty--;
		}
		if (type == 3) {
			qty++;
		}
		if (qty <= 0) {
			qty = 1;
		}
		if (!/^[0-9]*$/.test(qty)) {
			qty = document.getElementById('back_number').value;
		}
		document.getElementById('goods_number').value = qty;
		var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
		$.get('<?php echo url("goods/price");?>', {
			'id': goodsId,
			'attr': attr,
			'number': qty
		}, function(data) {
			changePriceResponse(data);
		}, 'json');
	}
	/**
	 * 接收返回的信息
	 */
	function changePriceResponse(res) {
		if (res.err_msg.length > 0) {
			alert(res.err_msg);
		} else {
			if (document.getElementById('ECS_GOODS_AMOUNT'))
				document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
		}
	}

	
</script>
<script>
	$(function($) {
	
		var handler = function(e) { //禁止浏览器默认行为
			e.preventDefault();
		};
		/*弹出层方式*/
		$(".j-show-div").click(function() {
			document.addEventListener("touchmove", handler, false);
			$(this).find(".j-filter-show-div").addClass("show");
			$(".mask-filter-div").addClass("show");
		});
		/*关闭弹出层*/
		$(".mask-filter-div,.show-div-guanbi").click(function() {
			document.removeEventListener("touchmove", handler, false);
			$(".j-filter-show-div").removeClass("show");
			$(".mask-filter-div").removeClass("show");
			return false;
		});
		/*商品详情相册切换*/
		var swiper = new Swiper('.goods-photo', {
			paginationClickable: true,
			onInit: function(swiper) {
				document.getElementById("g-active-num").innerHTML = swiper.activeIndex + 1;
				document.getElementById("g-all-num").innerHTML = swiper.slides.length;
			},
			onSlideChangeStart: function(swiper) {
				document.getElementById("g-active-num").innerHTML = swiper.activeIndex + 1;
			}
		});
	});
</script>
</body>

</html>