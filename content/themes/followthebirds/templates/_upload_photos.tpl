<div id="exTab1" class="">	
	<ul class="nav nav-pills">
		<li class="active"><a href="#2a" data-toggle="tab">Upload From Computer</a>
		</li>
		<li >
			<a id="show_vault" data-url="{$system['system_url']}/{$user->_data['user_name']}/showVault/image" href="#vault_images" data-toggle="tab">Upload From Vault</a>
		</li>
		
	</ul>

	<div class="tab-content clearfix">
		<div class="tab-pane" id="vault_images">
		 
		</div>
		<div class="tab-pane active" id="2a">
		  <span class="publisher-tools-attach js_publisher-photos">
				<i class="fa fa-camera fa-fw js_x-uploader" data-handle="publisher" data-multiple="true"></i>
			</span>
		</div>
	</div>
  </div>