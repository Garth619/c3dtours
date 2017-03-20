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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=2" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick/slick-theme.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/wow/css/libs/animate.css">
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
					<img class="logo" src="<?php bloginfo('template_directory');?>/images/temp.png"/>
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
					<li><a href="#demo">3D Gallery</a></li>
					<li><a href="#industries">PHOTO GALLERY</a></li>
					<li><a href="#floorplan">AS-BUILTS GALLERY</a></li>
					<li><a href="#contact">Contact Us</a></li>
					<li><a href="#contact" class="leaveareview">Leave a Review</a></li>
					
				</ul>
			
			</div><!-- nav_wrap_inner -->
			
			
		</nav><!-- nav_wrap -->
			
		
		
		<nav class="desktop_nav">
			
			<ul>
				<li><a href="#demo">3D Gallery</a></li>
				<li><a href="#industries">PHOTO GALLERY</a></li>
				<li><a href="#floorplan">AS-BUILTS GALLERY</a></li>
				<li><a href="#contact">Contact Us</a></li>
				<li><a href="tel:5555555555">555.555.5555</a></li>
			</ul>
			
		</nav><!-- desktop_nav -->
		
			
		</header>	
		
		
		
	<section class="new_slides">
		
		
		
		<div class="new_slides_inner_wrapper">
			
			<div class="new_slides_content">
			
			<span class="subheader">eiusmod tempor incididunt ut</span><!-- subheader -->
			<span class="largeheader">lorem ipsum DOLOR</span><!-- subheader -->
			
			<a class="see_demo" href="#demo">See Demo</a><!-- see_demo -->
			
			<div class="slider_buttons">
				
				
				
				<div class="residential_button top_button">
					
					<div class="arrow_down_wrapper">
				
						<div class="arrow_down"></div><!-- arrow_down -->
				
					</div><!-- arrow_down_wrapper -->
					
					<span>Residential</span>
					
				</div><!-- commercial_button -->
				
				<div class="divider"></div><!-- divider -->
				
				<div class="commercial_button top_button">
					
					<div class="arrow_down_wrapper">
				
						<div class="arrow_down"></div><!-- arrow_down -->
				
					</div><!-- arrow_down_wrapper -->
					
					<span>Commercial</span>
					
				</div><!-- residential_button -->
				
			</div><!-- slider_buttons -->
			
		</div><!-- new_slides_content -->
			
			<div class="new_slides_single new_slides_residential" style="background:url(<?php bloginfo('template_directory');?>/images/mobileimage.jpg) top center;">
				
				<video src="<?php bloginfo('template_directory');?>/videos/video.mp4" loop autoplay muted></video>
				
				<div class="new_slides_overlay"></div><!-- new_slides_overlay -->
				
				
			</div><!-- new_slides_single -->
			
			<div class="new_slides_single new_slides_commercial" style="background: url(<?php bloginfo('template_directory');?>/images/mobileimage.jpg) top center;">
				
				<video src="<?php bloginfo('template_directory');?>/videos/video.mp4" loop autoplay muted></video>
				
				<div class="new_slides_overlay"></div><!-- new_slides_overlay -->
				
				
			</div><!-- new_slides_single -->
			
		</div><!-- new_slides_inner_wrapper -->
		
		
	</section><!-- new_slides -->
	
		
			
		

	<section id="demo" class="threed_gallery wow fadeInUp" data-wow-delay="1s">
			

			
			<h1>3D Gallery</h1>
			
			<div class="threed_gallery_slideshow">
				
				
				<div class="gallery_slide">
				
					<iframe src="https://my.matterport.com/show/?m=PAPVAMnox7k" frameborder="0" allowfullscreen></iframe> 
				
				</div><!-- gallery_slide -->
				
				<div class="gallery_slide">
				
				<iframe src="https://my.matterport.com/show/?m=PAPVAMnox7k" frameborder="0" allowfullscreen></iframe>
				
				</div><!-- gallery_slide -->
				
				<div class="gallery_slide">
				
 					<iframe src="https://my.matterport.com/show/?m=PAPVAMnox7k" frameborder="0" allowfullscreen></iframe>
				
				</div><!-- gallery_slide -->
				
				<div class="gallery_slide">
				
					<iframe src="https://my.matterport.com/show/?m=PAPVAMnox7k" frameborder="0" allowfullscreen></iframe>
			
				</div><!-- gallery_slide -->
				
				<div class="gallery_slide">
				
					<iframe src="https://my.matterport.com/show/?m=PAPVAMnox7k" frameborder="0" allowfullscreen></iframe>
				
				</div><!-- gallery_slide -->
				
				<div class="gallery_slide">
					
					<iframe src="https://my.matterport.com/show/?m=PAPVAMnox7k" frameborder="0" allowfullscreen></iframe> 
				
				</div><!-- gallery_slide -->
				
				
				
				
				
			</div><!-- threed_gallery_slideshow -->
			
			
			
			<div class="gallery_tabs">
					
					<div class="single_gallery_tab">
						
						<div class="inner_gallery_tab">
							
						
						<div class="gallery_overlay">
							
							<span class="content">Title Goes Here</span><!-- content -->
						
						</div><!-- gallery_overlay -->
						
						
						<img src="<?php bloginfo('template_directory');?>/images/house.jpg"/>
						
						
						
						</div><!-- inner_gallery_tab -->
						
					</div><!-- single_gallery_tab -->
					
					<div class="single_gallery_tab">
						
						<div class="inner_gallery_tab">
							
							<div class="gallery_overlay">
							
							<span class="content">Title Goes Here</span><!-- content -->
						
						</div><!-- gallery_overlay -->
						
						<img src="<?php bloginfo('template_directory');?>/images/restuarant.jpg"/>
						
						</div><!-- inner_gallery_tab -->
						
					</div><!-- single_gallery_tab -->
					
					<div class="single_gallery_tab">
						
						<div class="inner_gallery_tab">
							
							<div class="gallery_overlay">
							
							<span class="content">Title Goes Here</span><!-- content -->
						
						</div><!-- gallery_overlay -->
						
						<img src="<?php bloginfo('template_directory');?>/images/brew.jpg"/>
						
						</div>
						
					</div><!-- single_gallery_tab -->
					
					<div class="single_gallery_tab">
						
						<div class="inner_gallery_tab">
							
							<div class="gallery_overlay">
							
							<span class="content">Title Goes Here</span><!-- content -->
						
						</div><!-- gallery_overlay -->
						
						<img src="<?php bloginfo('template_directory');?>/images/comm.jpg"/>
						
						</div>
						
					</div><!-- single_gallery_tab -->
					
					<div class="single_gallery_tab">
						
						<div class="inner_gallery_tab">
							
							<div class="gallery_overlay">
							
							<span class="content">Title Goes Here</span><!-- content -->
						
						</div><!-- gallery_overlay -->
						
						<img src="<?php bloginfo('template_directory');?>/images/comm2.jpg"/>
						
						</div>
						
					</div><!-- single_gallery_tab -->
					
					<div class="single_gallery_tab">
						
						<div class="inner_gallery_tab">
						
							<div class="gallery_overlay">
							
							<span class="content">Title Goes Here</span><!-- content -->
						
						</div><!-- gallery_overlay -->
						
							<img class="" src="<?php bloginfo('template_directory');?>/images/comm3.jpg"/>
						
						</div>
						
					</div><!-- single_gallery_tab -->
					
				</div><!-- gallery_tabs -->
			
			</section><!-- 3D Gallery -->
			
			<section class="more_info_content">
			
				<div class="threed_lower_content">
			
					<div class="left_col wow fadeInUp" data-wow-delay="1s">
				
						<h2>lorem ipsum dolor AMET CONSECTETUR</h2>
			
						<img class="cam" src="<?php bloginfo('template_directory');?>/images/cam.jpg"/>
				
					</div><!-- left_col -->
				
					<div class="right_col wow fadeInUp" data-wow-delay="1s">
			
						<h3>Lorem ipsum dolor sit amet, cons ec tetur adipi sicing</h3>
				
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in. </p>
				
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in. </p>
				
					</div><!-- right_col -->
			
				</div><!-- threed_lower_content -->
			
				<div class="threed_video_content">
			
				
					<div class="video_left_col wow fadeInUp" data-wow-delay="1s">
				
						<h3>Lorem ipsum dolor sit amet, con se&nbsp;ctetur</h3>
			
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
				
					</div><!-- left_col -->
				
					<div class="video_right_col wow fadeInUp" data-wow-delay="1s">
					
						<img class="video_image" src="<?php bloginfo('template_directory');?>/images/videoimage.png"/>
			
					</div><!-- right_col -->
			
				</div><!-- threed_video_content -->
			
			</section><!-- more_info_content -->
		
		<section id="industries" class="industries_section">
			
			
			
			<div class="industries_slide_wrapper residential_slider">
				
				
				
				<div class="single_industires_slide" style="background: rgba(0, 0, 0, 0) url(<?php bloginfo('template_directory');?>/images/mobileimage.jpg) no-repeat scroll center top / cover ;">
					
					
					<div class="inner_content">
						
						<h1 class="indus_title wow fadeInUp" data-wow-delay="1s">Residential<span>Name of project</span></h1>

					</div><!-- inner_content -->
					
										
					<video src="<?php bloginfo('template_directory');?>/videos/video.mp4" loop autoplay></video>
					
					<div class="slider_dark_overlay"></div><!-- slider_dark_overlay -->
					
				</div><!-- single_industires_slide -->

			
		
		</div><!-- industries_slide_wrapper -->
			
			
			
			
			<div class="industries_slide_wrapper commercial_slider">
				
				<div class="single_industires_slide">
					
					<div class="single_industires_slide" style="background: rgba(0, 0, 0, 0) url(<?php bloginfo('template_directory');?>/images/mobileimage.jpg) no-repeat scroll center top / cover ;">
					
					<div class="inner_content">
					
						<h1 class="indus_title">Commercial<span>Name of project</span></h1>
					
					</div>
					
					<video src="<?php bloginfo('template_directory');?>/videos/video.mp4" loop autoplay></video>
					
					<div class="slider_dark_overlay"></div><!-- slider_dark_overlay -->
					
				</div><!-- single_industires_slide -->
					
				</div><!-- single_industires_slide -->
				
			</div><!-- industries_slide_wrapper -->
			
			
			
			
			
			<div class="industry_controls">
				
				<span class="industry_residential">Residential</span><!-- industry_residential -->
				<span class="industry_commercial">Commercial</span><!-- industry_commercial -->
				
			</div><!-- industry_controls -->
			

	
	</section><!-- industries -->
		
		<section id="floorplan" class="floor_plan wow fadeInUp" data-wow-delay="1s">
			

			
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
				
				
				<div class="inner_contact_left">
				
				<div class="border_left_wrapper">
					
					<h1><a href="#contact">contact us</a></h1>
				
				</div><!-- border_left_wrapper-->
				
				<div class="sub_headers">
					
					<span class="contact_or">or</span>
					<a href="#contact" class="mybutton leaveareview">Leave a Review</a>
				
				</div><!-- sub_headers -->
				
				
				</div><!-- inner_contact_left -->
				
				
			</div><!-- contact_left -->
			
			
			
			<div id="contact" class="contact_right">
				
<!-- 				<a class="contact_tag" name="contact"></a> -->
				
				<div class="form_wrapper">
					
					<div class="inner_form">
					
					<?php gravity_form( 1, false, true, false, '', true );?>
					
					</div><!-- inner_form -->
					
				</div><!--form_wrapper -->
				
				<div class="leavereview_wrapper">
					
					<span>Leave a review</span>
					
					<span class="back">Back Button</span>
					
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
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/cycle2/build/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/modernizr.js"></script>
<script src="<?php bloginfo('template_directory');?>/wow/dist/wow.min.js"></script>




</body>
</html>

