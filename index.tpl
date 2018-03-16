{include file='_head.tpl'}
{include file='_header.tpl'}

{if !$user->_logged_in} 
 <!---------------------->
 <section id="banner-slides" class="carousel slide hero-slider" style="background: url({$system['system_url']}/content/themes/{$system['theme']}/images/banner-1.jpg)">
         
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox" data-ride="carousel">

		<!-- First slide -->
		<div class="item active">
		  <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/banner-1.jpg" alt="banner1" />
		</div> <!-- /.item -->

		<!-- Second slide -->
		<div class="item">
		  <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/banner-2.jpg" alt="banner2" />
		</div><!-- /.item -->
		
		<!-- Second slide -->
		<div class="item">
		  <img src="{$system['system_url']}/content/themes/{$system['theme']}/images/banner-1.jpg" alt="banner3" />
		  <div class="container"> 
		    
		 </div> 
		</div><!-- /.item -->		  
          <div class="carousel-caption">
			<h3 data-animation="animated bounceInDown">
			  More then
			</h3>
			<h1 data-animation="animated bounceInUp">
				{$random_profiles|@count} MILLION<span> user </span>
			</h1>
			<h4 data-animation="animated zoomInRight">
			  around the world ...
			</h4>
			<span class="banner-caption-fixed"> {$random_profiles|@count} </span>
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
            {include file='_sign_form.tpl'}
         <!-- sign in/up form -->
		<div class="banner-user-slider">
			<div id="owl-example" class="owl-carousel">
				{foreach $random_profiles as $random_profile}
					<div class="item darkCyan">
					  <div class="user-box">
						<img src="{$random_profile['user_picture']}" alt="{$random_profile['user_firstname']} {$random_profile['user_lastname']}">
					  </div>                    
					</div>
				{/foreach}                
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
  		  						<img src="{$system['system_url']}/content/themes/{$system['theme']}/images/gallery-1.jpg" alt="#">
  		  					</div>
  		  					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gallery-image">
  		  						<img src="{$system['system_url']}/content/themes/{$system['theme']}/images/gallery-2.jpg" alt="#">
  		  					</div>
  		  				</div>
  		  				<div class="gallery-left-bottom">
  		  					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 gallery-image">
  		  						<img src="{$system['system_url']}/content/themes/{$system['theme']}/images/gallery-3.jpg" alt="#">
  		  					</div>
  		  					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 gallery-image">
  		  						<img src="{$system['system_url']}/content/themes/{$system['theme']}/images/gallery-4.jpg" alt="#">
  		  					</div>
  		  				</div>
  		  			</div>
  		  			<div class="gellery-top-right">
  		  				<div class="col-lg-12 col-md-12 gallery-image">
  		  					<img src="{$system['system_url']}/content/themes/{$system['theme']}/images/gallery-5.jpg" alt="#">
  		  				</div>
  		  			</div>
  		  		</div>
  		  		<div class="gallery-bottom clearfix">
  		  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 gallery-image"><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/gallery-6.jpg" alt="#"></div>
  		  			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 gallery-image"><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/gallery-7.jpg" alt="#"></div>
  		  			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 gallery-image"><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/gallery-8.jpg" alt="#"></div>
  		  		</div>
  		  	</div>
  		  </div>
  		   <div class="col-lg-5 col-md-5 work-right-wrap">
  		  	<h2>How It’s <span>Works</span></h2>
  		  	<div class="work-step-wrap clearfix">
  		  		<div class="col-lg-12 clearfix step-main-wrap">
  		  			<div class="step-icon"><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/step-icon-1.png" alt="#"></div>
  		  			<div class="step-text">
  		  				<h5>Create An Account</h5>
  		  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt lorem  viverra. </p>
  		  			</div>
  		  		</div>
  		  		<div class="col-lg-12 clearfix step-main-wrap">
  		  			<div class="step-icon"><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/step-icon-2.png" alt="#"></div>
  		  			<div class="step-text">
  		  				<h5>Share Trips and Pictures</h5>
  		  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt lorem  viverra. </p>
  		  			</div>
  		  		</div>
  		  		<span class="small-dash"></span>
  		  		<span class="big-dash"></span>
  		  		<span class="long-dash"></span>
  		  	</div>
  		  	<a href="{$system['system_url']}#banner-form" class="gradient-btn">SHARE YOUR PICTURE</a>
  		  </div>
  			
  		</div>
  	</div>
  	<div class="right-tree">
  		<img src="{$system['system_url']}/content/themes/{$system['theme']}/images/tree.png" alt="#">
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
				{foreach $random_profiles as $random_profile}
               	 <div class="item darkCyan">
                  <div class="happy-member-wrap">
                  	 <div class="happy-member-image">
                  	 	<div class="main-user-image">
                  	 		<img src="{$random_profile['user_picture']}" alt="{$random_profile['user_firstname']} {$random_profile['user_lastname']}">
                  	 		<div class="image-hover-box">
                  	 			<div class="parent-hover-box">
                  	 				<div class="child-hover-box">
                  	 					<a href="#"><i class="fa fa-comment "></i></a>
                  	 				</div>
                  	 			</div>
                  	 		</div>
                  	 	</div>
                  	 </div>
                  	 <h6>{$random_profile['user_firstname']} {$random_profile['user_lastname']}</h6>
                  </div>                    
                </div>
				{/foreach}	
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
  					<div class="front-app-mobile"><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/app-mobile.png" alt="#"></div>
  				</div>
  			</div>
  			<div class="col-lg-5 col-md-6 col-sm-6 download-text">
  				<h4>download our app now and share your trips and pictures !!!</h4>
  				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt lorem quis porttitor viverra. Praesent faucibus eget purus eget imperdiet. </p>
  				<div class="app-store">
  					<a href="#"><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/google-app.png" alt="#"></a><a href="#"><img src="{$system['system_url']}/content/themes/{$system['theme']}/images/i-store.png" alt="#"></a>
  				</div>
  				<p class="note">Note: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt lorem quis porttitor viverra. Praesent faucibus eget purus eget imperdiet. </p>
  			</div>
  			<div class="col-lg-3"></div>
  		</div>
  	</div>
  	<div class="footer-image">
  		<img src="{$system['system_url']}/content/themes/{$system['theme']}/images/footer-image.png" alt="#">
  	</div>
	  </section> 
{else}
    <!-- page content -->
    <div class="container mt20 offcanvas">
        <div class="row">

            <!-- left panel -->
            <div class="col-sm-4 col-md-2 offcanvas-sidebar">
                {include file='_sidebar.tpl'}
            </div>
            <!-- left panel -->

            <div class="col-sm-8 col-md-10 offcanvas-mainbar">
                <div class="row">
                    <!-- center panel -->
                    <div class="col-sm-12 col-md-8">

                        <!-- announcments -->
                        {include file='_announcements.tpl'}
                        <!-- announcments -->

                        {if $view == ""}

                            <!-- stories -->
                            {if $system['stories_enabled']}
                                <div class="panel panel-default panel-users">
                                    <div class="panel-heading light no_border">
                                        <strong class="text-muted">{__("Stories")}</strong>
                                        <div class="x-muted text-clickable pull-right flip">
                                            <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title='{__("Stories are photos and videos that only last 24 hours")}'></i>
                                        </div>
                                        
                                    </div>
                                    <div class="panel-body pt5">
                                        <div class="row">
                                            <!-- add new story -->
                                            <div class="col-xs-2">
                                                <div class="user-picture" data-toggle="modal" data-url="posts/story.php?do=create" style="background-image:url({$user->_data['user_picture']});">
                                                    <div class="add">
                                                        <i class="fa fa-plus-circle"></i>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- add new story -->

                                            <!-- users stories -->
                                            {foreach $stories as $story}
                                                <div class="col-xs-2">
                                                    <div class="user-picture-wrapper">
                                                        <div class="user-picture js_story" style="background-image:url({$story['user_picture']});" data-items='{$story["media"]}' data-toggle="tooltip" data-placement="top" title='{__("Watch")} {$story["user_firstname"]} {$story["user_lastname"]} {__("Story")}'>
                                                        </div>    
                                                    </div>
                                                </div>
                                            {/foreach}
                                            <!-- users stories -->
                                        </div>
                                    </div>
                                </div>
                            {/if}
                            <!-- stories -->

                            <!-- publisher -->
                            {include file='_publisher.tpl' _handle="me" _privacy=true}
                            <!-- publisher -->

                            <!-- boosted post -->
                            {if $boosted_post}
                                {include file='_boosted_post.tpl' post=$boosted_post}
                            {/if}
                            <!-- boosted post -->

                            <!-- posts stream -->
                            {include file='_posts.tpl' _get="newsfeed"}
                            <!-- posts stream -->

                        {elseif $view == "saved"}
                            <!-- saved posts stream -->
                            {include file='_posts.tpl' _get="saved" _title=__("Saved Posts")}
                            <!-- saved posts stream -->

                        {elseif $view == "articles"}
                            <!-- saved posts stream -->
                            {include file='_posts.tpl' _get="posts_profile" _id=$user->_data['user_id'] _filter="article" _title=__("My Articles")}
                            <!-- saved posts stream -->

                        {elseif $view == "products"}
                            <!-- saved posts stream -->
                            {include file='_posts.tpl' _get="posts_profile" _id=$user->_data['user_id'] _filter="product" _title=__("My Products")}
                            <!-- saved posts stream -->

                        {/if}
                    </div>
                    <!-- center panel -->

                    <!-- right panel -->
                    <div class="col-sm-12 col-md-4">
                        <!-- pro members -->
                        {if count($pro_members) > 0}
                            <div class="panel panel-default panel-friends">
                                <div class="panel-heading">
                                    {if $system['packages_enabled'] && !$user->_data['user_subscribed']}
                                        <div class="pull-right flip">
                                            <small><a href="{$system['system_url']}/packages">{__("Upgrade")}</a></small>
                                        </div>
                                    {/if}
                                    <strong class="text-primary"><i class="fa fa-bolt"></i> {__("Pro Users")}</strong>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        {foreach $pro_members as $_member}
                                            <div class="col-xs-4">
                                                <a class="friend-picture" href="{$system['system_url']}/{$_member['user_name']}" style="background-image:url({$_member['user_picture']});" >
                                                    <span class="friend-name">{$_member['user_firstname']} {$_member['user_lastname']}</span>
                                                </a>
                                            </div>
                                        {/foreach}
                                    </div>
                                </div>
                            </div>
                        {/if}
                        <!-- pro members -->

                        <!-- boosted pages -->
                        {if count($promoted_pages) > 0}
                            <div class="panel panel-default panel-friends">
                                <div class="panel-heading">
                                    {if $system['packages_enabled'] && !$user->_data['user_subscribed']}
                                        <div class="pull-right flip">
                                            <small><a href="{$system['system_url']}/packages">{__("Upgrade")}</a></small>
                                        </div>
                                    {/if}
                                    <strong class="text-primary"><i class="fa fa-bullhorn fa-fw"></i> {__("Pro Pages")}</strong>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        {foreach $promoted_pages as $_page}
                                            <div class="col-xs-4">
                                                <a class="friend-picture" href="{$system['system_url']}/pages/{$_page['page_name']}" style="background-image:url({$_page['page_picture']});" >
                                                    <span class="friend-name">{$_page['page_title']}</span>
                                                </a>
                                            </div>
                                        {/foreach}
                                    </div>
                                </div>
                            </div>
                        {/if}
                         <!-- boosted pages -->

                        {include file='_ads.tpl'}
                        {include file='_widget.tpl'}

                        <!-- people you may know -->
                        {if count($user->_data['new_people']) > 0}
                            <div class="panel panel-default panel-widget">
                                <div class="panel-heading">
                                    <div class="pull-right flip">
                                        <small><a href="{$system['system_url']}/people">{__("See All")}</a></small>
                                    </div>
                                    <strong>{__("People you may know")}</strong>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        {foreach $user->_data['new_people'] as $_user}
                                        {include file='__feeds_user.tpl' _connection="add" _small=true}
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        {/if}
                         <!-- people you may know -->

                        <!-- suggested pages -->
                        {if count($new_pages) > 0}
                            <div class="panel panel-default panel-widget">
                                <div class="panel-heading">
                                    <div class="pull-right flip">
                                        <small><a href="{$system['system_url']}/pages">{__("See All")}</a></small>
                                    </div>
                                    <strong>{__("Suggested Pages")}</strong>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        {foreach $new_pages as $_page}
                                        {include file='__feeds_page.tpl' _tpl="list"}
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        {/if}
                        <!-- suggested pages -->

                        <!-- suggested groups -->
                        {if count($new_groups) > 0}
                            <div class="panel panel-default panel-widget">
                                <div class="panel-heading">
                                    <div class="pull-right flip">
                                        <small><a href="{$system['system_url']}/groups">{__("See All")}</a></small>
                                    </div>
                                    <strong>{__("Suggested Groups")}</strong>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        {foreach $new_groups as $_group}
                                        {include file='__feeds_group.tpl' _tpl="list"}
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        {/if}
                        <!-- suggested groups -->

                        <!-- suggested events -->
                        {if count($new_events) > 0}
                            <div class="panel panel-default panel-widget">
                                <div class="panel-heading">
                                    <div class="pull-right flip">
                                        <small><a href="{$system['system_url']}/events">{__("See All")}</a></small>
                                    </div>
                                    <strong>{__("Suggested Events")}</strong>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        {foreach $new_events as $_event}
                                        {include file='__feeds_event.tpl' _tpl="list" _small=true}
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        {/if}
                        <!-- suggested events -->

                        <!-- mini footer -->
                        {if count($user->_data['new_people']) > 0 || count($new_pages) > 0 || count($new_groups) > 0 || count($new_events) > 0}
                            <div class="row plr10 hidden-xs">
                                <div class="col-xs-12 mb5">
                                    {if count($static_pages) > 0}
                                        {foreach $static_pages as $static_page}
                                            <a href="{$system['system_url']}/static/{$static_page['page_url']}">
                                                {$static_page['page_title']}
                                            </a>{if !$static_page@last} · {/if}
                                        {/foreach}
                                    {/if}
                                    {if $system['contact_enabled']}
                                         · 
                                        <a href="{$system['system_url']}/contacts">
                                            {__("Contacts")}
                                        </a>
                                    {/if}
                                    {if $system['directory_enabled']}
                                         · 
                                        <a href="{$system['system_url']}/directory">
                                            {__("Directory")}
                                        </a>
                                    {/if}
                                    {if $system['market_enabled']}
                                         · 
                                        <a href="{$system['system_url']}/market">
                                            {__("Market")}
                                        </a>
                                    {/if}
                                </div>
                                <div class="col-xs-12">
                                    &copy; {'Y'|date} {$system['system_title']} · <span class="text-link" data-toggle="modal" data-url="#translator">{$system['language']['title']}</span>
                                </div>
                            </div>
                        {/if}
                        <!-- mini footer -->
                    </div>
                    <!-- right panel -->
                </div>
            </div>

        </div>
    </div>
    <!-- page content -->
{/if}

{include file='_footer.tpl'}