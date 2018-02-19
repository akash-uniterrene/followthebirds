<link rel="stylesheet" type='text/css' href="{$system['system_url']}/includes/assets/js/plugins/trevor/sir-trevor.css">
<link rel="stylesheet" type='text/css' href="{$system['system_url']}/includes/assets/js/plugins/trevor/sir-trevor-bootstrap.css">
<link rel="stylesheet" type='text/css' href="{$system['system_url']}/includes/assets/js/plugins/trevor/sir-trevor-icons.css">
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
					<form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=profile-template&do={if $view == 'create-template'}create{else}edit{/if}" id="contentForm" method="post" accept-charset="utf-8">
						<textarea name="content" cols="40" rows="10" id="content" class="js-st-instance">{$template.template_content}</textarea>
							<input type="hidden" name="user_id" value="{$user->_data['user_id']}" /> 
						{if $case == 'edit-template'}
							<input type="hidden" name="template_id" value="{$template.template_id}" />
						{/if}	
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
										<input name="pageTitle" value="{$template.pageTitle}" id="pageTitle" class="form-control" type="text">
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
					<a class="btn" href="{$system['system_url']}/pages">Cancel</a>
            	</div>
			</div>
		</div>			
			
	</div>	
</div>	
<script src="{$system['system_url']}/includes/assets/js/plugins/trevor/jquery-1.10.2.min.js"></script>
<script src="{$system['system_url']}/includes/assets/js/plugins/pagebuilder/jquery.fancybox-1.3.4.pack.js"></script>
<script src="{$system['system_url']}/includes/assets/js/plugins/pagebuilder/jquery-ui-1.9.2.js"></script>
<script src="{$system['system_url']}/includes/assets/js/plugins/pagebuilder/jquery.nestable.js"></script>
<script src="{$system['system_url']}/includes/assets/js/plugins/pagebuilder/excanvas.min.js"></script>
<script src="{$system['system_url']}/includes/assets/js/plugins/pagebuilder/bootstrap.js"></script>
<script src="{$system['system_url']}/includes/assets/js/plugins/pagebuilder/base.js"></script>
<script src="{$system['system_url']}/includes/assets/js/plugins/trevor/underscore.js"></script>
<script src="{$system['system_url']}/includes/assets/js/plugins/trevor/eventable.js"></script>
<script src="{$system['system_url']}/includes/assets/js/plugins/trevor/sortable.min.js"></script>
<script src="{$system['system_url']}/includes/assets/js/plugins/trevor/sir-trevor.js"></script>
<script src="{$system['system_url']}/includes/assets/js/plugins/trevor/sir-trevor-bootstrap.js"></script>
<script type="text/javascript">
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
</script>