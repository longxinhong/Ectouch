<?php if ($this->_var['full_page']): ?>
<!-- $Id: users_list.htm 15617 2009-02-18 05:18:00Z sunxiaodong $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<form method="POST" action="" name="listForm">

<!-- start users list -->
<div class="list-div" id="listDiv">
<?php endif; ?>
<!--用户列表部分-->
<table cellpadding="3" cellspacing="1">
  <tr>
    <th><?php echo $this->_var['lang']['cate_id']; ?></th>
    <th><?php echo $this->_var['lang']['cate_name']; ?></th>
    <th><?php echo $this->_var['lang']['profit1']; ?></th>
    <th><?php echo $this->_var['lang']['profit2']; ?></th>
    <th><?php echo $this->_var['lang']['profit3']; ?></th>

    <th><?php echo $this->_var['lang']['handler']; ?></th>
  <tr>
  <?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'li');if (count($_from)):
    foreach ($_from AS $this->_var['li']):
?>
  <tr>
    <td><?php echo $this->_var['li']['cat_id']; ?></td>
    <td class="first-cell"><?php echo htmlspecialchars($this->_var['li']['cat_name']); ?></td>
    <td class="first-cell"><?php echo $this->_var['li']['profit1']; ?>%</td>
    <td><?php echo $this->_var['li']['profit2']; ?>%</td>
    <td><?php echo $this->_var['li']['profit3']; ?>%</td>
    <td align="center">
      <a href="drp.php?act=edit&id=<?php echo $this->_var['li']['cat_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" border="0" height="16" width="16" /></a>
    </td>
  </tr>
  <?php endforeach; else: ?>
  <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>

<?php if ($this->_var['full_page']): ?>
</div>
<!-- end users list -->
</form>

<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>