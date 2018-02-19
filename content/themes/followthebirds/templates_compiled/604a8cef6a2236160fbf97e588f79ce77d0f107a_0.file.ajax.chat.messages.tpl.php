<?php
/* Smarty version 3.1.31, created on 2018-02-02 07:53:53
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/ajax.chat.messages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a7419112ecb54_34740510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '604a8cef6a2236160fbf97e588f79ce77d0f107a' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/ajax.chat.messages.tpl',
      1 => 1501702574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_message.tpl' => 1,
  ),
),false)) {
function content_5a7419112ecb54_34740510 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->_subTemplateRender('file:__feeds_message.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
