<!-- $Id: account_list.htm 14928 2008-10-06 09:25:48Z testyang $ -->
<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<script type="text/javascript" src="../data/assets/js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../data/assets/js/calendar/calendar.css" rel="stylesheet" type="text/css" />

<!--
<div class="form-div">
<form method="post" action="account_log.php?act=list&user_id=<?php echo $_GET['user_id']; ?>" name="searchForm">
  <select name="account_type" onchange="document.forms['searchForm'].submit()">
    <option value="" <?php if ($this->_var['account_type'] == ''): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['lang']['all_account']; ?></option>
    <option value="user_money" <?php if ($this->_var['account_type'] == 'user_money'): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['lang']['user_money']; ?></option>
    <option value="frozen_money" <?php if ($this->_var['account_type'] == 'frozen_money'): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['lang']['frozen_money']; ?></option>
    <option value="rank_points" <?php if ($this->_var['account_type'] == 'rank_points'): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['lang']['rank_points']; ?></option>
    <option value="pay_points" <?php if ($this->_var['account_type'] == 'pay_points'): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['lang']['pay_points']; ?></option>
  </select>
  <strong><?php echo $this->_var['lang']['label_user_name']; ?></strong><?php echo $this->_var['user']['user_name']; ?>
  <strong><?php echo $this->_var['lang']['label_user_money']; ?></strong><?php echo $this->_var['user']['formated_user_money']; ?>
  <strong><?php echo $this->_var['lang']['label_frozen_money']; ?></strong><?php echo $this->_var['user']['formated_frozen_money']; ?>
  <strong><?php echo $this->_var['lang']['label_rank_points']; ?></strong><?php echo $this->_var['user']['rank_points']; ?>
  <strong><?php echo $this->_var['lang']['label_pay_points']; ?></strong><?php echo $this->_var['user']['pay_points']; ?>
  </form>
</div>
-->
<div>
    
    <form action="drp.php?act=export&from=<?php echo $_GET['act']; ?>" method="post" name="listForm">
      <input name="start_time" type="text" id="start_time" size="22" value='<?php echo $this->_var['stime']; ?>' readonly="readonly" />
      <input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('start_time', '%Y-%m-%d %H:%M', '24', false, 'selbtn1');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>
      <input name="end_time" type="text" id="end_time" size="22" value='<?php echo $this->_var['etime']; ?>' readonly="readonly" />
      <input name="selbtn2" type="button" id="selbtn2" onclick="return showCalendar('end_time', '%Y-%m-%d %H:%M', '24', false, 'selbtn2');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>  
      <input type="submit" value="<?php echo $this->_var['lang']['download']; ?>" class='button' onclick="this.form.target = '_blank'"/>
    </form>
    
</div>

<form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">
<?php endif; ?>  
<table cellpadding="4" cellspacing="1">
    <tr>
        <th style=""><?php echo $this->_var['lang']['cate_id']; ?></th>
        <th style=""><?php echo $this->_var['lang']['user']['user_name']; ?></th>
        <th style=""><?php echo $this->_var['lang']['user']['real_name']; ?></th>
        <th style=""><?php echo $this->_var['lang']['user']['shop_name']; ?></th>
        <th style=""><?php echo $this->_var['lang']['user']['shop_mobile']; ?></th>
        <th style=""><?php echo $this->_var['lang']['user']['shop_qq']; ?></th>
        <th style=""><?php echo $this->_var['lang']['user']['create_time']; ?></th>
        <th style=""><?php echo $this->_var['lang']['user']['open']; ?></th>
        <th style=""><?php echo $this->_var['lang']['handle']; ?></th>
    </tr>
    <?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'li');if (count($_from)):
    foreach ($_from AS $this->_var['li']):
?>
    <tr>
        <td><?php echo $this->_var['li']['id']; ?></td>
        <td><?php echo $this->_var['li']['user_name']; ?></td>
        <td><?php echo $this->_var['li']['real_name']; ?></td>
        <td><?php echo $this->_var['li']['shop_name']; ?></td>
        <td><?php echo $this->_var['li']['shop_mobile']; ?></td>
        <td><?php echo $this->_var['li']['shop_qq']; ?></td>
        <td><?php echo $this->_var['li']['create_time']; ?></td>
        <td><?php if ($this->_var['li']['open'] == 1): ?><?php echo $this->_var['lang']['user']['open_true']; ?><?php else: ?><?php echo $this->_var['lang']['user']['open_false']; ?><?php endif; ?></td>
        <td>
            <a href="drp.php?act=user_order&id=<?php echo $this->_var['li']['user_id']; ?>"  title="<?php echo $this->_var['lang']['view']; ?>"><img src="images/icon_view.gif" width="16" height="16" border="0"></a>
            <a href="drp.php?act=user_audit_edit&id=<?php echo $this->_var['li']['id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" border="0" height="16" width="16" /></a>
            <!--<a href="javascript:confirm('<?php echo $this->_var['lang']['change']; ?>') ? location.href='drp.php?act=user_change&id=<?php echo $this->_var['li']['id']; ?>&open=<?php echo $this->_var['li']['open']; ?>' :''" title="<?php echo $this->_var['lang']['change']; ?>"><img src="images/icon_drop.gif" border="0" height="16" width="16" /></a>-->
        </td>
    </tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
<table id="page-table" cellspacing="0">
  <tr>
    <td align="right" nowrap="true">
    <?php echo $this->fetch('page.htm'); ?>
    </td>
  </tr>
</table>

<?php if ($this->_var['full_page']): ?>
</div>
</form>

<script type="text/javascript" language="javascript">
  <!--
  listTable.query = 'users_audit_query';
  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  
  onload = function()
  {
      // 开始检查订单
      startCheckOrder();
  }
  
  //-->
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>