{include file='_head.tpl'}
{include file='_header.tpl'}
<!-- page content -->
{if $case == 'create'}
	{include file='page-template-customize.tpl'}
{elseif $case == 'edit'}
	{include file='page-template-customize.tpl'}
{elseif $case == "delete"}
	<div class="container mt20 offcanvas">
    <div class="row">

        <!-- left panel -->
        <div class="col-sm-4 col-md-2 offcanvas-sidebar">
            {include file='_sidebar.tpl'}
        </div>
        <!-- left panel -->

        <!-- right panel -->
        <div class="col-sm-8 col-md-10 offcanvas-mainbar">
		<div class="panel-heading with-icon">
		<!-- panel title -->
		<i class="fa fa-trash pr5 panel-icon"></i>
		<strong>{__("Delete Page")}</strong>
		<!-- panel title -->
		</div>
		<div class="panel-body">
			<div class="alert alert-warning">
				<i class="fa fa-exclamation-triangle fa-lg mr10"></i>{__("Once you delete your page you will no longer can access it again")}
			</div>
			<div class="text-center">
				<button class="btn btn-danger js_delete-template" data-id="{$spage.view_template.template_id}">
					<i class="fa fa-trash mr5"></i>{__("Delete Page")}
				</button>
			</div>
		</div>
		</div>
	</div>
</div>
	
{else}
<div class="container mt20 offcanvas">
    <div class="row">

        <!-- left panel -->
        <div class="col-sm-4 col-md-2 offcanvas-sidebar">
            {include file='_sidebar.tpl'}
        </div>
        <!-- left panel -->

        <!-- right panel -->
        <div class="col-sm-8 col-md-10 offcanvas-mainbar">

			   <!-- tabs -->
			<div class="box-tabs-wrapper clearfix">
				<ul class="nav pull-left flip">
					<li {if $view == ""}class="active"{/if}>
						<a href="{$system['system_url']}/pages">{__("Discover")}</a>
					</li>
					<li {if $view == "liked"}class="active"{/if}>
						<a href="{$system['system_url']}/pages/liked">{__("Liked Pages")}</a>
					</li>
					<li {if $view == "manage"}class="active"{/if}>
						<a href="{$system['system_url']}/pages/manage">{__("Your Pages")}</a>
					</li>
				</ul>
				<div class="mt10 pull-right flip">
					<a class="btn btn-success btn-sm" href="{$system['system_url']}/pages/{$spage['page_name']}/page-template/create">
						<i class="fa fa-plus-circle fa-fw"></i><span class="hidden-xs">{__("Create Page Template")}</span>
					</a>
				</div>
			</div>
			<!-- tabs -->
			<div class="container {if $user->_logged_in}offcanvas{/if}">
				{if $spage.page_templates > 0}
					<table class="table">
						<thead>
							<th>Page </th>
							<th>Template </th>
							<th>Options </th>
						</thead>
						<tbody>
						{foreach $spage.page_templates as $template}
							<tr>
								<td>{$spage.page_title}</td>
								<td>{$template.pageTitle}</td>
								<td>
									<a href="{$system['system_url']}/pages/{$spage['page_name']}/page-template/edit-{$template.template_id}">Edit</a> |
									<a href="{$system['system_url']}/pages/{$spage['page_name']}/page-template/delete-{$template.template_id}">Delete</a>
								</td>
							</tr>
						{/foreach}
						</tbody>	
					</table>	
				{else}
					<p> No Record Found</p>
				{/if}
			</div>
		</div>
	</div>
</div>

{/if}
{include file='_footer.tpl'}