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
			
			<h2>lorem ipsum dolor AMET CONSECTETUR</h2>
			
			<img class="cam" src="<?php bloginfo('template_directory');?>/images/cam.jpg"/>
			
		</section><!-- 3D Gallery -->
				
				
			
<?php wp_footer(); ?>
</body>
</html>

