<?php
/* Smarty version 3.1.31, created on 2018-02-01 10:43:23
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/ajax.chat.master.head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a72ef4b142d57_65808488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3cd693a9e1e5e987bcc277fe48a632540d3d9d7' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/ajax.chat.master.head.tpl',
      1 => 1501702574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a72ef4b142d57_65808488 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['offline']->value) {?>

    <div class="chat-head-title">
        <i class="fa fa-user-secret"></i>
        <?php echo __("Offline");?>

    </div>

<?php } else { ?>

    <div class="chat-head-title">
        <i class="fa fa-circle"></i>
        (<?php echo count($_smarty_tpl->tpl_vars['online_friends']->value);?>
)
    </div>

<?php }
}
}
