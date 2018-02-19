<?php
/* Smarty version 3.1.31, created on 2018-02-16 05:51:04
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/_widget_coverphoto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a86714828bc64_52027226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0364c39f3907d94fff4752cd15a99d8b980ccdf' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/_widget_coverphoto.tpl',
      1 => 1518760261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a86714828bc64_52027226 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_cover_id']) {?> class="profile-cover-wrapper js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover'];?>
" data-context="album" <?php } else { ?> class="profile-cover-wrapper" <?php }?>  <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_cover']) {?> style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover'];?>
');" <?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_admin']) {?>
		<div class="profile-cover-change">
			<i class="fa fa-camera js_x-uploader" data-handle="cover-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
		</div>
		<div class="profile-cover-delete <?php if (!$_smarty_tpl->tpl_vars['spage']->value['page_cover']) {?>x-hidden<?php }?>">
			<i class="fa fa-trash js_delete-cover" data-handle="cover-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
" title='<?php echo __("Delete Cover");?>
'></i>
		</div>
		<div class="profile-cover-change-loader">
			<div class="loader loader_large"></div>
		</div>
	<?php }?>
</div><?php }
}
