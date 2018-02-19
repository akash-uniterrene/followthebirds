<?php
/* Smarty version 3.1.31, created on 2018-02-16 08:06:51
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a86911b6ebeb9_21297037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ef7243603c7c861ba2ccc39b3510ac7eab2cae7' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/page.tpl',
      1 => 1518768409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__feeds_user.tpl' => 2,
    'file:__feeds_photo.tpl' => 2,
    'file:_publisher.tpl' => 2,
    'file:_pinned_post.tpl' => 2,
    'file:_posts.tpl' => 2,
    'file:__feeds_album.tpl' => 1,
    'file:_album.tpl' => 1,
    'file:page-template-customize.tpl' => 2,
    'file:_widget_coverphoto.tpl' => 1,
    'file:_widget_photo.tpl' => 1,
    'file:_widget_about.tpl' => 1,
    'file:_widget_profile.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5a86911b6ebeb9_21297037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'toHtml' => 
  array (
    'compiled_filepath' => '/home/web/public_sc/Script/content/themes/followthebirds/templates_compiled/8ef7243603c7c861ba2ccc39b3510ac7eab2cae7_0.file.page.tpl.php',
    'uid' => '8ef7243603c7c861ba2ccc39b3510ac7eab2cae7',
    'call_name' => 'smarty_template_function_toHtml_711782385a86911b4535f7_25156796',
  ),
));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container offcanvas">
	<div class="row">
		<div class="col-xs-12 offcanvas-mainbar">
			<!-- profile-tabs -->
                <div class="profile-tabs-wrapper" style="background: #fff none repeat scroll 0 0;">
                    <ul class="nav">
						<li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/">
                                <?php echo __("Page");?>

                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/posts">
                                <?php echo __("Posts");?>

                            </a>
                        </li>
                        <li class="middle-tabs">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos">
                                <?php echo __("Photos");?>
 
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php echo __("More");?>

                                <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="middle-tabs-alt">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                                </li>
                                <?php if ($_smarty_tpl->tpl_vars['spage']->value['i_like']) {?>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/invites"><?php echo __("Invite Friends");?>
</a>
                                    </li>
                                <?php }?>
                            </ul>
                        </li>
						 <li class="middle-tabs">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings">
                                    <i class="fa fa-cog"></i> <?php echo __("Settings");?>

							</a>
                        </li>
						
                    </ul>
                </div>
                <!-- profile-tabs -->
			 <!-- view content -->
                <?php if ($_smarty_tpl->tpl_vars['view']->value == "posts") {?>
                    <div class="col-sm-4">
                        <!-- about -->
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
                        </div>
                        <!-- about -->

                        <!-- invite friends -->
                        <?php if ($_smarty_tpl->tpl_vars['spage']->value['i_like'] && $_smarty_tpl->tpl_vars['spage']->value['invites']) {?>
                            <div class="panel panel-default">
                                <div class="panel-heading light no_border">
                                    <div class="pull-right flip">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/invites"><?php echo __("See All");?>
</a></small>
                                    </div>
                                    <strong class="text-muted"><?php echo __("Invite Friends");?>
</strong>
                                </div>
                                <div class="panel-body ptb5 plr5">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['invites'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_small'=>true), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <!-- invite friends -->

                        <!-- photos -->
                        <?php if (count($_smarty_tpl->tpl_vars['spage']->value['photos']) > 0) {?>
                            <div class="panel panel-default panel-photos">
                                <div class="panel-heading">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['photos'], 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos",'_small'=>true), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- photos -->
                    </div>
                    <div class="col-sm-8">
                        <!-- publisher -->
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_admin']) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"page",'_id'=>$_smarty_tpl->tpl_vars['spage']->value['page_id']), 0, false);
?>

                        <?php }?>
                        <!-- publisher -->

                        <!-- pinned post -->
                        <?php if ($_smarty_tpl->tpl_vars['pinned_post']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_pinned_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['pinned_post']->value), 0, false);
?>

                        <?php }?>
                        <!-- pinned post -->
                        
                        <!-- posts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_page",'_id'=>$_smarty_tpl->tpl_vars['spage']->value['page_id']), 0, false);
?>

                        <!-- posts -->
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "photos") {?>
                    <!-- photos -->
                    <div class="col-xs-12">
                        <div class="panel panel-default panel-photos">
                            <div class="panel-heading with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-picture-o pr5 panel-icon"></i>
                                    <strong><?php echo __("Photos");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos">
                                            <strong class="pr5"><?php echo __("Photos");?>
</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if (count($_smarty_tpl->tpl_vars['spage']->value['photos']) > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['photos'], 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos"), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                    <?php if (count($_smarty_tpl->tpl_vars['spage']->value['photos']) >= $_smarty_tpl->tpl_vars['system']->value['min_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="photos" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
" data-type='page'>
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
 <?php echo __("doesn't have photos");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- photos -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "albums") {?>
                    <!-- albums -->
                    <div class="col-xs-12">
                        <div class="panel panel-default panel-albums">
                            <div class="panel-heading with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-picture-o pr5 panel-icon"></i>
                                    <strong><?php echo __("Photos");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/albums">
                                            <strong class="pr5"><?php echo __("Albums");?>
</strong>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if (count($_smarty_tpl->tpl_vars['spage']->value['albums']) > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['albums'], 'album');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                    <?php if (count($_smarty_tpl->tpl_vars['spage']->value['albums']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="albums" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
" data-type='page'>
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
 <?php echo __("doesn't have albums");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- albums -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "album") {?>
                    <!-- albums -->
                    <div class="col-xs-12">
                        <div class="panel panel-default panel-albums">
                            <div class="panel-heading with-icon with-nav">
                                <!-- back to albums -->
                                <div class="pull-right flip">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/albums" class="btn btn-default btn-sm">
                                        <i class="fa fa-arrow-circle-left"></i> <?php echo __("Back to Albums");?>

                                    </a>
                                </div>
                                <!-- back to albums -->
                                
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-picture-o pr5 panel-icon"></i>
                                    <strong><?php echo __("Photos");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/albums">
                                            <strong class="pr5"><?php echo __("Albums");?>
</strong>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                            <?php $_smarty_tpl->_subTemplateRender('file:_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            </div>
                        </div>
                    </div>
                    <!-- albums -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "invites") {?>
                    <!-- invites -->
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading with-icon with-nav">

                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-users pr5 panel-icon"></i>
                                    <strong><?php echo __("Invites");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/invites">
                                            <strong class="pr5"><?php echo __("Invites");?>
</strong>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if ($_smarty_tpl->tpl_vars['spage']->value['invites']) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['invites'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_parent'=>"profile"), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>

                                    <?php if ($_smarty_tpl->tpl_vars['spage']->value['invites'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="page_invites" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo __("No friends to invite");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- invites -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>
                    <div class="col-md-3 col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-body with-nav">
                                <ul class="side-nav">
                                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings"><i class="fa fa-cog fa-fw fa-lg pr10"></i> <?php echo __("Page Settings");?>
</a>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['verification_requests']) {?>
                                        <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "verification") {?>class="active"<?php }?>>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings/verification"><i class="fa fa-check-circle fa-fw fa-lg pr10"></i> <?php echo __("Verification");?>
</a>
                                        </li>
                                    <?php }?>
                                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings/delete"><i class="fa fa-trash fa-fw fa-lg pr10"></i> <?php echo __("Delete Page");?>
</a>
                                    </li>
                                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "page-template") {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/page-template"><i class="fa fa-clipboard fa-fw fa-lg pr10"></i>Page Template</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <div class="panel panel-default">
                            <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
                                <div class="panel-heading with-icon">
                                    <!-- panel title -->
                                    <i class="fa fa-cog pr5 panel-icon"></i>
                                    <strong><?php echo __("Page Settings");?>
</strong>
                                    <!-- panel title -->
                                </div>
                                <div class="panel-body">
                                    <form class="js_ajax-forms form-horizontal" data-url="pages_groups_events/create.php?type=page&do=edit&id=<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="title">
                                                <?php echo __("Name Your Page");?>

                                            </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="username">
                                                <?php echo __("Web Address");?>

                                            </label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/</span>
                                                    <input type="text" class="form-control" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="category">
                                                <?php echo __("Category");?>

                                            </label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="category" id="category">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_category'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label" for="description">
                                                <?php echo __("About");?>

                                            </label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="description" id="description"><?php echo $_smarty_tpl->tpl_vars['spage']->value['page_description'];?>
</textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                                            </div>
                                        </div>

                                        <!-- error -->
                                        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                        <!-- error -->
                                    </form>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "verification") {?>
                                <div class="panel-heading with-icon">
                                    <!-- panel title -->
                                    <i class="fa fa-check-circle pr5 panel-icon"></i>
                                    <strong><?php echo __("Verification");?>
</strong>
                                    <!-- panel title -->
                                </div>
                                <div class="panel-body">
                                    <?php if ($_smarty_tpl->tpl_vars['case']->value == "verified") {?>
                                        <div class="text-center">
                                            <div class="big-icon success">
                                                <i class="fa fa-thumbs-o-up fa-3x"></i>
                                            </div>
                                            <h4><?php echo __("Congratulations");?>
</h4>
                                            <p class="mt20"><?php echo __("This page is verified");?>
</p>
                                        </div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "request") {?>
                                        <div class="alert alert-info">
                                            <i class="fa fa-info-circle fa-lg mr10"></i><?php echo __("You can send verification request to verify your page");?>
<br>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-success js_verify" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                                                <i class="fa fa-check-circle mr5"></i><?php echo __("Verification Request");?>

                                            </button>
                                        </div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "pending") {?>
                                        <div class="alert alert-info">
                                            <i class="fa fa-info-circle fa-lg mr10"></i><?php echo __("Your verification request is still awaiting admin approval");?>
<br>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn-warning btn-delete js_unverify" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"><i class="fa fa-clock-o mr5"></i><?php echo __("Pending");?>
</button>
                                        </div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "declined") {?>
                                        <div class="text-center">
                                            <div class="big-icon error">
                                                <i class="fa fa-meh-o fa-3x"></i>
                                            </div>
                                            <h4><?php echo __("Sorry");?>
</h4>
                                            <p class="mt20"><?php echo __("Your verification request has been declined by the admin");?>
</p>
                                        </div>
                                    <?php }?>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>
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
                                        <button class="btn btn-danger js_delete-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                                            <i class="fa fa-trash mr5"></i><?php echo __("Delete Page");?>

                                        </button>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
				<?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "page-template") {?>
					<!-- page content -->
					<?php if ($_smarty_tpl->tpl_vars['case']->value == 'create') {?>
						<?php $_smarty_tpl->_subTemplateRender('file:page-template-customize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<?php } elseif ($_smarty_tpl->tpl_vars['case']->value == 'edit') {?>
						<?php $_smarty_tpl->_subTemplateRender('file:page-template-customize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

					<?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "delete") {?>	
						<div class="col-md-3 col-sm-3">
							<div class="panel panel-default">
								<div class="panel-body with-nav">
									<ul class="side-nav">
										<li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
											<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings">
												<i class="fa fa-cog fa-fw fa-lg pr10"></i> <?php echo __("Page Settings");?>

											</a>
										</li>
										<?php if ($_smarty_tpl->tpl_vars['system']->value['verification_requests']) {?>
											<li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "verification") {?>class="active"<?php }?>>
												<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings/verification">
													<i class="fa fa-check-circle fa-fw fa-lg pr10"></i> <?php echo __("Verification");?>
</a>
											</li>
										<?php }?>
										<li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>class="active"<?php }?>>
											<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings/delete">
												<i class="fa fa-trash fa-fw fa-lg pr10"></i> <?php echo __("Delete Page");?>
</a>
										</li>
										<li <?php if ($_smarty_tpl->tpl_vars['view']->value == "page-template") {?>class="active"<?php }?>>
											<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/page-template">
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
										<strong><?php echo __("Delete Page Template");?>
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
												<i class="fa fa-trash mr5"></i><?php echo __("Delete Page Template");?>

											</button>
										</div>
									</div>
								</div>
						</div>	
					<?php } else { ?>
						<div class="col-md-3 col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-body with-nav">
                                <ul class="side-nav">
                                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings">
											<i class="fa fa-cog fa-fw fa-lg pr10"></i> <?php echo __("Page Settings");?>
</a>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['verification_requests']) {?>
                                        <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "verification") {?>class="active"<?php }?>>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings/verification">
												<i class="fa fa-check-circle fa-fw fa-lg pr10"></i> <?php echo __("Verification");?>
</a>
                                        </li>
                                    <?php }?>
                                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings/delete">
											<i class="fa fa-trash fa-fw fa-lg pr10"></i> <?php echo __("Delete Page");?>
</a>
                                    </li>
                                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "page-template") {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/page-template">
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
										<a class="btn btn-success btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/page-template/create">
											<i class="fa fa-plus-circle fa-fw"></i><span class="hidden-xs"><?php echo __("Create Page Template");?>
</span>
										</a>
									</div>
								</div>
								
								<!-- tabs -->
								<div class="panel-body">
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
">Edit</a>
													|
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
					<?php }?>
                <?php } else { ?>
			
								
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spage']->value['jsonArray']['data'], 'block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
?>
						<?php $_smarty_tpl->_assignInScope('temp_content', $_smarty_tpl->tpl_vars['block']->value['data']);
?>
						<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'toHtml', array('data'=>$_smarty_tpl->tpl_vars['temp_content']->value), true);?>

					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				<?php }?>
		</div>
	</div>
</div>	
<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* smarty_template_function_toHtml_711782385a86911b4535f7_25156796 */
if (!function_exists('smarty_template_function_toHtml_711782385a86911b4535f7_25156796')) {
function smarty_template_function_toHtml_711782385a86911b4535f7_25156796($_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
						<div class='row builder-container'>	
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['temp_content']->value['columns'], 'column');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
?>
								<div class="col-md-<?php echo $_smarty_tpl->tpl_vars['column']->value['width'];?>
">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column']->value['blocks'], 'block');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
?>
									 <?php if ($_smarty_tpl->tpl_vars['block']->value['type'] == 'cover') {?>
										 <!-- profile-cover -->
											<?php $_smarty_tpl->_subTemplateRender('file:_widget_coverphoto.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
																		
										 <!-- profile-cover -->
									 <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type'] == 'heading') {?>
										<<?php echo $_smarty_tpl->tpl_vars['block']->value['data']['heading'];?>
 style="<?php echo $_smarty_tpl->tpl_vars['block']->value['data']['style_property'];?>
"> <?php echo $_smarty_tpl->tpl_vars['block']->value['data']['text'];?>
 </<?php echo $_smarty_tpl->tpl_vars['block']->value['data']['heading'];?>
>
									 <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type'] == 'text') {?>
										<p style="<?php echo $_smarty_tpl->tpl_vars['block']->value['data']['style_property'];?>
"><?php echo $_smarty_tpl->tpl_vars['block']->value['data']['text'];?>
</p>
									 <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type'] == 'photo') {?>
										<!-- photos -->
										<?php $_smarty_tpl->_subTemplateRender('file:_widget_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
										
										<!-- photos -->		
									 <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type'] == 'about') {?>
										<!-- about -->
											<?php $_smarty_tpl->_subTemplateRender('file:_widget_about.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
											
										<!-- about -->
									 <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type'] == 'post') {?>
										<!-- publisher -->
											<?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_admin']) {?>
												<?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"page",'_id'=>$_smarty_tpl->tpl_vars['spage']->value['page_id']), 0, true);
?>

											<?php }?>
											<!-- publisher -->

											<!-- pinned post -->
											<?php if ($_smarty_tpl->tpl_vars['pinned_post']->value) {?>
												<?php $_smarty_tpl->_subTemplateRender('file:_pinned_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['pinned_post']->value), 0, true);
?>

											<?php }?>
											<!-- pinned post -->

											<!-- posts -->
											<?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_page",'_id'=>$_smarty_tpl->tpl_vars['spage']->value['page_id']), 0, true);
?>

											<!-- posts -->
								 	  <?php } elseif ($_smarty_tpl->tpl_vars['block']->value['type'] == 'profile') {?>										
										  <!-- profile-avatar -->
											<?php $_smarty_tpl->_subTemplateRender('file:_widget_profile.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

										  <!-- profile-avatar -->
									  <?php }?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

								</div>	
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						</div>	
					<?php
}}
/*/ smarty_template_function_toHtml_711782385a86911b4535f7_25156796 */
}
