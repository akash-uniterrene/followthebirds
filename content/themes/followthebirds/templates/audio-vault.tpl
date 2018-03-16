<form id="myForm" action="" method="post">
	<input type="file" name="ssi-upload" id="ssi-upload" name="attachment"/>
	<button id="upBtn" type="button" class="btn btn-success">Upload Files</button>
</form>
<!-- success -->
<div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
<!-- success -->

<!-- error -->
<div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
<!-- error -->
<div class="alert alert-success mb0 mt10 x-hidden" role="alert">Your privacy settings have been updated</div>
<script src="{$system['system_url']}/includes/assets/js/plugins/trevor/jquery-1.10.2.min.js"></script>
<script>
$('#upBtn').click(function(){
	$("#myForm").ajaxSubmit({
		url: "{$system['system_url']}/{$profile['user_name']}/uploadVault/{$profile['vaultname']}/",
		success: function(result) {
			
			if(result.success){
				$('.alert-success').html(result.message);
			}else{
				$('.alert-danger').html(result.message);
			}
		},
		type: 'post'
	});
});
</script>