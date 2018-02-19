<?php
/* Smarty version 3.1.31, created on 2018-02-03 10:27:21
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/page-customize.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a758e8903d910_83014211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4e2d227003127923a2efccc6e8f2783377ffdc9' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/page-customize.tpl',
      1 => 1517653002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5a758e8903d910_83014211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/trevor/sir-trevor.css">
<link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/trevor/sir-trevor-bootstrap.css">
<link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/trevor/sir-trevor-icons.css">
<!-- page content -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-pencil fa-fw"></i>
						New Page
					</h3>
            	</div>
				<div class="panel-body">
					<form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=page-template&do=create&id=<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
" id="contentForm" method="post" accept-charset="utf-8">
						<textarea name="content" cols="40" rows="10" id="content" class="js-st-instance"></textarea>
						<input type="hidden" name="page_id" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
" /> 
						<div id="attributes" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button class="close" type="button" data-dismiss="modal">×</button>
									<h4 class="modal-title">Page Attributes</h4>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label class="control-label" for="pageTitle">Template Name*</label>
										<div class="controls">
										<input name="pageTitle" value="" id="pageTitle" class="form-control" type="text">
										</div> <!-- /controls -->
									</div>
								</div>	
								<div class="modal-footer">
									<button class="btn" data-dismiss="modal" aria-hidden="true">Back</button>
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>	
					</div>
             		</form>
				</div>
				<div class="panel-footer">
					<a class="btn btn-primary" data-toggle="modal" href="#attributes">Next</a>
					<a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages">Cancel</a>
            	</div>
			</div>
		</div>			
			
	</div>	
</div>	
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/trevor/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/pagebuilder/jquery.fancybox-1.3.4.pack.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/pagebuilder/jquery-ui-1.9.2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/pagebuilder/jquery.nestable.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/pagebuilder/excanvas.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/pagebuilder/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/pagebuilder/base.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/trevor/underscore.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/trevor/eventable.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/trevor/sortable.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/trevor/sir-trevor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/trevor/sir-trevor-bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	new SirTrevor.Editor({ el: $('.js-st-instance'),
  	blockTypes: ["Columns", "Heading", "Text", "ImageExtended", "Quote", "Accordion", "Button", "Video", "List", "Iframe"]
	});
	SirTrevor.onBeforeSubmit();
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
