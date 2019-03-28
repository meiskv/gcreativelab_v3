<?php
/*
Template Name: GCREATIVELAB ABOUT V2
*/

get_header(); ?>
			
	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main id="main-container" class="main small-12 medium-12 large-12 cell" role="main">
			<div id="barba-wrapper">
					<div class="barba-container" data-namespace="aboutpage">
				<!-- Swiper -->
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide menu">
						<?php glab_menu(); ?>

						<div class="home__address">
							<h5>Contact:</h5>
							<div class="three__column__address">
								<div>OFFICE 214, BUILDING 4, DUBAI MEDIA CITY, PO BOX 24554, DUBAI, UAE</div>
								<div><a href="mailto:info@gcreativelab.com">info@gcreativelab.com</a>+971 4 375 8950</div>
								<div>For job and intern inquiries please drop an email to <a href="mailto:iwanttowork@gcreativelab.com">iwanttowork@gcreativelab.com</a></div>
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
								<div class="swiper-slide main-slide">
									<div class="about-wrapper">
										<div class="left"> <!--  Left Starts -->
											<div class="content__holder about__holder">
												<div class="content__header">We are</div>
												<div class="content__subheader">GCREATIVE</div>
												<div class="content__description">
													
													<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
													<?php the_content(); ?>
														
													<?php endwhile; endif; ?>	
												</div>
												<!-- <div class="content__btn">
													<a href="http://www.gcreativelab.com/services/">OUR SERVICES</a>
												</div> -->
												
											</div>
											<!-- <div class="address">©2018<i style="color: #D81C5C;">.</i> GCREATIVELAB<i style="color: #D81C5C;">.</i> LEGAL</div>
											<div class="explore about-explore">KNOW MORE ABOUT GRAYLING
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/explore_arrow.svg" width="10" height="9" alt="">
											  </div> -->
										<!-- <div class="content__hero movin__g">G</div> -->
										</div> <!--  Left Ends -->
										
									</div>
									<div class="scroll-indicator">
										<span class="indicatorText">Scroll</span>&nbsp;<span style="">to Navigate</span>&nbsp;<div id="indicator_loader" style="width: 34px; height: 34px;"></div>
									</div>
								</div>
								<div class="swiper-slide slide-about">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_v2/image_01.jpg" height="100%" width="100%" style="height: 100%; padding: 0; width: auto;" alt="">
								</div>

								<div class="swiper-slide about__slide__fifty__left_2">
									<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-reputation-icon.svg" height="95" width="95" alt=""> -->
									<div class="about__content__subheader">WE BUILD</div>
									<div class="about__content__subheader">BRANDS</div>
									<div class="about__content__description">
                                        We offer 360° solutions led by strategy and insight, driven by our passion for design and strengthened by our love of storytelling.</div>
								</div>

								<div class="swiper-slide about__whole_map">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_v2/image_02.jpg" height="100%" width="100%" style="height: 100%; padding: 0;" alt="">
                                </div>
                                
                                <div class="swiper-slide about__slide__fifty__left_2" style="padding-right: 0 !important;">
									<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-reputation-icon.svg" height="95" width="95" alt=""> -->
									<div class="about__content__subheader">OUR BRANDING</div>
									<div class="about__content__subheader">TOOLS</div>
									<div class="about__content__description">
                                    From advertising and creative design, well-grounded strategy and brand development, to digital to social media expertise, signature printing solutions, and corporate communications, our comprehensive range of services are tailored to address the evolving needs of our diverse clients.
                                </div>
                                </div>
                                
                                <div class="swiper-slide about__whole_map_v2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_v2/icons.svg" height="100%" width="80%" style="height: 100%; padding: 0;" alt="">
                                </div>
                                
                                <div class="swiper-slide about__slide__fifty__left_3" style="padding-right: 0 !important;">
									<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-reputation-icon.svg" height="95" width="95" alt=""> -->
									<div class="about__content__subheader">OUR GLOBAL</div>
									<div class="about__content__subheader">PRESENCE</div>
									<div class="about__content__description">
                                    We are a part of Grayling, an integrated communications consultancy offering PR, digital and creative services with more than 30 years of regional experience and a flexible global network that transcends borders and disciplines.
                                    <br><br>
                                    A wholly owned subsidiary of Huntsworth PLC, a public relations focused group listed on the London Stock Exchange, Grayling provides truly integrated services combined with worldwide reach.  This is matched with local expertise and knowledge supported by diverse sector experience.
                                                                        </div>
                                </div>
                                
                                <div class="swiper-slide about__whole_map_v3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_v2/presence.svg" height="70%" width="80%" style="height: 100%; padding: 0;" alt="">
                                </div>

								<div class="swiper-slide page__pagination">
										<div class="page__pagination">
											<a href="http://www.gcreativelab.com/" class="btn__top btn__pagination__services top__text" style="background: #2f8683;">
												
												<span style="color:#fff;">HOME</span>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_up_white.svg" height="62" width="62" alt="">
												<div class="bg__arrow">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/page_pagination/home.svg" height="316" width="316" alt="">
												</div>
											</a>
											<a href="http://www.gcreativelab.com/services/" class="btn__btm btn__pagination__work" style="background: #2f8683;">
													
													<span style="color:#fff;">SERVICES</span>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_up_down.svg" height="62" width="62" alt="">
												<div class="bg__arrow">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/page_pagination/services.svg" height="316" width="316" alt="">
												</div>
											</a>
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
