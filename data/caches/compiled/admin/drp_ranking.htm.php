<!-- $Id: account_list.htm 14928 2008-10-06 09:25:48Z testyang $ -->
<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<div class="form-div">
    <!--<form action="affiliate_ck.php?act=list">-->
        <!--搜索订单号-->
        <!--<input type="hidden" name="act" value="list">-->
        <!--<input name="order_sn" type="text" id="order_sn" size="15"><input type="submit" value=" 搜索 " class="button">-->
    <!--</form>-->

    销售时间:  <a href="drp.php?act=ranking">全部</a>
    <a href="drp.php?act=ranking&time=1">一年</a>
    <a href="drp.php?act=ranking&time=2">半年</a>
    <a href="drp.php?act=ranking&time=3">一个月</a>
</div>
<form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">
<?php endif; ?>  
<table cellpadding="4" cellspacing="1">
    <tr>
        <th style=""><?php echo $this->_var['lang']['cate_id']; ?></th>
        <th style=""><?php echo $this->_var['lang']['user']['user_name']; ?></th>
        <th style=""><?php echo $this->_var['lang']['user']['sale_money']; ?></th>
        <th style=""><?php echo $this->_var['lang']['user']['shop_name']; ?></th>
        <th style=""><?php echo $this->_var['lang']['user']['shop_mobile']; ?></th>
        <th style=""><?php echo $this->_var['lang']['user']['shop_qq']; ?></th>
        <th style=""><?php echo $this->_var['lang']['user']['create_time']; ?></th>
    </tr>
    <?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'li');if (count($_from)):
    foreach ($_from AS $this->_var['li']):
?>
    <tr>
        <td><?php echo $this->_var['li']['id']; ?></td>
        <td><?php echo $this->_var['li']['user_name']; ?></td>
        <td><?php echo $this->_var['li']['sale_money']; ?></td>
        <td><?php echo $this->_var['li']['shop_name']; ?></td>
        <td><?php echo $this->_var['li']['shop_mobile']; ?></td>
        <td><?php echo $this->_var['li']['shop_qq']; ?></td>
        <td><?php echo $this->_var['li']['create_time']; ?></td>
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
  listTable.query = 'ranking_query';
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