<?php
/* Smarty version 3.1.31, created on 2018-02-16 07:38:24
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/ajax.mutual_friends.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a868a7002fb32_06136717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '490bf8180d95783296e928dfb44e6e2da177f5cb' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/ajax.mutual_friends.tpl',
      1 => 1501702574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 1,
  ),
),false)) {
function content_5a868a7002fb32_06136717 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 class="modal-title"><?php echo __("Mutual Friends");?>
</h5>
</div>
<div class="modal-body">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mutual_friends']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_type'=>"remove"), 0, true);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </ul>

    <?php if (count($_smarty_tpl->tpl_vars['mutual_friends']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
    <!-- see-more -->
    <div class="alert alert-info see-more js_see-more" data-get="mutual_friends" data-uid="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
        <span><?php echo __("See More");?>
</span>
        <div class="loader loader_small x-hidden"></div>
    </div>
    <!-- see-more -->
    <?php }?>
    
</div>
<?php }
}
