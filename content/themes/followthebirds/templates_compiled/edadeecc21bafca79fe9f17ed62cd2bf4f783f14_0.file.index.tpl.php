<?php
/* Smarty version 3.1.31, created on 2018-02-01 10:21:05
  from "/home/web/public_sc/Script/content/themes/default/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a72ea11ec9868_33353533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edadeecc21bafca79fe9f17ed62cd2bf4f783f14' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/default/templates/index.tpl',
      1 => 1517480463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sign_form.tpl' => 1,
    'file:_directory.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_announcements.tpl' => 1,
    'file:_publisher.tpl' => 1,
    'file:_boosted_post.tpl' => 1,
    'file:_posts.tpl' => 4,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5a72ea11ec9868_33353533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
    <!-- page content -->
    <div class="index-wrapper" <?php if (!$_smarty_tpl->tpl_vars['system']->value['system_wallpaper_default'] && $_smarty_tpl->tpl_vars['system']->value['system_wallpaper']) {?> style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_wallpaper'];?>
')" <?php }?>>
        <div class="container">
            <div class="index-intro">
                <h1>
                    <?php echo __("Welcome to");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>

                </h1>
                <p>
                    <?php echo __("Share your memories, connect with others, make new friends");?>

                </p>
            </div>

            <div class="row relative">
                
                <?php if ($_smarty_tpl->tpl_vars['random_profiles']->value) {?>
                    <!-- random 4 users -->
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['random_profiles']->value, 'random_profile');
$_smarty_tpl->tpl_vars['random_profile']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['random_profile']->value) {
$_smarty_tpl->tpl_vars['random_profile']->index++;
$__foreach_random_profile_0_saved = $_smarty_tpl->tpl_vars['random_profile'];
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['random_profile']->value['user_name'];?>
" class="fly-head" 
                            <?php if ($_smarty_tpl->tpl_vars['random_profile']->index == 0) {?> style="top: 140px;left: 50px;" <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['random_profile']->index == 1) {?> style="bottom: 60px;left: 210px;" <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['random_profile']->index == 2) {?> style="top: 140px;right: 50px;" <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['random_profile']->index == 3) {?> style="bottom: 60px;right: 210px;" <?php }?>
                            data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['random_profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['random_profile']->value['user_lastname'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['random_profile']->value['user_picture'];?>
">
                        </a>
                    <?php
$_smarty_tpl->tpl_vars['random_profile'] = $__foreach_random_profile_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    <!-- random 4 users -->
                <?php }?>

                <!-- sign in/up form -->
                <?php $_smarty_tpl->_subTemplateRender('file:_sign_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- sign in/up form -->
            </div>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_directory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }?>
    <!-- page content -->
<?php } else { ?>
    <!-- page content -->
    <div class="container mt20 offcanvas">
        <div class="row">

            <!-- left panel -->
            <div class="col-sm-4 col-md-2 offcanvas-sidebar">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <!-- left panel -->

            <div class="col-sm-8 col-md-10 offcanvas-mainbar">
                <div class="row">
                    <!-- center panel -->
                    <div class="col-sm-12 col-md-8">

                        <!-- announcments -->
                        <?php $_smarty_tpl->_subTemplateRender('file:_announcements.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <!-- announcments -->

                        <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

                            <!-- stories -->
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['stories_enabled']) {?>
                                <div class="panel panel-default panel-users">
                                    <div class="panel-heading light no_border">
                                        <strong class="text-muted"><?php echo __("Stories");?>
</strong>
                                        <div class="x-muted text-clickable pull-right flip">
                                            <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title='<?php echo __("Stories are photos and videos that only last 24 hours");?>
'></i>
                                        </div>
                                        
                                    </div>
                                    <div class="panel-body pt5">
                                        <div class="row">
                                            <!-- add new story -->
                                            <div class="col-xs-2">
                                                <div class="user-picture" data-toggle="modal" data-url="posts/story.php?do=create" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
);">
                                                    <div class="add">
                                                        <i class="fa fa-plus-circle"></i>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- add new story -->

                                            <!-- users stories -->
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stories']->value, 'story');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['story']->value) {
?>
                                                <div class="col-xs-2">
                                                    <div class="user-picture-wrapper">
                                                        <div class="user-picture js_story" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['story']->value['user_picture'];?>
);" data-items='<?php echo $_smarty_tpl->tpl_vars['story']->value["media"];?>
' data-toggle="tooltip" data-placement="top" title='<?php echo __("Watch");?>
 <?php echo $_smarty_tpl->tpl_vars['story']->value["user_firstname"];?>
 <?php echo $_smarty_tpl->tpl_vars['story']->value["user_lastname"];?>
 <?php echo __("Story");?>
'>
                                                        </div>    
                                                    </div>
                                                </div>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                            <!-- users stories -->
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <!-- stories -->

                            <!-- publisher -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"me",'_privacy'=>true), 0, false);
?>

                            <!-- publisher -->

                            <!-- boosted post -->
                            <?php if ($_smarty_tpl->tpl_vars['boosted_post']->value) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:_boosted_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['boosted_post']->value), 0, false);
?>

                            <?php }?>
                            <!-- boosted post -->

                            <!-- posts stream -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"newsfeed"), 0, false);
?>

                            <!-- posts stream -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "saved") {?>
                            <!-- saved posts stream -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"saved",'_title'=>__("Saved Posts")), 0, true);
?>

                            <!-- saved posts stream -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "articles") {?>
                            <!-- saved posts stream -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->tpl_vars['user']->value->_data['user_id'],'_filter'=>"article",'_title'=>__("My Articles")), 0, true);
?>

                            <!-- saved posts stream -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "products") {?>
                            <!-- saved posts stream -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->tpl_vars['user']->value->_data['user_id'],'_filter'=>"product",'_title'=>__("My Products")), 0, true);
?>

                            <!-- saved posts stream -->

                        <?php }?>
                    </div>
                    <!-- center panel -->

                    <!-- right panel -->
                    <div class="col-sm-12 col-md-4">
                        <!-- pro members -->
                        <?php if (count($_smarty_tpl->tpl_vars['pro_members']->value) > 0) {?>
                            <div class="panel panel-default panel-friends">
                                <div class="panel-heading">
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                        <div class="pull-right flip">
                                            <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Upgrade");?>
</a></small>
                                        </div>
                                    <?php }?>
                                    <strong class="text-primary"><i class="fa fa-bolt"></i> <?php echo __("Pro Users");?>
</strong>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pro_members']->value, '_member');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_member']->value) {
?>
                                            <div class="col-xs-4">
                                                <a class="friend-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_member']->value['user_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['_member']->value['user_picture'];?>
);" >
                                                    <span class="friend-name"><?php echo $_smarty_tpl->tpl_vars['_member']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_member']->value['user_lastname'];?>
</span>
                                                </a>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- pro members -->

                        <!-- boosted pages -->
                        <?php if (count($_smarty_tpl->tpl_vars['promoted_pages']->value) > 0) {?>
                            <div class="panel panel-default panel-friends">
                                <div class="panel-heading">
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                        <div class="pull-right flip">
                                            <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Upgrade");?>
</a></small>
                                        </div>
                                    <?php }?>
                                    <strong class="text-primary"><i class="fa fa-bullhorn fa-fw"></i> <?php echo __("Pro Pages");?>
</strong>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promoted_pages']->value, '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                            <div class="col-xs-4">
                                                <a class="friend-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_picture'];?>
);" >
                                                    <span class="friend-name"><?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
</span>
                                                </a>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                         <!-- boosted pages -->

                        <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


                        <!-- people you may know -->
                        <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['new_people']) > 0) {?>
                            <div class="panel panel-default panel-widget">
                                <div class="panel-heading">
                                    <div class="pull-right flip">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people"><?php echo __("See All");?>
</a></small>
                                    </div>
                                    <strong><?php echo __("People you may know");?>
</strong>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['new_people'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"add",'_small'=>true), 0, true);
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
                         <!-- people you may know -->

                        <!-- suggested pages -->
                        <?php if (count($_smarty_tpl->tpl_vars['new_pages']->value) > 0) {?>
                            <div class="panel panel-default panel-widget">
                                <div class="panel-heading">
                                    <div class="pull-right flip">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages"><?php echo __("See All");?>
</a></small>
                                    </div>
                                    <strong><?php echo __("Suggested Pages");?>
</strong>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_pages']->value, '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
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
                        <!-- suggested pages -->

                        <!-- suggested groups -->
                        <?php if (count($_smarty_tpl->tpl_vars['new_groups']->value) > 0) {?>
                            <div class="panel panel-default panel-widget">
                                <div class="panel-heading">
                                    <div class="pull-right flip">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups"><?php echo __("See All");?>
</a></small>
                                    </div>
                                    <strong><?php echo __("Suggested Groups");?>
</strong>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_groups']->value, '_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list"), 0, true);
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
                        <!-- suggested groups -->

                        <!-- suggested events -->
                        <?php if (count($_smarty_tpl->tpl_vars['new_events']->value) > 0) {?>
                            <div class="panel panel-default panel-widget">
                                <div class="panel-heading">
                                    <div class="pull-right flip">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events"><?php echo __("See All");?>
</a></small>
                                    </div>
                                    <strong><?php echo __("Suggested Events");?>
</strong>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_events']->value, '_event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"list",'_small'=>true), 0, true);
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
                        <!-- suggested events -->

                        <!-- mini footer -->
                        <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['new_people']) > 0 || count($_smarty_tpl->tpl_vars['new_pages']->value) > 0 || count($_smarty_tpl->tpl_vars['new_groups']->value) > 0 || count($_smarty_tpl->tpl_vars['new_events']->value) > 0) {?>
                            <div class="row plr10 hidden-xs">
                                <div class="col-xs-12 mb5">
                                    <?php if (count($_smarty_tpl->tpl_vars['static_pages']->value) > 0) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['static_pages']->value, 'static_page', true);
$_smarty_tpl->tpl_vars['static_page']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['static_page']->value) {
$_smarty_tpl->tpl_vars['static_page']->iteration++;
$_smarty_tpl->tpl_vars['static_page']->last = $_smarty_tpl->tpl_vars['static_page']->iteration == $_smarty_tpl->tpl_vars['static_page']->total;
$__foreach_static_page_8_saved = $_smarty_tpl->tpl_vars['static_page'];
?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/<?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_url'];?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_title'];?>

                                            </a><?php if (!$_smarty_tpl->tpl_vars['static_page']->last) {?> · <?php }?>
                                        <?php
$_smarty_tpl->tpl_vars['static_page'] = $__foreach_static_page_8_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['contact_enabled']) {?>
                                         · 
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/contacts">
                                            <?php echo __("Contacts");?>

                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>
                                         · 
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/directory">
                                            <?php echo __("Directory");?>

                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
                                         · 
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market">
                                            <?php echo __("Market");?>

                                        </a>
                                    <?php }?>
                                </div>
                                <div class="col-xs-12">
                                    &copy; <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
 · <span class="text-link" data-toggle="modal" data-url="#translator"><?php echo $_smarty_tpl->tpl_vars['system']->value['language']['title'];?>
</span>
                                </div>
                            </div>
                        <?php }?>
                        <!-- mini footer -->
                    </div>
                    <!-- right panel -->
                </div>
            </div>

        </div>
    </div>
    <!-- page content -->
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
