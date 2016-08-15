// Slides

jQuery(document).ready(function(){
  
 jQuery('.top_slideshow_mobile').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slide_tabs'
});


jQuery('.slide_tabs').slick({
  slidesToShow: 4,
//   slidesToShow: 3, if centermode is turned on, you need to drop the this number to be less than actual # of itmes
  slidesToScroll: 1,
  asNavFor: '.top_slideshow_mobile',
  dots: true,
//   centerMode: true,
  focusOnSelect: true,
  arrows: false,
	responsive: [
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
   ]
	});    
 
// Mobile Menu

	jQuery(".mobile_nav_wrapper").click(function(){

		jQuery(".nav_wrap").slideToggle(200);
		jQuery(this).toggleClass("open");
		jQuery("header").toggleClass("show");

	});
	
	jQuery(".nav_wrap a").click(function(){
		
		jQuery(".nav_wrap").slideUp(200);
		jQuery(".mobile_nav_wrapper").removeClass("open");
		jQuery("header").addClass("show");

		
	});
	
	
	// Fixed Header
	
	
	var lastScroll = 0;


    jQuery(".show").show();

    jQuery(window).scroll(function(){
        var scroll = jQuery(window).scrollTop();
        if (scroll > lastScroll) {
            
            
         jQuery(".show").fadeOut();
        
        
        } else if (scroll < lastScroll) {
            
            jQuery(".show").fadeIn();
        
        
        }
        lastScroll = scroll;
    });
    
  // Fixed Bottom Navs
  


	
	// Anchors
	
	

	jQuery(function() {
  jQuery('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 600);
        return false;
      }
    }
  });
});


// Leave a Review 


jQuery(".leavereview_wrapper").hide();


jQuery(".leaveareview").click(function() {
	
	jQuery(".form_wrapper").fadeOut(600);
	jQuery(".contact_right").css("height","600px");
	jQuery(".leavereview_wrapper").delay(300).fadeIn(600);
		
});



jQuery(".back").click(function() {
	
	jQuery(".leavereview_wrapper").fadeOut(600);
	//jQuery(".contact_right").css("height","600px");
	jQuery(".form_wrapper").delay(300).fadeIn(600);
	
});





	
	

});
