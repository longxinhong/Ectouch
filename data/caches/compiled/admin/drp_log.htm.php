<?php if ($this->_var['full_page']): ?>
<!-- $Id: user_account_list.htm 17030 2010-02-08 09:39:33Z sxc_shop $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../admin/styles/general.css')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<script type="text/javascript" src="../data/assets/js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../data/assets/js/calendar/calendar.css" rel="stylesheet" type="text/css" />
<!--<div class="form-div">-->
  <!--<form action="drp.php?act=search" name="searchForm" method="post" >-->
    <!--<img src="images/icon_search.gif" width="25" height="22" border="0" alt="SEARCH" />-->
    <!--<?php echo $this->_var['lang']['delete_search']; ?> <input type="text" name="keyword" size="10" />-->
      <!--<input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" />-->
  <!--</form>-->
<!--</div>-->

<div>
    
    <form action="drp.php?act=drplogexport" method="post" name="listForm">
      <input name="start_time" type="text" id="start_time" size="22" value='<?php echo $this->_var['stime']; ?>' readonly="readonly" />
      <input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('start_time', '%Y-%m-%d %H:%M', '24', false, 'selbtn1');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>
      <input name="end_time" type="text" id="end_time" size="22" value='<?php echo $this->_var['etime']; ?>' readonly="readonly" />
      <input name="selbtn2" type="button" id="selbtn2" onclick="return showCalendar('end_time', '%Y-%m-%d %H:%M', '24', false, 'selbtn2');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>  
      <input type="submit" value="<?php echo $this->_var['lang']['download']; ?>" class='button' onclick="this.form.target = '_blank'"/>
    </form>

</div>




<form method="POST" action="" name="listForm">
<!-- start user_deposit list -->
<div class="list-div" id="listDiv">
<?php endif; ?>
<table cellpadding="3" cellspacing="1">
  <tr>
  	<th><input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox">
  	<a href="javascript:listTable.sort('log_id'); "><?php echo $this->_var['lang']['cate_id']; ?></a><?php echo $this->_var['sort_log_id']; ?></th>
    <th><a href="javascript:listTable.sort('user_name', 'DESC'); "><?php echo $this->_var['lang']['shop_name']; ?></a><?php echo $this->_var['sort_user_name']; ?></th>
    <th><a href="javascript:listTable.sort('add_time', 'DESC'); "><?php echo $this->_var['lang']['user_id']; ?></a><?php echo $this->_var['sort_add_time']; ?></th>
    <th><a href="javascript:listTable.sort('add_time', 'DESC'); "><?php echo $this->_var['lang']['add_date']; ?></a><?php echo $this->_var['sort_add_time']; ?></th>
    <th><a href="javascript:listTable.sort('payment', 'DESC'); "><?php echo $this->_var['lang']['withdraw_gold']; ?></a><?php echo $this->_var['sort_payment']; ?></th>
    <th><a href="javascript:listTable.sort('is_paid', 'DESC'); "><?php echo $this->_var['lang']['withdrawals_info']; ?></a><?php echo $this->_var['sort_is_paid']; ?></th>
    <th><a href="javascript:listTable.sort('is_paid', 'DESC'); "><?php echo $this->_var['lang']['commission_fettle']; ?></a><?php echo $this->_var['sort_is_paid']; ?></th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  </tr>
  <?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
  <tr>

    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="<?php echo $this->_var['item']['log_id']; ?>" /><?php echo $this->_var['item']['log_id']; ?></span></td>
    <td align="center"><?php echo $this->_var['item']['shop_name']; ?></td>
    <td align="center"><?php echo $this->_var['item']['user_name']; ?></td>
    <td align="right"><?php echo $this->_var['item']['change_time']; ?></td>
    <td align="right"><?php echo $this->_var['item']['user_money']; ?></td>
    <td align="center"><?php echo $this->_var['item']['bank_info']; ?></td>
    <td align="center"><?php echo $this->_var['item']['status_show']; ?></td>
    <td align="center"><?php echo $this->_var['item']['admin_user']; ?>
    <?php if ($this->_var['item']['status'] == 0): ?><a rel="drp.php?act=drp_refer&id=<?php echo $this->_var['item']['log_id']; ?>" title="<?php echo $this->_var['lang']['withdraw']; ?>"><img src="images/icon_send_bonus.gif" class="withdraw" border="0" height="16" width="16" />
    <?php else: ?><a rel="drp.php?act=order_delete&id=<?php echo $this->_var['item']['log_id']; ?>" title="<?php echo $this->_var['lang']['drop']; ?>"><img src="images/icon_drop.gif" class="drop" border="0" height="16" width="16" />
    <?php endif; ?></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
<table id="page-table" cellspacing="0">

<tr>
    <td align="right" nowrap="true" colspan="10"><?php echo $this->fetch('page.htm'); ?></td>
  </tr>
</table>
<?php if ($this->_var['full_page']): ?>
</div>
</form>
<!-- end ad_position list -->
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" language="JavaScript">
$(function(){
	$(".withdraw").on('click',function(){
		var toggle = confirm('确定要提现吗?'),
			rel = $(this).parent().attr('rel');
		if(toggle){
			window.location.href = rel;
		}
	})
	$(".drop").on('click',function(){
		var toggle = confirm('确定要删除?'),
			rel = $(this).parent().attr('rel');
		if(toggle){
			window.location.href = rel;
		}
	})
	
})
</script>
<script type="text/javascript" language="JavaScript">
    listTable.query = "drp_log_query";
    listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
    listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  

  

  
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>
