<?php
/*
Template Name: GCREATIVELAB ABOUT
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
												<div class="content__subheader">CONNECTED</div>
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
										<div class="content__hero movin__g">G</div>
										</div> <!--  Left Ends -->
										
									</div>
									<div class="scroll-indicator">
										<span class="indicatorText">Scroll</span>&nbsp;to Navigate <svg class="circle" xmlns="http://www.w3.org/2000/svg" width="34.315" height="31.929" viewBox="0 0 34.315 31.929">
											<g id="Group_11307" data-name="Group 11307" transform="translate(1623.014 258)">
											  <path id="circlePath" data-name="Path 10680" d="M15.976.5A15.62,15.62,0,0,1,30.5,10.631,15.481,15.481,0,0,1,8.014,29.25,15.627,15.627,0,0,1,.794,12.957,15.623,15.623,0,0,1,15.976.5Z" transform="translate(-1623.006 -258)" fill="none" stroke="#0f294b" stroke-width="1"/>
											  <circle id="whitebg" cx="15.063" cy="15.063" r="15.063" transform="translate(-1622.094 -257.046)" fill="#fff"/>
											  <g id="smallcircle" class="circleSmall" transform="translate(-1623.006 -258)">
												<circle id="Ellipse_3" data-name="Ellipse 3" cx="2.5" cy="2.5" r="2.5" transform="translate(29.307 13.954)" fill="#d81c5c"/>
												<circle id="Ellipse_4" data-name="Ellipse 4" cx="2" cy="2" r="2" transform="translate(29.807 14.454)" fill="none" stroke="#fff" stroke-width="1"/>
											  </g>
											  <g id="Group_11306" data-name="Group 11306" transform="translate(-1623.006 -258)">
												<path id="Play" d="M19.91,13.731l2.761,1.631,1.9,1.123-4.663,2.549Z" fill="#d81c5c"/>
												<line id="Line_10" data-name="Line 10" x1="12" transform="translate(8.807 16.454)" fill="none" stroke="#d81c5c" stroke-width="1"/>
											  </g>
											</g>
										  </svg>
										  
										  
										  
										</div>
								</div>
								<div class="swiper-slide slide-about">

										<?php get_template_part( 'parts/svg', 'exactmap' ); ?>								
								</div>

								<div class="swiper-slide about__slide__fifty__left_1">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-reputation-icon.svg" height="95" width="95" alt="">
									<div class="home__content__header_home">We build</div>
									<div class="about__content__subheader">BRANDS</div>
									<div class="about__content__description">
											We are a part of Grayling, a wholly owned subsidiary of Huntsworth PLC – a public relations focused group listed on the London Stock Exchange. We provide truly integrated strategic services combined with worldwide reach. We match this with local expertise and knowledge supported by diverse sector experience.	
									</div>
								</div>

								<div class="swiper-slide about__whole_map">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-map.svg" style="height:95%;" width="100%" alt="">
								</div>
								<!-- <div class="swiper-slide about__slide__fifty__left">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-connected-icon.svg" height="95" width="95" alt="">
										<div class="home__content__header_home">We are</div>
										<div class="about__content__subheader">CONNECTED</div>
										<div class="about__content__description">
												We are a part of Grayling Public Relations, a wholly owned subsidiary of Huntsworth PLC – a public relations focused group listed on the London Stock Exchange. This allows us to provide truly integrated strategic services, and worldwide reach with local expertise and knowledge, combined with unrivalled and diverse sector experience.	
										</div>
								</div> -->
								<!-- <div class="swiper-slide about__slide__fifty about__huntsworth">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-huntsworth.svg" style="height:100%;" width="100%" alt="">
								</div> -->
								
								

								<!-- <div class="swiper-slide page__pagination">
										<div class="page__pagination">
											<a href="http://www.gcreativelab.com/services/" class="btn__top btn__pagination__services">
												
												<span>OUR SERVICES</span>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_up.svg" height="62" width="62" alt="">
												<div class="bg__arrow">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination-icn/arrow-01.svg" height="316" width="316" alt="">
												</div>
											</a>
											<a href="http://www.gcreativelab.com/case/" class="btn__btm btn__pagination__work">
													
													<span>OUR WORK</span>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_down.svg" height="62" width="62" alt="">
												<div class="bg__arrow">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination-icn/arrow-02.svg" height="316" width="316" alt="">
												</div>
											</a>
										</div>
								</div> -->

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
