<?php
/* Smarty version 3.1.31, created on 2018-02-16 05:41:04
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/_widget_demo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a866ef0cb8182_56733581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcbbdb321041c5fe2afa256fac0b483617471f8c' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/_widget_demo.tpl',
      1 => 1518759662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_photo.tpl' => 1,
  ),
),false)) {
function content_5a866ef0cb8182_56733581 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['spage']->value['photos']) > 0) {?>
	<div class="panel panel-default panel-photos">
		<div class="panel-heading">
			<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos"><?php echo __("Photos");?>
</a>
		</div>
		<div class="panel-body">
			<div class="row">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['photos'], 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
					<?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos",'_small'=>true), 0, true);
?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			</div>
		</div>
	</div>
<?php }
}
}
