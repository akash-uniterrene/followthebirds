<?php
/* Smarty version 3.1.31, created on 2018-02-15 06:22:55
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/__feeds_comment.text.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a85273fdc8152_56605776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a48cedfe811d6354ee5df8c8873c4eecf1700c3' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/__feeds_comment.text.tpl',
      1 => 1505415884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a85273fdc8152_56605776 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="comment-replace">
    <div class="comment-text js_readmore" dir="auto"><?php echo $_smarty_tpl->tpl_vars['_comment']->value['text'];?>
</div>
    <div class="comment-text-plain hidden"><?php echo $_smarty_tpl->tpl_vars['_comment']->value['text_plain'];?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['_comment']->value['image'] != '') {?>
        <span class="text-link js_lightbox-nodata" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_comment']->value['image'];?>
">
            <img alt="" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_comment']->value['image'];?>
">
        </span>
    <?php }?>
</div>
<?php }
}
