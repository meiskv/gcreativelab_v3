<?php
/*
Template Name: GCREATIVELAB CONTACT
*/

get_header(); ?>
			
	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main id="main-container" class="main small-12 medium-12 large-12 cell" role="main">
			<div id="barba-wrapper">
					<div class="barba-container" data-namespace="contactpage">
				<!-- Swiper -->
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide menu">
						<?php glab_menu(); ?>

						<div class="home__address">
							<h5>Contact:</h5>
							<div class="three__column__address">
								<div>OFFICE 214, BUILDING 4, DUBAI MEDIA CITY, PO BOX 24554, DUBAI, UAE</div>
								<div><a href="mailto:info@grayling.com">info@grayling.com</a>+971 4 375 8950</div>
								<div>For job and Intern inquiries please write <a href="mailto:positions@grayling.com">positions@grayling.com</a></div>
							</div>
						</div>
						
						<ul id="social">
								<li><a href="https://www.facebook.com/GCreativeGlobal/">FACEBOOK</a></li>
								<li>.</li>
								<li><a href="https://www.instagram.com/gcreativelab/">INSTAGRAM</a></li>
								<li>.</li>
								<li><a href="https://www.linkedin.com/company/g-creative/">LINKEDIN</a></li>
							</ul>

						</div>
						<div class="swiper-slide content content-about">
						<div class="left-overlay"></div>
							<div class="menu-button">
								<img class="menu-icn" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-lines.svg" width="18" height="15" alt="">
							</div>
								<!--  -->

								<!-- Slider main container -->
						<div class="about-container">
							<!-- Additional required wrapper -->
							<div class="swiper-wrapper">
								<!-- Slides -->
								
							
								<div class="swiper-slide slide-about swiper-contact-slide">
									<div class="about-wrapper contact-page">
										<div class="left"> <!--  Left Starts -->
											<div class="content__holder contact__holder">
												<div class="content__header">Say <span class="hello-translate">Hello</span>.</div>
												<div class="content__subheader contact__subheader">LET’S CONNECT</div>
												<br/>
												<?php dynamic_sidebar('contactform'); ?>
											</div>
											<div class="address">©2019<i style="color: #D81C5C;">.</i> GCREATIVELAB<i style="color: #D81C5C;">.</i> LEGAL</div>
											<div class="content__hero movin__g">G</div>
										</div> <!--  Left Ends -->
										<div class="right">
											<div id="contact__map"></div>
											
										</div>
										
									</div>				
								</div>

								<!-- Inner Slide End -->
							</div>
						</div>


								<!--  -->
						</div>
					</div>
				</div>
				</div>
				</div>

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
