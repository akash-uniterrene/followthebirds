<div class="panel panel-default">
	<div class="panel-body">
		{if !is_empty($spage['page_description'])}
			<div class="about-bio">
				{$spage['page_description']}
			</div>
		{/if}
		<ul class="about-list">
			<!-- likes -->
			<li>
				<div class="about-list-item">
					<i class="fa fa-thumbs-o-up fa-fw fa-lg"></i>
					{$spage['page_likes']} {__("people like this")}
				</div>
			</li>
			<!-- likes -->
			<!-- category -->
			<li>
				<div class="about-list-item">
					<i class="fa fa-briefcase fa-fw fa-lg"></i>
					{__($spage['category_name'])}
				</div>
			</li>
			<!-- category -->
		</ul>
	</div>
</div>