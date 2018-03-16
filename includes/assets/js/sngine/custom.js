// JavaScript Document
$(document).ready(function() {	
	if ($('#owl-example').length){
		$("#owl-example").owlCarousel({ 
			//Basic Speeds
			slideSpeed : 200,
			paginationSpeed : 800,

			//Autoplay
			autoPlay : false,
			goToFirst : true,
			goToFirstSpeed : 1000,

			// Navigation
			navigation : false,
			navigationText : ["<i class='fa fa-caret-left'></i>","<i class='fa fa-caret-right'></i>"],
			pagination : true,
			paginationNumbers: false,

			// Responsive 
			responsive: true,
			items : 3,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [980,3],
			itemsTablet: [768,2,],
			itemsMobile : [479,2] 
		});
	}
	if ($('#owl-example1').length){
		$("#owl-example1").owlCarousel({ 
			//Basic Speeds
			loop:true,		
			slideSpeed : 200,
			paginationSpeed : 800,

			//Autoplay
			autoPlay : false,
			goToFirst : true,
			goToFirstSpeed : 1000,

			// Navigation
			navigation : true,
			navigationText : ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
			pagination : true,
			paginationNumbers: false,

			// Responsive 
			responsive: true,
			items : 5,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [980,3],
			itemsTablet: [768,3,],
			itemsMobile : [479,2] 
		});
	}
	$(document).on('click','#show_vault',function(){
		if($(this).attr('class') != 'active'){
			$.ajax({
				url: $(this).attr('data-url'),
				method : 'POST',
				data:{
					vaultType: "image"
				},
				success: function(result){								
				   $.each(result, function (name, value) {
					  $('#vault_images').append('<div class="col-md-4"> <a id="list_vault_images" data-url="'+name+'"> <img src="https://uniterreneprojects.com/dev/followthebirds/content/themes/followthebirds/images/icons/folder.png" width="40"> <label>'+value.title+'</label> </a> </div>');
				   	$(this).addClass('active');
				   });				
				}
			});
			
		}
	});
	
	$(document).on('click','#vault_images div',function(){
		$(this).toggleClass('checked');
	});
	
	$(document).on('click','#addtopost',function(){
		$('#vault_images .checked').each(function (index, value) { 
$('.publisher-attachments.attachments ul').append('<li class="item deletable" data-src="'+$(this).attr('data-src')+'"><img alt="" src="'+$(this).children().attr('src')+'"><button type="button" class="close js_publisher-attachment-remover" title="Remove"><span>×</span></button></li>');
		});
		
		$('.publisher-attachments.attachments').show();
		$(document).trigger('click');
	});
	
	
	$(document).on('click','#list_vault_images',function(){
		$.ajax({
			url: $(this).attr('data-url'),
			method : 'POST',
			data:{
				vaultType: "image"
			},
			success: function(result){		
			   $('#vault_images').html('');
			   $.each(result, function (name, value) {				  
				  $('#vault_images').append(value);
			   });
				
			}
		});
	});
	
});


/* banner slider*/
(function( $ ) {	
 	$('#banner-slides').carousel({
      interval:8000
    });

	//Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	
	//Variables on page load 
	var $myCarousel = $('#banner-slides'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
		
	//Initialize carousel 
	$myCarousel.carousel();
	
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);
	
	//Pause carousel //
	//$myCarousel.carousel('pause');//
	
	
	//Other slides to be animated on carousel slide event 
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});  
	
})(jQuery);





/* banner slider end*/

