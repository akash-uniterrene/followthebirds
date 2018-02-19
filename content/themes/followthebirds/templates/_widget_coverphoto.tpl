<div {if $spage['page_cover_id']} class="profile-cover-wrapper js_lightbox" data-id="{$spage['page_cover_id']}" data-image="{$system['system_uploads']}/{$spage['page_cover']}" data-context="album" {else} class="profile-cover-wrapper" {/if}  {if $spage['page_cover']} style="background-image:url('{$system['system_uploads']}/{$spage['page_cover']}');" {/if}>
	{if $user->_logged_in && $user->_data['user_id'] == $spage['page_admin']}
		<div class="profile-cover-change">
			<i class="fa fa-camera js_x-uploader" data-handle="cover-page" data-id="{$spage['page_id']}"></i>
		</div>
		<div class="profile-cover-delete {if !$spage['page_cover']}x-hidden{/if}">
			<i class="fa fa-trash js_delete-cover" data-handle="cover-page" data-id="{$spage['page_id']}" title='{__("Delete Cover")}'></i>
		</div>
		<div class="profile-cover-change-loader">
			<div class="loader loader_large"></div>
		</div>
	{/if}
</div>