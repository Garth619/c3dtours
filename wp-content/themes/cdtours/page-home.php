<?php /* Template Name: Home */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
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

<body id="bodytop" <?php body_class(); ?>>
		
		<header class="show">
			
			<div class="logo_wrapper">
				<a href="#bodytop">
					<img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.jpg"/>
				</a>
			</div><!-- logo_wrapper -->
			
			<div class="mobile_nav_wrapper">
				
				<div class="mobile_bars"></div><!-- mobile_bars -->
				<div class="mobile_bars"></div><!-- mobile_bars -->
				<div class="mobile_bars"></div><!-- mobile_bars -->
				
			</div><!-- mobile_nav -->
			
			
			<nav class="nav_wrap">
			
			<div class="nav_wrap_inner">
				
				<ul>
					<li><a href="tel:5555555555">555.555.5555</a></li>
					<li><a href="#demo">3D Gallery Demo</a></li>
					<li><a href="#industries">Industries</a></li>
					<li><a href="#floorplan">Floor Plan</a></li>
					<li><a href="#contact">Contact Us</a></li>
					<li><a href="#contact" class="leaveareview">Leave a Review</a></li>
					
				</ul>
			
			</div><!-- nav_wrap_inner -->
			
			
		</nav><!-- nav_wrap -->
			
		
		
		<nav class="desktop_nav">
			
			<ul>
				<li><a href="#demo">3D Gallery Demo</a></li>
				<li><a href="#industries">Industries</a></li>
				<li><a href="#floorplan">Floor Plan</a></li>
				<li><a href="#contact">Contact Us</a></li>
				<li><a href="tel:5555555555">555.555.5555</a></li>
			</ul>
			
		</nav><!-- desktop_nav -->
		
			
		</header>	
		
		
		
		
	
		
		<section id="mobileslides" class="top_slideshow stickem-container">
		
			<div class="top_slide" style="background:url(<?php bloginfo('template_directory');?>/images/banner.jpg) top center no-repeat;background-size:cover;">
			
				<div class="blue_overlay">
				
					<div class="slide_content">
					
						<h1>Home</h1>	
						<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</h2>
						<a class="demo_button" href="#demo">See Demo</a><!-- demo_button -->
				
					</div><!-- slide_content -->
					
				</div><!-- blue_overlay -->
				
			</div><!-- top_slide -->
			
			
			<div class="top_slide" style="background:url(<?php bloginfo('template_directory');?>/images/rest.jpg) top center no-repeat;background-size:cover;">
			
				<div class="blue_overlay">
				
					<div class="slide_content">
					
						<h1>Restaurants</h1>	
						<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</h2>
						<a class="demo_button" href="#demo">See Demo</a><!-- demo_button -->
				
					</div><!-- slide_content -->
					
				</div><!-- blue_overlay -->
				
			</div><!-- top_slide -->
			
			<div class="top_slide" style="background:url(<?php bloginfo('template_directory');?>/images/rest.jpg) top center no-repeat;background-size:cover;">
			
				<div class="blue_overlay">
				
					<div class="slide_content">
					
						<h1>Breweries</h1>	
						<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</h2>
						<a class="demo_button" href="#demo">See Demo</a><!-- demo_button -->
				
					</div><!-- slide_content -->
					
				</div><!-- blue_overlay -->
				
			</div><!-- top_slide -->
			
			<div class="top_slide" style="background:url(<?php bloginfo('template_directory');?>/images/rest.jpg) top center no-repeat;background-size:cover;">
			
				<div class="blue_overlay">
				
					<div class="slide_content">
					
						<h1>Commercial</h1>	
						<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</h2>
						<a class="demo_button" href="#demo">See Demo</a><!-- demo_button -->
				
					</div><!-- slide_content -->
					
				</div><!-- blue_overlay -->
				
			</div><!-- top_slide -->
			
		</section><!-- top_slideshow_mobile -->
		
	
		
		<div id="mobile_tabs_wrapper" class="slide_tabs_wrapper stickem">
		
			<nav class="slide_tabs mobile">
			
				<div class="slide_tabs_title">Homes</div>
				<div class="slide_tabs_title">Restaurants</div>
				<div class="slide_tabs_title">Breweries</div>
				<div class="slide_tabs_title">Commercial</div>
				
		</nav><!-- slide_tabs -->
		
		</div><!-- slide_tabs_wrapper -->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<section id="desktopslides" class="top_slideshow stickem-container">
		
			<div class="top_slide" style="background:url(<?php bloginfo('template_directory');?>/images/banner.jpg) top center no-repeat;background-size:cover;">
			
				<div class="blue_overlay">
				
					<div class="slide_content">
					
						<h1>Home</h1>	
						<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</h2>
						<a class="demo_button" href="#demo">See Demo</a><!-- demo_button -->
				
					</div><!-- slide_content -->
					
				</div><!-- blue_overlay -->
				
			</div><!-- top_slide -->
			
			
			<div class="top_slide" style="background:url(<?php bloginfo('template_directory');?>/images/rest.jpg) top center no-repeat;background-size:cover;">
			
				<div class="blue_overlay">
				
					<div class="slide_content">
					
						<h1>Restaurants</h1>	
						<h2>Lorem ipsum dolor sitLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</h2>
						<a class="demo_button" href="#demo">See Demo</a><!-- demo_button -->
				
					</div><!-- slide_content -->
					
				</div><!-- blue_overlay -->
				
			</div><!-- top_slide -->
			
			<div class="top_slide" style="background:url(<?php bloginfo('template_directory');?>/images/rest.jpg) top center no-repeat;background-size:cover;">
			
				<div class="blue_overlay">
				
					<div class="slide_content">
					
						<h1>Breweries</h1>	
						<h2>LoremLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utt amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</h2>
						<a class="demo_button" href="#demo">See Demo</a><!-- demo_button -->
				
					</div><!-- slide_content -->
					
				</div><!-- blue_overlay -->
				
			</div><!-- top_slide -->
			
			<div class="top_slide" style="background:url(<?php bloginfo('template_directory');?>/images/rest.jpg) top center no-repeat;background-size:cover;">
			
				<div class="blue_overlay">
				
					<div class="slide_content">
					
						<h1>Commercial</h1>	
						<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</h2>
						<a class="demo_button" href="#demo">See Demo</a><!-- demo_button -->
				
					</div><!-- slide_content -->
					
				</div><!-- blue_overlay -->
				
			</div><!-- top_slide -->
			
		</section><!-- top_slideshow_mobile -->
		
	
		
		<div id="desktop_tabs_wrapper" class="slide_tabs_wrapper stickem">
		
			<nav class="slide_tabs desktop">
			
				<div class="slide_tabs_title">Homes</div>
				<div class="slide_tabs_title">Restaurants</div>
				<div class="slide_tabs_title">Breweries</div>
				<div class="slide_tabs_title">Commercial</div>
				
		</nav><!-- slide_tabs -->
		
		</div><!-- slide_tabs_wrapper -->
		
		
		
		
		
		
		
				
		
		
		
		
		
		
		
		
		
		
		
		
		<section id="demo" class="threed_gallery">
			
