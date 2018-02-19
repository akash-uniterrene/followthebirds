{include file='_head.tpl'}
{include file='_header.tpl'}
<div class="container offcanvas">
	<div class="row">
		<div class="col-xs-12 offcanvas-mainbar">
			<!-- profile-tabs -->
                <div class="profile-tabs-wrapper" style="background: #fff none repeat scroll 0 0;">
                    <ul class="nav">
						<li>
                            <a href="{$system['system_url']}/pages/{$spage['page_name']}/">
                                {__("Page")}
                            </a>
                        </li>
                        <li>
                            <a href="{$system['system_url']}/pages/{$spage['page_name']}/posts">
                                {__("Posts")}
                            </a>
                        </li>
                        <li class="middle-tabs">
                            <a href="{$system['system_url']}/pages/{$spage['page_name']}/photos">
                                {__("Photos")} 
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {__("More")}
                                <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="middle-tabs-alt">
                                    <a href="{$system['system_url']}/pages/{$spage['page_name']}/photos">{__("Photos")}</a>
                                </li>
                                <li>
                                    <a href="{$system['system_url']}/pages/{$spage['page_name']}/albums">{__("Albums")}</a>
                                </li>
                                {if $spage['i_like']}
                                    <li>
                                        <a href="{$system['system_url']}/pages/{$spage['page_name']}/invites">{__("Invite Friends")}</a>
                                    </li>
                                {/if}
                            </ul>
                        </li>
						 <li class="middle-tabs">
                            <a href="{$system['system_url']}/pages/{$spage['page_name']}/settings">
                                    <i class="fa fa-cog"></i> {__("Settings")}
							</a>
                        </li>
						
                    </ul>
                </div>
                <!-- profile-tabs -->
			 <!-- view content -->
                {if $view == "posts"}
                    <div class="col-sm-4">
                        <!-- about -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                {if !is_empty($spage['page_description'])}
                                    <div class="about-bio">
                                        {$spage['page_description']}
                                    </div>
                                {/if}
                                <ul class="about-list">
                                    <!-- likes -->
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-thumbs-o-up fa-fw fa-lg"></i>
                                            {$spage['page_likes']} {__("people like this")}
                                        </div>
                                    </li>
                                    <!-- likes -->
                                    <!-- category -->
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-briefcase fa-fw fa-lg"></i>
                                            {__($spage['category_name'])}
                                        </div>
                                    </li>
                                    <!-- category -->
                                </ul>
                            </div>
                        </div>
                        <!-- about -->

                        <!-- invite friends -->
                        {if $spage['i_like'] && $spage['invites']}
                            <div class="panel panel-default">
                                <div class="panel-heading light no_border">
                                    <div class="pull-right flip">
                                        <small><a href="{$system['system_url']}/pages/{$spage['page_name']}/invites">{__("See All")}</a></small>
                                    </div>
                                    <strong class="text-muted">{__("Invite Friends")}</strong>
                                </div>
                                <div class="panel-body ptb5 plr5">
                                    <ul>
                                        {foreach $spage['invites'] as $_user}
                                        {include file='__feeds_user.tpl' _connection=$_user["connection"] _small=true}
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        {/if}
                        <!-- invite friends -->

                        <!-- photos -->
                        {if count($spage['photos']) > 0}
                            <div class="panel panel-default panel-photos">
                                <div class="panel-heading">
                                    <a href="{$system['system_url']}/pages/{$spage['page_name']}/photos">{__("Photos")}</a>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        {foreach $spage['photos'] as $photo}
                                            {include file='__feeds_photo.tpl' _context="photos" _small=true}
                                        {/foreach}
                                    </div>
                                </div>
                            </div>
                        {/if}
                        <!-- photos -->
                    </div>
                    <div class="col-sm-8">
                        <!-- publisher -->
                        {if $user->_data['user_id'] == $spage['page_admin']}
                            {include file='_publisher.tpl' _handle="page" _id=$spage['page_id']}
                        {/if}
                        <!-- publisher -->

                        <!-- pinned post -->
                        {if $pinned_post}
                            {include file='_pinned_post.tpl' post=$pinned_post}
                        {/if}
                        <!-- pinned post -->
                        
                        <!-- posts -->
                        {include file='_posts.tpl' _get="posts_page" _id=$spage['page_id']}
                        <!-- posts -->
                    </div>
                {elseif $view == "photos"}
                    <!-- photos -->
                    <div class="col-xs-12">
                        <div class="panel panel-default panel-photos">
                            <div class="panel-heading with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-picture-o pr5 panel-icon"></i>
                                    <strong>{__("Photos")}</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="{$system['system_url']}/pages/{$spage['page_name']}/photos">
                                            <strong class="pr5">{__("Photos")}</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{$system['system_url']}/pages/{$spage['page_name']}/albums">{__("Albums")}</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                {if count($spage['photos']) > 0}
                                    <ul class="row">
                                        {foreach $spage['photos'] as $photo}
                                            {include file='__feeds_photo.tpl' _context="photos"}
                                        {/foreach}
                                    </ul>
                                    {if count($spage['photos']) >= $system['min_results_even']}
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="photos" data-id="{$spage['page_id']}" data-type='page'>
                                            <span>{__("See More")}</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    {/if}
                                {else}
                                    <p class="text-center text-muted mt10">
                                        {$spage['page_title']} {__("doesn't have photos")}
                                    </p>
                                {/if}
                            </div>
                        </div>
                    </div>
                    <!-- photos -->
                {elseif $view == "albums"}
                    <!-- albums -->
                    <div class="col-xs-12">
                        <div class="panel panel-default panel-albums">
                            <div class="panel-heading with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-picture-o pr5 panel-icon"></i>
                                    <strong>{__("Photos")}</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="{$system['system_url']}/pages/{$spage['page_name']}/photos">{__("Photos")}</a>
                                    </li>
                                    <li class="active">
                                        <a href="{$system['system_url']}/pages/{$spage['page_name']}/albums">
                                            <strong class="pr5">{__("Albums")}</strong>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                {if count($spage['albums']) > 0}
                                    <ul class="row">
                                        {foreach $spage['albums'] as $album}
                                        {include file='__feeds_album.tpl'}
                                        {/foreach}
                                    </ul>
                                    {if count($spage['albums']) >= $system['max_results_even']}
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="albums" data-id="{$spage['page_id']}" data-type='page'>
                                            <span>{__("See More")}</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    {/if}
                                {else}
                                    <p class="text-center text-muted mt10">
                                        {$spage['page_title']} {__("doesn't have albums")}
                                    </p>
                                {/if}
                            </div>
                        </div>
                    </div>
                    <!-- albums -->
                {elseif $view == "album"}
                    <!-- albums -->
                    <div class="col-xs-12">
                        <div class="panel panel-default panel-albums">
                            <div class="panel-heading with-icon with-nav">
                                <!-- back to albums -->
                                <div class="pull-right flip">
                                    <a href="{$system['system_url']}/pages/{$spage['page_name']}/albums" class="btn btn-default btn-sm">
                                        <i class="fa fa-arrow-circle-left"></i> {__("Back to Albums")}
                                    </a>
                                </div>
                                <!-- back to albums -->
                                
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-picture-o pr5 panel-icon"></i>
                                    <strong>{__("Photos")}</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="{$system['system_url']}/pages/{$spage['page_name']}/photos">{__("Photos")}</a>
                                    </li>
                                    <li class="active">
                                        <a href="{$system['system_url']}/pages/{$spage['page_name']}/albums">
                                            <strong class="pr5">{__("Albums")}</strong>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                            {include file='_album.tpl'}
                            </div>
                        </div>
                    </div>
                    <!-- albums -->
                {elseif $view == "invites"}
                    <!-- invites -->
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading with-icon with-nav">

                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-users pr5 panel-icon"></i>
                                    <strong>{__("Invites")}</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="{$system['system_url']}/pages/{$spage['page_name']}/invites">
                                            <strong class="pr5">{__("Invites")}</strong>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                {if $spage['invites']}
                                    <ul class="row">
                                        {foreach $spage['invites'] as $_user}
                                        {include file='__feeds_user.tpl' _connection=$_user["connection"] _parent="profile"}
                                        {/foreach}
                                    </ul>

                                    {if $spage['invites'] >= $system['max_results_even']}
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="page_invites" data-id="{$spage['page_id']}">
                                            <span>{__("See More")}</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    {/if}
                                {else}
                                    <p class="text-center text-muted mt10">
                                        {__("No friends to invite")}
                                    </p>
                                {/if}
                            </div>
                        </div>
                    </div>
                    <!-- invites -->
                {elseif $view == "settings"}
                    <div class="col-md-3 col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-body with-nav">
                                <ul class="side-nav">
                                    <li {if $sub_view == ""}class="active"{/if}>
                                        <a href="{$system['system_url']}/pages/{$spage['page_name']}/settings"><i class="fa fa-cog fa-fw fa-lg pr10"></i> {__("Page Settings")}</a>
                                    </li>
                                    {if $system['verification_requests']}
                                        <li {if $sub_view == "verification"}class="active"{/if}>
                                            <a href="{$system['system_url']}/pages/{$spage['page_name']}/settings/verification"><i class="fa fa-check-circle fa-fw fa-lg pr10"></i> {__("Verification")}</a>
                                        </li>
                                    {/if}
                                    <li {if $sub_view == "delete"}class="active"{/if}>
                                        <a href="{$system['system_url']}/pages/{$spage['page_name']}/settings/delete"><i class="fa fa-trash fa-fw fa-lg pr10"></i> {__("Delete Page")}</a>
                                    </li>
                                    <li {if $view == "page-template"}class="active"{/if}>
                                        <a href="{$system['system_url']}/pages/{$spage['page_name']}/page-template"><i class="fa fa-clipboard fa-fw fa-lg pr10"></i>Page Template</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <div class="panel panel-default">
                            {if $sub_view == ""}
                                <div class="panel-heading with-icon">
                                    <!-- panel title -->
                                    <i class="fa fa-cog pr5 panel-icon"></i>
                                    <strong>{__("Page Settings")}</strong>
                                    <!-- panel title -->
                                </div>
                                <div class="panel-body">
                                    <form class="js_ajax-forms form-horizontal" data-url="pages_groups_events/create.php?type=page&do=edit&id={$spage['page_id']}">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="title">
                                                {__("Name Your Page")}
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="title" id="title" value="{$spage['page_title']}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="username">
                                                {__("Web Address")}
                                            </label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon">{$system['system_url']}/pages/</span>
                                                    <input type="text" class="form-control" name="username" id="username" value="{$spage['page_name']}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="category">
                                                {__("Category")}
                                            </label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="category" id="category">
                                                    {foreach $categories as $category}
                                                        <option {if $spage['page_category'] == $category['category_id']}selected{/if} value="{$category['category_id']}">{__($category['category_name'])}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="description">
                                                {__("About")}
                                            </label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="description" id="description">{$spage['page_description']}</textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <button type="submit" class="btn btn-primary">{__("Save Changes")}</button>
                                            </div>
                                        </div>

                                        <!-- error -->
                                        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                        <!-- error -->
                                    </form>
                                </div>
                            {elseif $sub_view == "verification"}
                                <div class="panel-heading with-icon">
                                    <!-- panel title -->
                                    <i class="fa fa-check-circle pr5 panel-icon"></i>
                                    <strong>{__("Verification")}</strong>
                                    <!-- panel title -->
                                </div>
                                <div class="panel-body">
                                    {if $case == "verified"}
                                        <div class="text-center">
                                            <div class="big-icon success">
                                                <i class="fa fa-thumbs-o-up fa-3x"></i>
                                            </div>
                                            <h4>{__("Congratulations")}</h4>
                                            <p class="mt20">{__("This page is verified")}</p>
                                        </div>
                                    {elseif $case == "request"}
                                        <div class="alert alert-info">
                                            <i class="fa fa-info-circle fa-lg mr10"></i>{__("You can send verification request to verify your page")}<br>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-success js_verify" data-id="{$spage['page_id']}">
                                                <i class="fa fa-check-circle mr5"></i>{__("Verification Request")}
                                            </button>
                                        </div>
                                    {elseif $case == "pending"}
                                        <div class="alert alert-info">
                                            <i class="fa fa-info-circle fa-lg mr10"></i>{__("Your verification request is still awaiting admin approval")}<br>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-warning btn-delete js_unverify" data-id="{$spage['page_id']}"><i class="fa fa-clock-o mr5"></i>{__("Pending")}</button>
                                        </div>
                                    {elseif $case == "declined"}
                                        <div class="text-center">
                                            <div class="big-icon error">
                                                <i class="fa fa-meh-o fa-3x"></i>
                                            </div>
                                            <h4>{__("Sorry")}</h4>
                                            <p class="mt20">{__("Your verification request has been declined by the admin")}</p>
                                        </div>
                                    {/if}
                                </div>
                            {elseif $sub_view == "delete"}
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
                                        <button class="btn btn-danger js_delete-page" data-id="{$spage['page_id']}">
                                            <i class="fa fa-trash mr5"></i>{__("Delete Page")}
                                        </button>
                                    </div>
                                </div>
                            {/if}
                        </div>
                    </div>
				{elseif $view == "page-template"}
					<!-- page content -->
					{if $case == 'create'}
						{include file='page-template-customize.tpl'}
					{elseif $case == 'edit'}
						{include file='page-template-customize.tpl'}
					{elseif $case == "delete"}	
						<div class="col-md-3 col-sm-3">
							<div class="panel panel-default">
								<div class="panel-body with-nav">
									<ul class="side-nav">
										<li {if $sub_view == ""}class="active"{/if}>
											<a href="{$system['system_url']}/pages/{$spage['page_name']}/settings">
												<i class="fa fa-cog fa-fw fa-lg pr10"></i> {__("Page Settings")}
											</a>
										</li>
										{if $system['verification_requests']}
											<li {if $sub_view == "verification"}class="active"{/if}>
												<a href="{$system['system_url']}/pages/{$spage['page_name']}/settings/verification">
													<i class="fa fa-check-circle fa-fw fa-lg pr10"></i> {__("Verification")}</a>
											</li>
										{/if}
										<li {if $sub_view == "delete"}class="active"{/if}>
											<a href="{$system['system_url']}/pages/{$spage['page_name']}/settings/delete">
												<i class="fa fa-trash fa-fw fa-lg pr10"></i> {__("Delete Page")}</a>
										</li>
										<li {if $view == "page-template"}class="active"{/if}>
											<a href="{$system['system_url']}/pages/{$spage['page_name']}/page-template">
												<i class="fa fa-clipboard fa-fw fa-lg pr10"></i>Page Template</a>
										</li>

									</ul>
								</div>
							</div>
					  </div>
						<div class="col-lg-9 col-md-9 col-sm-9">
							<div class="panel panel-default">
								<!-- right panel -->
									<div class="panel-heading with-icon">
										<!-- panel title -->
										<i class="fa fa-trash pr5 panel-icon"></i>
										<strong>{__("Delete Page Template")}</strong>
										<!-- panel title -->
									</div>
									<div class="panel-body">
										<div class="alert alert-warning">
											<i class="fa fa-exclamation-triangle fa-lg mr10"></i>{__("Once you delete your page you will no longer can access it again")}
										</div>
										<div class="text-center">
											<button class="btn btn-danger js_delete-template" data-id="{$spage.view_template.template_id}">
												<i class="fa fa-trash mr5"></i>{__("Delete Page Template")}
											</button>
										</div>
									</div>
								</div>
						</div>	
					{else}
						<div class="col-md-3 col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-body with-nav">
                                <ul class="side-nav">
                                    <li {if $sub_view == ""}class="active"{/if}>
                                        <a href="{$system['system_url']}/pages/{$spage['page_name']}/settings">
											<i class="fa fa-cog fa-fw fa-lg pr10"></i> {__("Page Settings")}</a>
                                    </li>
                                    {if $system['verification_requests']}
                                        <li {if $sub_view == "verification"}class="active"{/if}>
                                            <a href="{$system['system_url']}/pages/{$spage['page_name']}/settings/verification">
												<i class="fa fa-check-circle fa-fw fa-lg pr10"></i> {__("Verification")}</a>
                                        </li>
                                    {/if}
                                    <li {if $sub_view == "delete"}class="active"{/if}>
                                        <a href="{$system['system_url']}/pages/{$spage['page_name']}/settings/delete">
											<i class="fa fa-trash fa-fw fa-lg pr10"></i> {__("Delete Page")}</a>
                                    </li>
                                    <li {if $view == "page-template"}class="active"{/if}>
                                        <a href="{$system['system_url']}/pages/{$spage['page_name']}/page-template">
											<i class="fa fa-clipboard fa-fw fa-lg pr10"></i>Page Template</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>	
						<div class="col-lg-9 col-md-9 col-sm-9">
							<div class="panel panel-default">
								<!-- tabs -->
								<div class="panel-heading with-icon"> 
									<i class="fa fa-cog pr5 panel-icon"></i>
									<strong>Template Settings</strong> 
									<div class="mt10 pull-right flip">
										<a class="btn btn-success btn-sm" href="{$system['system_url']}/pages/{$spage['page_name']}/page-template/create">
											<i class="fa fa-plus-circle fa-fw"></i><span class="hidden-xs">{__("Create Page Template")}</span>
										</a>
									</div>
								</div>
								
								<!-- tabs -->
								<div class="panel-body">
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
											<a href="{$system['system_url']}/pages/{$spage['page_name']}/page-template/edit-{$template.template_id}">Edit</a>
													|
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
					{/if}
                {else}
			
					{function name=toHtml level=0}
						<div class='row builder-container'>	
							{foreach $temp_content.columns as $column}
								<div class="col-md-{$column.width}">
									{foreach $column.blocks as $block}
									 {if $block.type == 'cover'}
										 <!-- profile-cover -->
											{include file='_widget_coverphoto.tpl'}																		
										 <!-- profile-cover -->
									 {elseif $block.type == 'heading'}
										<{$block.data.heading} style="{$block.data.style_property}"> {$block.data.text} </{$block.data.heading}>
									 {elseif $block.type == 'text'}
										<p style="{$block.data.style_property}">{$block.data.text}</p>
									 {elseif $block.type == 'photo'}
										<!-- photos -->
										{include file='_widget_photo.tpl'}										
										<!-- photos -->		
									 {elseif $block.type == 'about'}
										<!-- about -->
											{include file='_widget_about.tpl'}											
										<!-- about -->
									 {elseif $block.type == 'post'}
										<!-- publisher -->
											{if $user->_data['user_id'] == $spage['page_admin']}
												{include file='_publisher.tpl' _handle="page" _id=$spage['page_id']}
											{/if}
											<!-- publisher -->

											<!-- pinned post -->
											{if $pinned_post}
												{include file='_pinned_post.tpl' post=$pinned_post}
											{/if}
											<!-- pinned post -->

											<!-- posts -->
											{include file='_posts.tpl' _get="posts_page" _id=$spage['page_id']}
											<!-- posts -->
								 	  {elseif $block.type == 'profile'}										
										  <!-- profile-avatar -->
											{include file='_widget_profile.tpl'}
										  <!-- profile-avatar -->
									  {/if}
									{/foreach}
								</div>	
							{/foreach}
						</div>	
					{/function}			
					{foreach $spage.jsonArray.data as $block}
						{assign 'temp_content' $block.data}
						{toHtml data=$temp_content}
					{/foreach}
				{/if}
		</div>
	</div>
</div>	
{include file='_footer.tpl'}