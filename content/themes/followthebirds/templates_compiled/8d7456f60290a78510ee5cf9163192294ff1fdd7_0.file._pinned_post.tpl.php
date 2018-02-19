<?php
/* Smarty version 3.1.31, created on 2018-02-14 12:30:34
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/_pinned_post.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a842bea0b1336_30785522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d7456f60290a78510ee5cf9163192294ff1fdd7' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/_pinned_post.tpl',
      1 => 1501702574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
),false)) {
function content_5a842bea0b1336_30785522 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- posts-filter -->
<div class="posts-filter">
    <span><?php echo __("Pinned Post");?>
</span>
</div>
<!-- posts-filter -->

<?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>true,'pinned'=>true), 0, false);
}
}
