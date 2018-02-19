<?php
/* Smarty version 3.1.31, created on 2018-02-01 07:45:01
  from "/home/web/public_sc/Script/content/themes/default/templates/ajax.live.notifications.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a72c57d373d14_38306113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9403e68c99eeeb11541b7bbf70293e976dfc36d9' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/default/templates/ajax.live.notifications.tpl',
      1 => 1501702574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_notification.tpl' => 1,
  ),
),false)) {
function content_5a72c57d373d14_38306113 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value, 'notification');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
$_smarty_tpl->_subTemplateRender('file:__feeds_notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
