<?php
/* Smarty version 3.1.31, created on 2018-02-02 06:36:47
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/ajax.live.notifications.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a7406ffaa0873_42339807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6bf5f3b5ca5b52e71c92dad19f48df2ff325101' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/ajax.live.notifications.tpl',
      1 => 1501702574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_notification.tpl' => 1,
  ),
),false)) {
function content_5a7406ffaa0873_42339807 (Smarty_Internal_Template $_smarty_tpl) {
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
