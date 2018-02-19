<?php
/* Smarty version 3.1.31, created on 2018-02-17 09:39:53
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/profile-template-customize.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a87f8698c5626_57687565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b456ba996cbd0229c8e2a0d89dc2c6118ad309d8' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/profile-template-customize.tpl',
      1 => 1518860387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a87f8698c5626_57687565 (Smarty_Internal_Template $_smarty_tpl) {
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
					<form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=profile-template&do=<?php if ($_smarty_tpl->tpl_vars['view']->value == 'create-template') {?>create<?php } else { ?>edit<?php }?>" id="contentForm" method="post" accept-charset="utf-8">
						<textarea name="content" cols="40" rows="10" id="content" class="js-st-instance"><?php echo $_smarty_tpl->tpl_vars['template']->value['template_content'];?>
</textarea>
							<input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
" /> 
						<?php if ($_smarty_tpl->tpl_vars['case']->value == 'edit-template') {?>
							<input type="hidden" name="template_id" value="<?php echo $_smarty_tpl->tpl_vars['template']->value['template_id'];?>
" />
						<?php }?>	
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
										<input name="pageTitle" value="<?php echo $_smarty_tpl->tpl_vars['template']->value['pageTitle'];?>
" id="pageTitle" class="form-control" type="text">
										</div> <!-- /controls -->
									</div>
									<div class="form-group">
										<label class="control-label" for="pagePublished">Publish Template?</label>
										<div class="controls">
											<select name="active" id="active" class="form-control">
												<option value="1" selected="selected">Yes</option>
												<option value="0">No</option>
											</select>
										</div> <!-- /controls -->
									</div>
									<div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
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
  		blockTypes: ["Columns", "About", "Profile", "Cover", "Post", "Friends", "Pages", "Groups",  "Photo", "Heading", "Text", "ImageExtended", "Video", "Embedly", "Iframe"]
	});
	SirTrevor.setBlockOptions("Text", {
        onBlockRender: function() {
          console.log("Text block rendered");
        }
    });
	SirTrevor.onBeforeSubmit();
	
	$(document).ready(function(){
		$('.btn_text_align').click(function(){
			alert();
		});
	});
<?php echo '</script'; ?>
><?php }
}
