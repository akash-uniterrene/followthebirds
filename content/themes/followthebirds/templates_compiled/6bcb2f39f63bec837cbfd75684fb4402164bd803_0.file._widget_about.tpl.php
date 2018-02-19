<?php
/* Smarty version 3.1.31, created on 2018-02-16 05:45:14
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/_widget_about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a866fea8c6989_81934011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bcb2f39f63bec837cbfd75684fb4402164bd803' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/_widget_about.tpl',
      1 => 1518759912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a866fea8c6989_81934011 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
	<div class="panel-body">
		<?php if (!is_empty($_smarty_tpl->tpl_vars['spage']->value['page_description'])) {?>
			<div class="about-bio">
				<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_description'];?>

			</div>
		<?php }?>
		<ul class="about-list">
			<!-- likes -->
			<li>
				<div class="about-list-item">
					<i class="fa fa-thumbs-o-up fa-fw fa-lg"></i>
					<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_likes'];?>
 <?php echo __("people like this");?>

				</div>
			</li>
			<!-- likes -->
			<!-- category -->
			<li>
				<div class="about-list-item">
					<i class="fa fa-briefcase fa-fw fa-lg"></i>
					<?php echo __($_smarty_tpl->tpl_vars['spage']->value['category_name']);?>

				</div>
			</li>
			<!-- category -->
		</ul>
	</div>
</div><?php }
}
