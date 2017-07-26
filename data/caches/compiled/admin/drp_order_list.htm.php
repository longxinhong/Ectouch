<!-- $Id: account_list.htm 14928 2008-10-06 09:25:48Z testyang $ -->
<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

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
--><div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
        <p>
            <a href="drp.php?act=order_list&is_separate=0"><span class="<?php if ($this->_var['is_separate'] == 0): ?>tab-front<?php else: ?>tab-back<?php endif; ?>" id="basic-tab">未分成订单</span></a>
            <a href="drp.php?act=order_list&is_separate=1"><span class="<?php if ($this->_var['is_separate'] == 1): ?>tab-front<?php else: ?>tab-back<?php endif; ?>" id="shop_info-tab">已分成订单</span></a>
        </p>
    </div>
<form method="post" action="" name="listForm">
    <div class="list-div" id="listDiv">
        <?php endif; ?>
        <!--用户列表部分-->
        <table cellpadding="3" cellspacing="1">
            <tr>
                <th><?php echo $this->_var['lang']['order_id']; ?></th>
                <th>订单金额</th>
                <th><?php echo $this->_var['lang']['order_stats']['name']; ?></th>
                <th>佣金明细</th>
                <th><?php echo $this->_var['lang']['user_name']; ?></th>
                <th><?php echo $this->_var['lang']['parent_name']; ?></th>
                <?php if ($this->_var['is_separate'] == 0): ?><th><?php echo $this->_var['lang']['handler']; ?></th><?php endif; ?>

            <tr>
                <?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'li');if (count($_from)):
    foreach ($_from AS $this->_var['li']):
?>
            <tr>
                <td><?php echo $this->_var['li']['order_sn']; ?></td>
                <td><?php echo $this->_var['li']['goods_amount']; ?></td>
                <td><?php echo $this->_var['lang']['os'][$this->_var['li']['order_status']]; ?>,<?php echo $this->_var['lang']['ps'][$this->_var['li']['pay_status']]; ?>,<?php echo $this->_var['lang']['ss'][$this->_var['li']['shipping_status']]; ?></td>
                <td><?php $_from = $this->_var['li']['log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'l');if (count($_from)):
    foreach ($_from AS $this->_var['l']):
?>
                    用户：<?php echo $this->_var['l']['name']; ?>;明细:<?php echo $this->_var['l']['change_desc']; ?><br>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></td>
                <td><?php echo $this->_var['li']['user_name']; ?></td>
                <td><?php echo $this->_var['li']['parent_name']; ?></td>
                <?php if ($this->_var['is_separate'] == 0): ?>
                <td align="center">
                    <?php if ($this->_var['li']['separate'] == 1): ?>
                        <a href="javascript:confirm_redirect(separate_confirm, 'drp.php?act=separate&oid=<?php echo $this->_var['li']['order_id']; ?>')"><?php echo $this->_var['lang']['affiliate_separate']; ?></a>
                    <?php else: ?>
                        <span style="color:#e3e3e3;"><?php echo $this->_var['lang']['affiliate_separate']; ?></span>
                    <?php endif; ?>

                </td>
                <?php endif; ?>

            </tr>
            <?php endforeach; else: ?>
            <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
            <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
    </div>

<script type="text/javascript" language="javascript">
    <!--
    listTable.query = "order_list_query";
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