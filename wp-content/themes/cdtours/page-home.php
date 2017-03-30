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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=3" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick/slick-theme.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/wow/css/libs/animate.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory');?>/fonts/stylesheet.css" />
<?php wp_head();?>

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
					<li><a href="tel:<?php the_field('phone_number');?>"><?php the_field('phone_number');?></a></li>
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
				<li><a href="tel:<?php the_field('phone_number');?>"><?php the_field('phone_number');?></a></li>
			</ul>
			
		</nav><!-- desktop_nav -->
		
			
		</header>	
		
		
		
	<section class="new_slides">
		
		
		
		<div class="new_slides_inner_wrapper">
			
			<div class="new_slides_content">
			
			
			<span class="subheader"><?php the_field('main_banner_intro_sub_header');?></span><!-- subheader -->
			<span class="largeheader"><?php the_field('main_banner_intro_large_header');?>R</span><!-- subheader -->
			
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
			

			
			<span class="large_header">3D Gallery</span><!-- large_header -->
			
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
				
						<h1><?php the_field('main_content_intro_header');?></h1>
			
						<img class="cam" src="<?php the_field('main_content_first_image');?>"/>
				
					</div><!-- left_col -->
				
					<div class="right_col wow fadeInUp" data-wow-delay="1s">
			
			
						<h2><?php the_field('main_content_sub_header');?></h2>
				
						<?php the_field('main_content');?>
				
					</div><!-- right_col -->
			
				</div><!-- threed_lower_content -->
			
				<div class="threed_video_content">
			
				
					<div class="video_left_col wow fadeInUp" data-wow-delay="1s">
				
						<h2><?php the_field('secondary_content_sub_header');?></h2>
			
						<?php the_field('secondary_content');?>
				
					</div><!-- left_col -->
				
					<div class="video_right_col wow fadeInUp" data-wow-delay="1s">
					
						<img class="video_image" src="<?php the_field('secondary_content_image');?>"/>
			
					</div><!-- right_col -->
			
				</div><!-- threed_video_content -->
			
			</section><!-- more_info_content -->
		
		<section id="industries" class="industries_section">
			
			
			<?php if(get_field('residential_slider')): ?>
			
				<div class="industries_slide_wrapper residential_slider">
			 
				<?php while(has_sub_field('residential_slider')): ?>
			 


							<div class="single_industires_slide">
					
					
								<div class="inner_content">
						
									<span class="indus_title wow fadeInUp" data-wow-delay="1s">Residential<span><?php the_sub_field('project_name');?></span></span>

								</div><!-- inner_content -->
					
					
								<img class="industries_slide" data-lazy="<?php the_sub_field('project_image');?>"/>				
					
					
							<div class="slider_dark_overlay"></div><!-- slider_dark_overlay -->
					
						
						</div><!-- single_industires_slide -->
			    
				<?php endwhile; ?>
				
				</div><!-- industries_slide_wrapper -->
			 
			<?php endif; ?>
			
			
			
			
			
			
			
			<?php if(get_field('commercial_slider')): ?>
			
				<div class="industries_slide_wrapper commercial_slider">
			 
				<?php while(has_sub_field('commercial_slider')): ?>
			 


							<div class="single_industires_slide">
					
					
								<div class="inner_content">
						
									<span class="indus_title wow fadeInUp" data-wow-delay="1s">Commercial<span><?php the_sub_field('project_name');?></span></span>

								</div><!-- inner_content -->
					
					
								<img class="industries_slide" data-lazy="<?php the_sub_field('project_image');?>"/>				
					
					
							<div class="slider_dark_overlay"></div><!-- slider_dark_overlay -->
					
						
						</div><!-- single_industires_slide -->
			    
				<?php endwhile; ?>
				
				</div><!-- industries_slide_wrapper -->
			 
			<?php endif; ?>
			
			
			
			
			
			
			
						
			
			
			
			
			
			
			
			
			
			<div class="industry_controls">
				
				<span class="industry_residential">Residential</span><!-- industry_residential -->
				<span class="industry_commercial">Commercial</span><!-- industry_commercial -->
				
			</div><!-- industry_controls -->
			

	
	</section><!-- industries -->
		
		<section id="floorplan" class="floor_plan">
			

			<div class="floor_plan_wrapper">
				
				<span class="large_header">AS-BUILTS GALLERY</span><!-- large_header -->
				
				
					
					
					<?php if(get_field('as_builds_gallery')): ?>
					
						<div class="floor_plan_slider">
					 
						<?php while(has_sub_field('as_builds_gallery')): ?>
					 
							<div class="floor_plan_single_slider">
				
								<div class="floorplan_content">
							
							
									<p><strong><?php the_sub_field('title');?></strong></p>
									
									
									<?php the_sub_field('content');?>
						
							
									<div class="pdf_wrapper">
									
										<a href="<?php the_sub_field('pdf_download');?>" target="_blank">
		 							
											<img src="<?php bloginfo('template_directory');?>/images/pdf.jpg"/>
		 							
											<span class="pdf_divider"></span><!-- pdf_divider -->
											<span class="pdf_name"><?php the_sub_field('pdf_title');?></span><!-- pdf_name -->
											<span class="download">download</span><!-- download -->
		 							
	 									</a>
 							
 							</div><!-- pdf_wrapper -->
						
						</div><!-- floorplan_content -->
					
					</div><!-- floor_plan_single_slider -->
					    
						<?php endwhile; ?>
						
						</div><!-- floor_plan_slider -->
					 
					<?php endif; ?>

				
				<div class="floor_button_wrapper">
				
					<div class="floor_button_left floor_button">Prev</div><!-- floor_buttons -->
				
					<div class="floor_button_right floor_button">Next</div><!-- floor_buttons -->
				
				</div><!-- floor_button_wrapper -->
				
				<div style="clear:both"></div>
				
			</div><!-- floor_plan_wrapper -->
			
			
			
			
			
			
			
			
			
		</section><!-- floor_plan -->
		
		<section class="contact_us">
			
			
			
			<div class="contact_left">
				
				
				<div class="inner_contact_left">
				
				<div class="border_left_wrapper">
					
					<span><a href="#contact">contact us</a></span>
				
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
			
			<span><?php the_field('copyright_verbiage');?></span>
			
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

