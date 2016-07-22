<?php
/**
 * Template Name: Gallery
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
<meta charset="utf-8">
<title><?php the_field('page_title'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/inc/gallery/css/slick.css"/>

<!-- initialize jQuery Library --> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="<?php bloginfo('template_url') ?>/inc/gallery/js/slick.js" type="text/javascript" charset="utf-8"></script>


<style type="text/css">
	
/* This is just a reset - do not copy */
*, *:before, *:after {-moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;}	
.clearfix:after{content:".";display:block;height:0;clear:both;visibility:hidden}
body {margin:0; padding:0; border:0;}
img  {border:0; }
a 	 {text-decoration: none;outline:none;}
div  {margin:0; padding:0; border:0; vertical-align: baseline;}

/* Gallery Spcific CSS - copy this into your theme if you want. Just simple stuff */
.wrapper {
  margin: 0 auto;
  max-width: 915px;
}
.video_gallery_nav {position: relative}
.slick-slide img {
  display: block;
  height: auto;
  width: 100%;
}
.slick-prev {
	top: 0;
	left: -86px;
	position: absolute;
}
.slick-next {
	top: 0;
	right: -65px;
	position: absolute;
}
</style>
</head>
<body>
	
<div class="wrapper">
	
<!-- Copy everything inside the .wrapper -->
	
<!-- 	BEGIN Gallery -->
	<div class="video_gallery">
		<div class="inner">
			<iframe width="100%" height="480" src="https://my.matterport.com/show/?m=PAPVAMnox7k" frameborder="0" allowfullscreen></iframe>
		</div>
	</div><!-- .video_gallery -->
	
	<div class="video_gallery_nav">

		<?php if(get_field('c3dtourgallery')): ?>
			<?php while(the_repeater_field('c3dtourgallery')): ?>
			<div>
				<?php $image_main_slider = wp_get_attachment_image_src(get_sub_field('c3dtourgallery_image'), 'medium');?>
				<a class="ajax-link" href="<?php the_sub_field('c3dtourgaller_video'); ?>"><img  src="<?php echo $image_main_slider[0]; ?>" /></a>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>

  </div><!-- .video_gallery_nav -->
<!-- END gallery -->


  <script type="text/javascript">
    $(document).on('ready', function() {
			$('.video_gallery').slick({
			 	slidesToShow: 1,
			 	slidesToScroll: 1,
			 	arrows: false,
			 	fade: true,
			 	asNavFor: '.video_gallery_nav'
			});
			$('.video_gallery_nav').slick({
			 	slidesToShow: 3,
			 	slidesToScroll: 1,
			 	asNavFor: '.video_gallery',
			 	dots: true,
			 	centerMode: false,
			 	focusOnSelect: true,
			 	dots: false
			});
			
    });
    
    //ajax function
    $('body').on('click','.ajax-link',function(){
	    var post_link = $(this).attr("href");
	 	    $(".video_gallery .inner").html("content loading");
	 	    $(".video_gallery .inner").load(post_link, function(){
		 	    $(".video_gallery").fadeIn();
	 	    });
	 	    
	 	    	  	
			return false;
	 	});
  </script>

</div>	
</body>
</html>
