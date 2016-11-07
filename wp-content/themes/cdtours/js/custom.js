

jQuery(document).ready(function(){
	
	
	
	// Slides

// Mobile Top Nav
  
 jQuery('#mobileslides').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slide_tabs.mobile'
});


jQuery('.slide_tabs.mobile').slick({
  slidesToShow: 4,
//   slidesToShow: 3, if centermode is turned on, you need to drop the this number to be less than actual # of itmes
  slidesToScroll: 1,
  asNavFor: '#mobileslides',
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
	
	
	
// Desktop Top Nav with Video

	
	
	
jQuery('#desktopslides').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slide_tabs.desktop'
});


jQuery('.slide_tabs.desktop').slick({
  slidesToShow: 4,
//   slidesToShow: 3, if centermode is turned on, you need to drop the this number to be less than actual # of itmes
  slidesToScroll: 1,
  asNavFor: '#desktopslides',
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





// Gallery Matterport Iframes

	
	
	
jQuery('.threed_gallery_slideshow').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.gallery_tabs'
});


jQuery('.gallery_tabs').slick({
  slidesToShow: 4,
//   slidesToShow: 3, if centermode is turned on, you need to drop the this number to be less than actual # of itmes
  slidesToScroll: 2,
  asNavFor: '.threed_gallery_slideshow',
  dots: false,
//   centerMode: true,
  focusOnSelect: true,
  arrows: true,
	responsive: [
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
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
	
	
/*
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
*/
    
  
  // Makes the desktop nav show on page scroll
  
  jQuery(window).resize(function(){
            
      if (Modernizr.mq('(max-width: 980px)')) {
          
          jQuery("header").addClass("show");
          
      } else {
          
          // Clear the settings etc
          
          jQuery("header").removeClass("show");
      
      }
    
    
    }).resize();


		
	
	// Toggles through top nav active states as page scrolls through sections
	
	
	// https://stanhub.com/sticky-header-change-navigation-active-class-on-page-scroll-with-jquery/
	

	jQuery(document).on("scroll", onScroll);
 
		jQuery('a[href^="#"]').on('click', function (e) {
			e.preventDefault();
			jQuery(document).off("scroll");
 
			jQuery('nav.desktop_nav a').each(function () {
				jQuery(this).removeClass('nav_active');
			})
			jQuery(this).addClass('nav_active');
 
			var target = this.hash;
			$target = jQuery(target);
			jQuery('html, body').stop().animate({
				'scrollTop': $target.offset().top+2
			}, 500, 'swing', function () {
				window.location.hash = target;
				jQuery(document).on("scroll", onScroll);
			});
		});

 
	function onScroll(event){
		var scrollPosition = jQuery(document).scrollTop();
		jQuery('nav.desktop_nav a').each(function () {
			var currentLink = jQuery(this);
			var refElement = jQuery(currentLink.attr("href"));
			if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
				jQuery('nav.desktop_nav a').removeClass("nav_active");
				currentLink.addClass("nav_active");
			}
			else{
				currentLink.removeClass("nav_active");
			}
		});
	}



	
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
