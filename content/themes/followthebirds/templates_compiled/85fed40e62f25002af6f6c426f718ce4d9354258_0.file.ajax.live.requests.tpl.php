<?php
/* Smarty version 3.1.31, created on 2018-02-02 06:36:47
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/ajax.live.requests.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a7406ffa8f0a6_67309525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85fed40e62f25002af6f6c426f718ce4d9354258' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/ajax.live.requests.tpl',
      1 => 1501702574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 1,
  ),
),false)) {
function content_5a7406ffa8f0a6_67309525 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['requests']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"request"), 0, true);
?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
