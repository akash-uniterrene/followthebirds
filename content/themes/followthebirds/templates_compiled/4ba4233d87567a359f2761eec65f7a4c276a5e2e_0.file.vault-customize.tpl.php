<?php
/* Smarty version 3.1.31, created on 2018-03-12 12:13:17
  from "/home/web/public_sc/Script/content/themes/followthebirds/templates/vault-customize.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5aa66eddf128a7_52983547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ba4233d87567a359f2761eec65f7a4c276a5e2e' => 
    array (
      0 => '/home/web/public_sc/Script/content/themes/followthebirds/templates/vault-customize.tpl',
      1 => 1520856793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa66eddf128a7_52983547 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/ssi-uploader/ssi-uploader.min.css">
<form id="myForm" action="http://localhost:3300/upload" method="post">
	<input type="file" name="ssi-upload" multiple id="ssi-upload" name="attachment"/>
	<button id="upBtn">Up</button>
</form>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.12.3.min.js"
        integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/js/plugins/ssi-uploader/ssi-uploader.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var notifyOptions = {
        iconButtons: {
            className: 'fa fa-question about',
            method: function (e, modal) {
                ssi_modal.closeAll('notify');
                var btn = $(this).addClass('disabled');
                ssi_modal.dialog({
                    onClose: function () {
                        btn.removeClass('disabled')
                    },
                    onShow: function () {
                    },
                    okBtn: {
						className: 'btn btn-primary btn-sm'
					},
                    title: 'ssi-modal',
                    content: 'ssi-modal is an open source modal window plugin that only depends on jquery. It has many options and it\'s super flexible, maybe the most flexible modal out there... For more details click <a class="sss" href="http://ssbeefeater.github.io/#ssi-modal" target="_blank">here</a>',
                    sizeClass: 'small',
                    animation: true
                });
            }
        }
    };

    // option 1


    $('#ssi-upload').ssi_uploader({
        url: 'http://localhost/public_sc/ssi-uploader-master/uploadAction.php',
        inForm:true
    });

    // option 2

    var uploader = $('#ssi-upload').ssi_uploader({
        url: 'uploadAction.php'
    });

    $( "#myForm" ).on( "submit", function( event ) {
        event.preventDefault();
        uploader.data('ssi_upload').uploadFiles();
        uploader.on('onUpload.ssi-uploader',function(){
            $( "#myForm" ).submit();
        });
    });
<?php echo '</script'; ?>
>	
<?php }
}
