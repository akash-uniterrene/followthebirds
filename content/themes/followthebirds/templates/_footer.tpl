<!-- ads -->
{include file='_ads.tpl' _ads=$ads_master['footer'] _master=true}
<!-- ads -->


<!-- footer -->
 <footer>
    <div class="container">
    	<div class="row">
    		<div class="col-lg-6">
    			<p>@ Copyright 2018 All Rights Reserved. </p>
    		</div>
			<div class="col-lg-6"> 
				<ul>
					<li><a href="javascript:void(0)">About Us |</a></li>
					<li><a href="javascript:void(0)">Term & Condition |</a></li>
					<li><a href="javascript:void(0)">Privacy & Policy |</a></li>
					<li><a href="javascript:void(0)">Contact Us</a></li>
				</ul>
			</div>
    	</div>
    </div>
  	
  </footer> 
<!-- footer -->

</div>
<!-- main wrapper -->

<!-- Dependencies CSS [Twemoji-Awesome|Flag-Icon] -->
{if !$user->_logged_in}
<link rel="stylesheet" href="{$system['system_url']}/includes/assets/css/font-awesome/css/font-awesome.min.css">
{/if}
<link rel="stylesheet" href="{$system['system_url']}/includes/assets/css/twemoji-awesome/twemoji-awesome.min.css">
<link rel="stylesheet" href="{$system['system_url']}/includes/assets/css/flag-icon/css/flag-icon.min.css">
<!-- Dependencies CSS [Twemoji-Awesome|Flag-Icon] -->

<!-- JS Files -->
{include file='_js_files.tpl'}
<!-- JS Files -->

<!-- JS Templates -->
{include file='_js_templates.tpl'}
<!-- JS Templates -->

<!-- Analytics Code -->
{if $system['analytics_code']}{html_entity_decode($system['analytics_code'], ENT_QUOTES)}{/if}
<!-- Analytics Code -->

{if $user->_logged_in}
	<!-- Notification -->
	<audio id="notification_sound">
		<source src="{$system['system_url']}/includes/assets/sounds/notification.mp3" type="audio/mpeg">
	</audio>
	<!-- Notification -->
	<!-- Chat -->
	<audio id="chat_sound">
		<source src="{$system['system_url']}/includes/assets/sounds/chat.mp3" type="audio/mpeg">
	</audio>
	<!-- Chat -->
	<!-- Call -->
	<audio id="call_sound">
		<source src="{$system['system_url']}/includes/assets/sounds/call.mp3" type="audio/mpeg">
	</audio>
	<!-- Call -->
	<!-- Video -->
	<audio id="video_sound">
		<source src="{$system['system_url']}/includes/assets/sounds/video.mp3" type="audio/mpeg">
	</audio>
	<!-- Video -->
{/if}

</body>
</html>