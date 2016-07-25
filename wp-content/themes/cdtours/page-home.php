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
			
			<?php // wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			
		</header>	
		
		<section class="top_slideshow_mobile">
		
			<div class="top_slide">
			
			
			
			</div><!-- top_slide -->
			
		</section><!-- slideshow -->
		
		<section class="threed_gallery">
			
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
			
			
			
		</section><!-- industries -->
		
		<section class="floor_plan">
			
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
					
					<h1>contact us</h1>
				
				</div><!-- border_left_wrapper-->
				
				<div class="sub_headers">
					
					<span class="contact_or">or</span>
					<span class="mybutton">Leave a Review</span>
				
				</div><!-- sub_headers -->
				
				
			</div><!-- contact_left -->
			
			<div class="contact_right">
				
				
			</div><!-- contact_right -->
			
		</section><!-- contact_us -->
				
				
			
<?php wp_footer(); ?>
</body>
</html>

