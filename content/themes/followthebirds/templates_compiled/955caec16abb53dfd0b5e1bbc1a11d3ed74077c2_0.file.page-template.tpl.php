<?php
/* Smarty version 3.1.31, created on 2018-02-08 11:24:25
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/page-template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a7c336995f563_99390347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '955caec16abb53dfd0b5e1bbc1a11d3ed74077c2' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/page-template.tpl',
      1 => 1518089061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:page-template-customize.tpl' => 2,
    'file:_sidebar.tpl' => 2,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5a7c336995f563_99390347 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<?php if ($_smarty_tpl->tpl_vars['case']->value == 'create') {?>
	<?php $_smarty_tpl->_subTemplateRender('file:page-template-customize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_smarty_tpl->tpl_vars['case']->value == 'edit') {?>
	<?php $_smarty_tpl->_subTemplateRender('file:page-template-customize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "delete") {?>
	<div class="container mt20 offcanvas">
    <div class="row">

        <!-- left panel -->
        <div class="col-sm-4 col-md-2 offcanvas-sidebar">
            <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <!-- left panel -->

        <!-- right panel -->
        <div class="col-sm-8 col-md-10 offcanvas-mainbar">
		<div class="panel-heading with-icon">
		<!-- panel title -->
		<i class="fa fa-trash pr5 panel-icon"></i>
		<strong><?php echo __("Delete Page");?>
</strong>
		<!-- panel title -->
		</div>
		<div class="panel-body">
			<div class="alert alert-warning">
				<i class="fa fa-exclamation-triangle fa-lg mr10"></i><?php echo __("Once you delete your page you will no longer can access it again");?>

			</div>
			<div class="text-center">
				<button class="btn btn-danger js_delete-template" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['view_template']['template_id'];?>
">
					<i class="fa fa-trash mr5"></i><?php echo __("Delete Page");?>

				</button>
			</div>
		</div>
		</div>
	</div>
</div>
	
<?php } else { ?>
<div class="container mt20 offcanvas">
    <div class="row">

        <!-- left panel -->
        <div class="col-sm-4 col-md-2 offcanvas-sidebar">
            <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        </div>
        <!-- left panel -->

        <!-- right panel -->
        <div class="col-sm-8 col-md-10 offcanvas-mainbar">

			   <!-- tabs -->
			<div class="box-tabs-wrapper clearfix">
				<ul class="nav pull-left flip">
					<li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>
						<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages"><?php echo __("Discover");?>
</a>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['view']->value == "liked") {?>class="active"<?php }?>>
						<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/liked"><?php echo __("Liked Pages");?>
</a>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['view']->value == "manage") {?>class="active"<?php }?>>
						<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/manage"><?php echo __("Your Pages");?>
</a>
					</li>
				</ul>
				<div class="mt10 pull-right flip">
					<a class="btn btn-success btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/page-template/create">
						<i class="fa fa-plus-circle fa-fw"></i><span class="hidden-xs"><?php echo __("Create Page Template");?>
</span>
					</a>
				</div>
			</div>
			<!-- tabs -->
			<div class="container <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['spage']->value['page_templates'] > 0) {?>
					<table class="table">
						<thead>
							<th>Page </th>
							<th>Template </th>
							<th>Options </th>
						</thead>
						<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['page_templates'], 'template');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['template']->value['pageTitle'];?>
</td>
								<td>
									<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/page-template/edit-<?php echo $_smarty_tpl->tpl_vars['template']->value['template_id'];?>
">Edit</a> |
									<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/page-template/delete-<?php echo $_smarty_tpl->tpl_vars['template']->value['template_id'];?>
">Delete</a>
								</td>
							</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						</tbody>	
					</table>	
				<?php } else { ?>
					<p> No Record Found</p>
				<?php }?>
			</div>
		</div>
	</div>
</div>

<?php }
$_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
