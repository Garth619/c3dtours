<?php /* Template Name: Home */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick/slick-theme.css"/>
<?php wp_head();?>
<script>
  (function(d) {
    var config = {
      kitId: 'teb2ngw',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
</head>

<body <?php body_class(); ?>>
		
		<header>
			
			<img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.jpg"/>
			
			
			
			<div class="mobile_nav_wrapper">
				
				<div class="mobile_bars"></div><!-- mobile_bars -->
				<div class="mobile_bars"></div><!-- mobile_bars -->
				<div class="mobile_bars"></div><!-- mobile_bars -->
				
			</div><!-- mobile_nav -->
			
			
			
		</header>	
		
		<nav class="nav_wrap">
			
			<div class="nav_wrap_inner">
				
				<ul>
					<li><a href="#welcome">Welcome</a></li>
					<li><a href="#demo">3D Gallery Demo</a></li>
					<li><a href="#industries">Industries</a></li>
					<li><a href="#floorplan">Floor Plan</a></li>
					<li><a href="#contact">Contact Us</a></li>
					<li><a href="#contact" class="leaveareview">Leave a Review</a></li>
				</ul>
			
			</div><!-- nav_wrap_inner -->
			
			
		</nav><!-- nav_wrap -->
		
		<section class="top_slideshow_mobile">
		
			<div class="top_slide" style="background:url(<?php bloginfo('template_directory');?>/images/banner.jpg) top center no-repeat;background-size:cover;">
			
				<div class="blue_overlay">
				
					<div class="slide_content">
					
						<h1>Home</h1>	
						<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</h2>
						<span class="demo_button">See Demo</span><!-- demo_button -->
				
					</div><!-- slide_content -->
					
				</div><!-- blue_overlay -->
				
			</div><!-- top_slide -->
			
			
			<div class="top_slide" style="background:url(<?php bloginfo('template_directory');?>/images/rest.jpg) top center no-repeat;background-size:cover;">
			
				<div class="blue_overlay">
				
					<div class="slide_content">
					
						<h1>Restaurants</h1>	
						<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</h2>
						<span class="demo_button">See Demo</span><!-- demo_button -->
				
					</div><!-- slide_content -->
					
				</div><!-- blue_overlay -->
				
			</div><!-- top_slide -->
			
			<div class="top_slide" style="background:url(<?php bloginfo('template_directory');?>/images/rest.jpg) top center no-repeat;background-size:cover;">
			
				<div class="blue_overlay">
				
					<div class="slide_content">
					
						<h1>Breweries</h1>	
						<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</h2>
						<span class="demo_button">See Demo</span><!-- demo_button -->
				
					</div><!-- slide_content -->
					
				</div><!-- blue_overlay -->
				
			</div><!-- top_slide -->
			
			<div class="top_slide" style="background:url(<?php bloginfo('template_directory');?>/images/rest.jpg) top center no-repeat;background-size:cover;">
			
				<div class="blue_overlay">
				
					<div class="slide_content">
					
						<h1>Commercial</h1>	
						<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</h2>
						<span class="demo_button">See Demo</span><!-- demo_button -->
				
					</div><!-- slide_content -->
					
				</div><!-- blue_overlay -->
				
			</div><!-- top_slide -->
			
		</section><!-- top_slideshow_mobile -->
		
		<nav class="slide_tabs">
			
			<div class="slide_tabs_title">Homes</div>
			<div class="slide_tabs_title">Restaurants</div>
			<div class="slide_tabs_title">Breweries</div>
			<div class="slide_tabs_title">Commercial</div>
				
		</nav><!-- slide_tabs -->
		
		<section class="threed_gallery">
			
			<a name="demo"/>
			
			<h1>3D Gallery</h1>
			
			<div class="threed_gallery_slideshow">
				
				
			</div><!-- threed_gallery_slideshow -->
			
			<div class="threed_lower_content">
			
				<h2>lorem ipsum dolor AMET CONSECTETUR</h2>
			
				<img class="cam" src="<?php bloginfo('template_directory');?>/images/cam.jpg"/>
			
				<h3>Lorem ipsum dolor sit amet, cons ec tetur adipi sicing</h3>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in. </p>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in. </p>
			
			</div><!-- threed_lower_content -->
			
		</section><!-- 3D Gallery -->
		
		<section class="industries">
			
			<a name="industries"/>
			<h1 class="indus_title">Industries</h1>
			
			<div class="indus_content">
				
				<h1>Restaurants</h1>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in. </p>
				
			</div><!-- indus_content -->
			
			<div class="indus_thumbs_wrapper">
				
				<div class="indus_thumbs">Homes</div>
<!--
				<div class="indus_thumbs">Restaurants</div>
				<div class="indus_thumbs">Breweries</div>
				<div class="indus_thumbs">Commercial</div>
-->
				
			</div><!-- indus_thumbs -->
			
		</section><!-- industries -->
		
		<section class="floor_plan">
			
			<a name="floorplan"/>
			
			<h1>Floor Plans</h1>
			
			<div class="floor_plan_content">
				
				<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor elit, sed do eiusmod&nbsp;tempor</h2>
				
				<ul>
					<li><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
					<li><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
					<li><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
					<li><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
					<li><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
					<li><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span></li>
				</ul>
			
			</div><!-- floor_plan_content -->
			
		</section><!-- floor_plan -->
		
		<section class="contact_us">
			
			
			
			<div class="contact_left">
				
				<div class="border_left_wrapper">
					
					<h1><a href="#contact">contact us</a></h1>
				
				</div><!-- border_left_wrapper-->
				
				<div class="sub_headers">
					
					<span class="contact_or">or</span>
					<a href="#contact" class="mybutton leaveareview">Leave a Review</a>
				
				</div><!-- sub_headers -->
				
				
			</div><!-- contact_left -->
			
			
			
			<div class="contact_right">
				
				<a name="contact"/>
				
				<div class="form_wrapper">
					
					<?php gravity_form( 1, false, true, false, '', true );?>
					
				</div><!--form_wrapper -->
				
				<div class="leavereview_wrapper">
					
					<h1>Leave a review</h1>
					
				</div><!-- leavereview_wrapper -->
				
				
			</div><!-- contact_right -->
			
		</section><!-- contact_us -->
		
		<footer>
			
			
		</footer>
				
				
			
<?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick/slick/slick.min.js"></script>
<script type="text/javascript">
	
	
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

	});
	
	jQuery(".nav_wrap a").click(function(){
		
		jQuery(".nav_wrap").slideUp(200);
		jQuery(".mobile_nav_wrapper").removeClass("open");

		
	});
	
	
	// Fixed Header
	
	
	var lastScroll = 0;


    jQuery("header").show();

    jQuery(window).scroll(function(){
        var scroll = jQuery(window).scrollTop();
        if (scroll > lastScroll) {
            
            
         jQuery("header").fadeOut();
        
        
        } else if (scroll < lastScroll) {
            
            jQuery("header").fadeIn();
        
        
        }
        lastScroll = scroll;
    });

	
	
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




	
	

});

</script>
</body>
</html>

