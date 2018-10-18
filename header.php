<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" sizes="256x256" type="image/png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css">
		<!-- Add the slick-theme.css if you want default styling -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
		<!-- Add the slick-theme.css if you want default styling -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
		<link href='https://api.mapbox.com/mapbox-gl-js/v0.46.0/mapbox-gl.css' rel='stylesheet' />
		<link rel="stylesheet" href="https://use.typekit.net/lwf3cqg.css">
		<script type="text/javascript">
		
		  if (navigator.userAgent.match(/Android/i) ||
			  navigator.userAgent.match(/webOS/i) ||
			  navigator.userAgent.match(/iPhone/i) ||
			  navigator.userAgent.match(/iPad/i) ||
			  navigator.userAgent.match(/iPod/i) ||
			  navigator.userAgent.match(/BlackBerry/i) ||
			  navigator.userAgent.match(/Windows Phone/i)
			) {
				console.log('a');
				self.location = "http://m.gcreativelab.com/";
			} else {
		  }
		
		</script>
		
		<script src='https://api.mapbox.com/mapbox-gl-js/v0.46.0/mapbox-gl.js'></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/barba.js/1.0.0/barba.min.js"></script>
		
		<meta name="google-site-verification" content="lYXIOiYe0u1r-Qs--jY_syt1cTUt9FOk4n1HE3JljUA" />
		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>
	<p style="position: absolute; opacity: 0;">GCreative is a Dubai-based branding, creative advertising and communications agency offering 360° solutions led by strategy, insight, and a love for storytelling.
</p>

		<div class="off-canvas-wrapper">
			
			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				<header class="header" role="banner">
					<div class="transition">
						<svg width="100%" height="100%">
							<rect class="white" width="100%" height="100vh" style="fill:rgb(255,255,255);" />
							<rect class="gray" width="100%" height="100vh" style="fill:rgb(248,248,248);" />
						</svg>
					</div>
					 <!-- This navs will be applied to the topbar, above all content 
						  To see additional nav styles, visit the /parts directory -->

					 <!-- START HERE -->
					<a href="<?php echo site_url();?>/">
					 	<!-- <img class="glogo" src="<?php echo get_template_directory_uri(); ?>/assets/images/gcreative_logo.svg" width="80" height="93" alt=""> -->
						 <div id="logo__holder">
						 	
						 </div>
						 
					 </a>


					 <!-- ENDS HERE -->
					
					 
	 	
				</header> <!-- end .header -->