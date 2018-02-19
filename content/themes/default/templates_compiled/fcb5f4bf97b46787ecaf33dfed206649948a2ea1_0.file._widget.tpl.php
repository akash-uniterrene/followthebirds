<?php
/* Smarty version 3.1.31, created on 2018-02-15 06:27:27
  from "/home/web/public_sc/Script/content/themes/default/templates/_widget.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a85284fd12f03_21554746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcb5f4bf97b46787ecaf33dfed206649948a2ea1' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/default/templates/_widget.tpl',
      1 => 1518611781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a85284fd12f03_21554746 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- profile-avatar -->
<div class="profile-avatar-wrapper">
	<img <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_picture_id']) {?> class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture'];?>
" data-context="album" <?php }?> src="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
">
	<?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_admin']) {?>
		<div class="profile-avatar-change">
			<i class="fa fa-camera js_x-uploader" data-handle="picture-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
		</div>
		<div class="profile-avatar-delete <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_picture_default']) {?>x-hidden<?php }?>">
			<i class="fa fa-trash js_delete-picture" data-handle="picture-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
" title='<?php echo __("Delete Picture");?>
'></i>
		</div>
		<div class="profile-avatar-change-loader">
			<div class="loader loader_medium"></div>
		</div>
	<?php }?>
</div>
<!-- profile-avatar --><?php }
}
