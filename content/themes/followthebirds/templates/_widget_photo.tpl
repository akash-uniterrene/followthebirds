{if count($spage['photos']) > 0}
	<div class="panel panel-default panel-photos">
		<div class="panel-heading">
			<a href="{$system['system_url']}/pages/{$spage['page_name']}/photos">{__("Photos")}</a>
		</div>
		<div class="panel-body">
			<div class="row">
				{foreach $spage['photos'] as $photo}
					{include file='__feeds_photo.tpl' _context="photos" _small=true}
				{/foreach}
			</div>
		</div>
	</div>
{/if}