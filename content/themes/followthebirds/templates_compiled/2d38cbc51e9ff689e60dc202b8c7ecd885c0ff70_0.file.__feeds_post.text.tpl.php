<?php
/* Smarty version 3.1.31, created on 2018-02-01 07:36:53
  from "/home/web/public_sc/Script/content/themes/default/templates/__feeds_post.text.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a72c395495a13_72931505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d38cbc51e9ff689e60dc202b8c7ecd885c0ff70' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/default/templates/__feeds_post.text.tpl',
      1 => 1501702574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a72c395495a13_72931505 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="post-replace">
    <div class="post-text js_readmore" dir="auto"><?php echo $_smarty_tpl->tpl_vars['post']->value['text'];?>
</div>
    <div class="post-text-plain hidden"><?php echo $_smarty_tpl->tpl_vars['post']->value['text_plain'];?>
</div>
</div><?php }
}
