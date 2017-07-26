<?php echo $this->fetch('library/user_header.lbi'); ?>
<style>
.user-account-message{font-size:2.5rem;margin-left:30%;margin-top:30%;}


</style>
<?php if ($this->_var['message_list']): ?>
    <div class="user-account-detail" >
      <ul class="ect-bg-colorf" >
        <?php $_from = $this->_var['message_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'msg');$this->_foreach['message_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['message_list']['total'] > 0):
    foreach ($_from AS $this->_var['msg']):
        $this->_foreach['message_list']['iteration']++;
?>
        <li class="single_item">
            <p> 
            <a style="color:#1CA2E1; float:right; font-weight:normal;" onclick="if (!confirm('<?php echo $this->_var['lang']['confirm_remove_msg']; ?>')) return false;" href="<?php echo $this->_var['msg']['url']; ?>"><?php echo $this->_var['lang']['drop']; ?></a><?php echo $this->_var['msg']['msg_type']; ?>:<?php echo $this->_var['msg']['msg_title']; ?> - <?php echo $this->_var['msg']['msg_time']; ?> </p>
            <p style="color:#999;"> <?php echo $this->_var['msg']['msg_content']; ?> </p>
            <?php if ($this->_var['msg']['re_msg_content']): ?>
            <table>
              <tr>
                <td> <?php echo $this->_var['lang']['shopman_reply']; ?>(<?php echo $this->_var['msg']['re_msg_time']; ?>)<br/>
                  <?php echo $this->_var['msg']['re_msg_content']; ?> </td>
              </tr>
            </table>
            <?php endif; ?>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
<?php echo $this->fetch('library/page.lbi'); ?>

<?php else: ?>
<div class="user-account-detail" >
	<div class="user-account-message">
		目前还没有消息
	</div>
  <ul class="ect-bg-colorf" id="J_ItemList">
    <li class="single_item"></li>
    <a href="javascript:;" style="text-align:center" class="get_more"></a>
  </ul>
</div>
<?php endif; ?>

</div>
<?php echo $this->fetch('library/search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?> 
<?php if (empty ( $this->_var['order_id'] )): ?>
<script type="text/javascript">
get_asynclist('<?php echo url("user/msg_list");?>' , '__TPL__/images/loader.gif');
</script>
<?php endif; ?>
</body></html>