<!-- 			<div id="demo" class="gallery_tag">hellp</div> -->
			
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
		
		<section id="industries" class="industries_section">
			

			
			<h1 class="indus_title">Industries</h1>
			
			
			<div class="indus_box_wrapper">
			
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
			
			</div><!-- indus_box_wrapper -->
			
		</section><!-- industries -->
		
		<section id="floorplan" class="floor_plan">
			
<!-- 			<a class="floorplan_tag" name="floorplan"></a> -->
			
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
			
			
			
			<div id="contact" class="contact_right">
				
<!-- 				<a class="contact_tag" name="contact"></a> -->
				
				<div class="form_wrapper">
					
					<?php gravity_form( 1, false, true, false, '', true );?>
					
				</div><!--form_wrapper -->
				
				<div class="leavereview_wrapper">
					
					<span>Leave a review</span>
					
					<span class="back">Back</span>
					
				</div><!-- leavereview_wrapper -->
				
				
			</div><!-- contact_right -->
			
		</section><!-- contact_us -->
		
		<footer>
			
			<span>copyright VERBIAGE</span>
			
			<div class="social_icons_wrapper">
			
				<a href="" target="_blank">
					<img src="<?php bloginfo('template_directory');?>/images/fb.png"/>
				</a>
				<a href="" target="_blank">
					<img src="<?php bloginfo('template_directory');?>/images/fb.png"/>
				</a>
				<a href="" target="_blank">
					<img src="<?php bloginfo('template_directory');?>/images/fb.png"/>
				</a>
				<a href="" target="_blank">
					<img src="<?php bloginfo('template_directory');?>/images/fb.png"/>
				</a>
			
			</div><!-- social_icons_wrapper -->
			
		</footer>
				
				
			
<?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory');?>/slick/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/custom.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/modernizr.js"></script>
<script>

		
</script>



</body>
</html>

