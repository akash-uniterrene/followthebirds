 <!-- profile-avatar -->
<div class="profile-avatar-wrapper">
	<img {if $spage['page_picture_id']} class="js_lightbox" data-id="{$spage['page_picture_id']}" data-image="{$spage['page_picture']}" data-context="album" {/if} src="{$spage['page_picture']}" alt="{$spage['page_title']}">
	{if $user->_logged_in && $user->_data['user_id'] == $spage['page_admin']}
		<div class="profile-avatar-change">
			<i class="fa fa-camera js_x-uploader" data-handle="picture-page" data-id="{$spage['page_id']}"></i>
		</div>
		<div class="profile-avatar-delete {if $spage['page_picture_default']}x-hidden{/if}">
			<i class="fa fa-trash js_delete-picture" data-handle="picture-page" data-id="{$spage['page_id']}" title='{__("Delete Picture")}'></i>
		</div>
		<div class="profile-avatar-change-loader">
			<div class="loader loader_medium"></div>
		</div>
	{/if}
</div>
<!-- profile-avatar -->