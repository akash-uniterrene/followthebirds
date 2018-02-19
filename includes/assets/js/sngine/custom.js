// JavaScript Document
$(document).ready(function() {		
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

