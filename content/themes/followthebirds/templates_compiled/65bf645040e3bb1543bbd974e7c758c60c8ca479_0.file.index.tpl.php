<?php
/* Smarty version 3.1.31, created on 2018-02-02 07:52:30
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a7418be9877f3_08252790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65bf645040e3bb1543bbd974e7c758c60c8ca479' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/index.tpl',
      1 => 1517557947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sign_form.tpl' => 1,
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
function content_5a7418be9877f3_08252790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?> 
 <!---------------------->
 <section id="banner-slides" class="carousel slide hero-slider" style="background: url(<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/banner-1.jpg)">
         
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox" data-ride="carousel">

		<!-- First slide -->
		<div class="item active">
		  <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/banner-1.jpg" alt="banner1" />
		</div> <!-- /.item -->

		<!-- Second slide -->
		<div class="item">
		  <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/banner-2.jpg" alt="banner2" />
		</div><!-- /.item -->
		
		<!-- Second slide -->
		<div class="item">
		  <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/banner-1.jpg" alt="banner3" />
		  <div class="container"> 
		    
		 </div> 
		</div><!-- /.item -->		  
          <div class="carousel-caption">
			<h3 data-animation="animated bounceInDown">
			  More then
			</h3>
			<h1 data-animation="animated bounceInUp">
				<?php echo count($_smarty_tpl->tpl_vars['random_profiles']->value);?>
 MILLION<span> user </span>
			</h1>
			<h4 data-animation="animated zoomInRight">
			  around the world ...
			</h4>
			<span class="banner-caption-fixed"> <?php echo count($_smarty_tpl->tpl_vars['random_profiles']->value);?>
 </span>
		  </div>
		  <ol class="carousel-indicators">
			<li data-target="#banner-slides" data-slide-to="0" class="active"></li>
			<li data-target="#banner-slides" data-slide-to="1"></li>
			<li data-target="#banner-slides" data-slide-to="2"></li>
		  </ol>
		<!-- /.item -->

	  </div><!-- /.carousel-inner -->
	  
	  <div class="banner-form">
        <div class="banner-head-form">
        	<h4> Always Free To Join </h4>
		    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt lorem </p>
        </div>
	     <!-- sign in/up form -->
            <?php $_smarty_tpl->_subTemplateRender('file:_sign_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

         <!-- sign in/up form -->
		<div class="banner-user-slider">
			<div id="owl-example" class="owl-carousel">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['random_profiles']->value, 'random_profile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['random_profile']->value) {
?>
					<div class="item darkCyan">
					  <div class="user-box">
						<img src="<?php echo $_smarty_tpl->tpl_vars['random_profile']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['random_profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['random_profile']->value['user_lastname'];?>
">
					  </div>                    
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
                
            </div>
		</div>
	  </div>
	  

 </section>
   <!-- /.carousel -->
   
 <section id="how-its-work">
  	<div class="container">
  		<div class="row">
  		  <div class="col-lg-7 col-md-7 left-gallery-wrap">
  		  	<div class="gallery-wrap">
  		  		<div class="gallery-top clearfix">
  		  			<div class="gellery-top-left">
  		  				<div class="gallery-left-top clearfix">
  		  					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 gallery-image">
  		  						<img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/gallery-1.jpg" alt="#">
  		  					</div>
  		  					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gallery-image">
  		  						<img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/gallery-2.jpg" alt="#">
  		  					</div>
  		  				</div>
  		  				<div class="gallery-left-bottom">
  		  					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 gallery-image">
  		  						<img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/gallery-3.jpg" alt="#">
  		  					</div>
  		  					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 gallery-image">
  		  						<img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/gallery-4.jpg" alt="#">
  		  					</div>
  		  				</div>
  		  			</div>
  		  			<div class="gellery-top-right">
  		  				<div class="col-lg-12 col-md-12 gallery-image">
  		  					<img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/gallery-5.jpg" alt="#">
  		  				</div>
  		  			</div>
  		  		</div>
  		  		<div class="gallery-bottom clearfix">
  		  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 gallery-image"><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/gallery-6.jpg" alt="#"></div>
  		  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 gallery-image"><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/gallery-7.jpg" alt="#"></div>
  		  			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 gallery-image"><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/gallery-8.jpg" alt="#"></div>
  		  		</div>
  		  	</div>
  		  </div>
  		   <div class="col-lg-5 col-md-5 work-right-wrap">
  		  	<h2>How It’s <span>Works</span></h2>
  		  	<div class="work-step-wrap clearfix">
  		  		<div class="col-lg-12 clearfix step-main-wrap">
  		  			<div class="step-icon"><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/step-icon-1.png" alt="#"></div>
  		  			<div class="step-text">
  		  				<h5>Create An Account</h5>
  		  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt lorem  viverra. </p>
  		  			</div>
  		  		</div>
  		  		<div class="col-lg-12 clearfix step-main-wrap">
  		  			<div class="step-icon"><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/step-icon-2.png" alt="#"></div>
  		  			<div class="step-text">
  		  				<h5>Share Trips and Pictures</h5>
  		  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt lorem  viverra. </p>
  		  			</div>
  		  		</div>
  		  		<span class="small-dash"></span>
  		  		<span class="big-dash"></span>
  		  		<span class="long-dash"></span>
  		  	</div>
  		  	<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
#banner-form" class="gradient-btn">SHARE YOUR PICTURE</a>
  		  </div>
  			
  		</div>
  	</div>
  	<div class="right-tree">
  		<img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/tree.png" alt="#">
  	</div>
		</section> 
   
  <section id="happy-member">
    <div class="happy-content">
    	<div class="container">
  		<div class="row">
  			<div class="col-lg-12">
  				<h3>Some Of Our happy members</h3>
  			</div>
  		</div>
  		<div class="row">
  			<div class="col-lg-12">
  				<div id="owl-example1" class="owl-carousel">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['random_profiles']->value, 'random_profile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['random_profile']->value) {
?>
               	 <div class="item darkCyan">
                  <div class="happy-member-wrap">
                  	 <div class="happy-member-image">
                  	 	<div class="main-user-image">
                  	 		<img src="<?php echo $_smarty_tpl->tpl_vars['random_profile']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['random_profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['random_profile']->value['user_lastname'];?>
">
                  	 		<div class="image-hover-box">
                  	 			<div class="parent-hover-box">
                  	 				<div class="child-hover-box">
                  	 					<a href="#"><i class="fa fa-comment "></i></a>
                  	 				</div>
                  	 			</div>
                  	 		</div>
                  	 	</div>
                  	 </div>
                  	 <h6><?php echo $_smarty_tpl->tpl_vars['random_profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['random_profile']->value['user_lastname'];?>
</h6>
                  </div>                    
                </div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
	
              </div>
  			</div>
  		</div>
  	</div>
    </div>
  	
  	<div class="happy-image-top"></div>
  </section> 
  
 <section id="download-app">
  	<div class="container">
  		<div class="row">
  			<div class="col-lg-4 col-md-3 col-sm-4">
  				<div class="app-mobile">
  					<div class="front-app-mobile"><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/app-mobile.png" alt="#"></div>
  				</div>
  			</div>
  			<div class="col-lg-5 col-md-6 col-sm-6 download-text">
  				<h4>download our app now and share your trips and pictures !!!</h4>
  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt lorem quis porttitor viverra. Praesent faucibus eget purus eget imperdiet. </p>
  				<div class="app-store">
  					<a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/google-app.png" alt="#"></a><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/i-store.png" alt="#"></a>
  				</div>
  				<p class="note">Note: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt lorem quis porttitor viverra. Praesent faucibus eget purus eget imperdiet. </p>
  			</div>
  			<div class="col-lg-3"></div>
  		</div>
  	</div>
  	<div class="footer-image">
  		<img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/footer-image.png" alt="#">
  	</div>
	  </section> 
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
$__foreach_static_page_9_saved = $_smarty_tpl->tpl_vars['static_page'];
?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/static/<?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_url'];?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['static_page']->value['page_title'];?>

                                            </a><?php if (!$_smarty_tpl->tpl_vars['static_page']->last) {?> · <?php }?>
                                        <?php
$_smarty_tpl->tpl_vars['static_page'] = $__foreach_static_page_9_saved;
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
