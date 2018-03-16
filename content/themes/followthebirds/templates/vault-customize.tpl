<link rel="stylesheet" type='text/css' href="{$system['system_url']}/includes/assets/js/plugins/ssi-uploader/ssi-uploader.min.css">
<form id="myForm" action="{$system['system_url']}/{$profile['user_name']}/vault/{$profile['vaultname']}" method="post">
	<input type="file" name="ssi-upload" multiple id="ssi-upload" name="attachment"/>
	<button id="upBtn" class="btn btn-success">Upload Files</button>
</form>
<script src="https://code.jquery.com/jquery-1.12.3.min.js"
        integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script src="{$system['system_url']}/includes/assets/js/plugins/ssi-uploader/ssi-uploader.min.js"></script>
<script>
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
        url: "{$system['system_url']}/{$profile['user_name']}/uploadVault/{$profile['vaultname']}/",
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
</script>	
