<?php
/* Smarty version 3.1.31, created on 2018-02-02 07:34:51
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/_footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a74149bd82325_82191700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a72176e8191f817a26b8450f98cb024a3e491a31' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/_footer.tpl',
      1 => 1517556888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_ads.tpl' => 1,
    'file:_js_files.tpl' => 1,
    'file:_js_templates.tpl' => 1,
  ),
),false)) {
function content_5a74149bd82325_82191700 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- ads -->
<?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_ads'=>$_smarty_tpl->tpl_vars['ads_master']->value['footer'],'_master'=>true), 0, false);
?>

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
<?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/css/font-awesome/css/font-awesome.min.css">
<?php }?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/css/twemoji-awesome/twemoji-awesome.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/css/flag-icon/css/flag-icon.min.css">
<!-- Dependencies CSS [Twemoji-Awesome|Flag-Icon] -->

<!-- JS Files -->
<?php $_smarty_tpl->_subTemplateRender('file:_js_files.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- JS Files -->

<!-- JS Templates -->
<?php $_smarty_tpl->_subTemplateRender('file:_js_templates.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- JS Templates -->

<!-- Analytics Code -->
<?php if ($_smarty_tpl->tpl_vars['system']->value['analytics_code']) {
echo html_entity_decode($_smarty_tpl->tpl_vars['system']->value['analytics_code'],ENT_QUOTES);
}?>
<!-- Analytics Code -->

<?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
	<!-- Notification -->
	<audio id="notification_sound">
		<source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/sounds/notification.mp3" type="audio/mpeg">
	</audio>
	<!-- Notification -->
	<!-- Chat -->
	<audio id="chat_sound">
		<source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/sounds/chat.mp3" type="audio/mpeg">
	</audio>
	<!-- Chat -->
	<!-- Call -->
	<audio id="call_sound">
		<source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/sounds/call.mp3" type="audio/mpeg">
	</audio>
	<!-- Call -->
	<!-- Video -->
	<audio id="video_sound">
		<source src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/sounds/video.mp3" type="audio/mpeg">
	</audio>
	<!-- Video -->
<?php }?>

</body>
</html><?php }
}
