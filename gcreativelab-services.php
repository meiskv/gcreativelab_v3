<?php
/*
Template Name: GCREATIVELAB SERVICES
*/

get_header(); ?>
			
	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main id="main-container" class="main small-12 medium-12 large-12 cell" role="main">
			<div id="barba-wrapper">
			<div class="barba-container" data-namespace="srvcpage">
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
						<div class="swiper-slide content">
						
							<div class="menu-button">
							<img class="menu-icn" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-lines.svg" width="18" height="15" alt="">
							</div>
								<!--  -->
									<div class="services__container">
											<div class="swiper-wrapper">
											  <div class="swiper-slide main__slide">
													<div class="wrapper services">
															<div class="left"> <!--  Left Starts -->
																<div class="services__holder_content">
																	<div class="content__header">We are</div>
																	<div class="content__subheader">VERSATILE</div>
																	<div class="content__description">
																		
																		<div class="content__description">
																		
																		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
																		<?php the_content(); ?>
																			
																		<?php endwhile; endif; ?>	
																	</div>
																	</div>
																	<!-- <div class="content__btn">
																		<a href="http://www.gcreativelab.com/case/">OUR WORK</a>
																	</div> -->
																	
																</div>
																<!-- <div class="address">©2018<i style="color: #D81C5C;">.</i> GCREATIVELAB<i style="color: #D81C5C;">.</i> LEGAL</div> -->
																<div class="content__hero movin__g">G</div>
																
															</div> <!--  Left Ends -->
															</div>
															<div class="scroll-indicator">
																<span class="indicatorText">Scroll</span>&nbsp;to Navigate&nbsp;<div id="indicator_loader" style="width: 34px; height: 34px;"></div>
															</div>
											  </div>
											  <div class="swiper-slide swiper__slide__services">
													<div class="services__holder">
														<div class="center-srvc">
																<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-icn/strategy.svg" height="80" width="80" alt=""> -->
																<div id="strat-icon" style="max-width: 100px; max-height: 100px;"></div>
																<h4>Strategy</h4>
																<p>An effective brand strategy is built on an compelling insight and is often a result of extensive research. Serving as a blueprint for all brand communication and marketing, it clearly defines a brand’s positioning, its target audience and its behaviours.</p>
														</div>
													</div>
											  </div>
											  <div class="swiper-slide swiper__slide__services">
													<div class="services__holder">
														<div class="center-srvc">
																<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-icn/design.svg" height="125" width="125" alt=""> -->
																<div id="design-icon" style="max-width: 100px; max-height: 100px;"></div>
																<h4>Design</h4>
																<p>A strong creative design serves as a brand’s personality and helps it stand out from its competition. Embodying a robust and compelling strategy, an effective brand architecture follows a consistent visual identity, unifying every touch point from packaging to marketing assets.</p>
														</div>
													</div>
											  </div>

											  <div class="swiper-slide swiper__slide__services">
													<div class="services__holder">
															<div class="center-srvc">
													<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-icn/production.svg" height="125" width="125" alt=""> -->
													<div id="prod-icon" style="max-width: 100px; max-height: 100px;"></div>
													<h4>Production</h4>
													<p>Print and production is far more than simply ink on paper. Our expertise in printing processes and production techniques enable us to listen, advise and suggest options which complement the brand and its core values thus delivering premium results.</p>
												   </div>
												   </div>
												   
											  </div>

											  <div class="swiper-slide swiper__slide__services">
													<div class="services__holder">
															<div class="center-srvc">
													<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-icn/communications.svg" height="125" width="125" alt=""> -->
													<div id="comm-icon" style="max-width: 100px; max-height: 100px;"></div>
													<h4>Communications</h4>
													<p>We are a part of the one of the region’s leading public relations consultancy firms. This allows us to provide you with all the tools and expertise you need to build your reputation through inventive, integrated communications solutions. Solutions that are rapidly scalable to deliver against organisational needs in a fast-changing landscape.</p>
												   </div>
												   </div>
											  </div>

											  <div class="swiper-slide swiper__slide__services">
													<div class="services__holder services_border_1">
															<div class="center-srvc">
													<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-icn/social-media.svg" height="70" width="70" alt=""> -->
													<div id="social-media-icon" style="max-width: 100px; max-height: 100px;"></div>
													<h4>Social Media</h4>
													<p>Social media has turned into a necessity in the new digital age. Today, it’s all about conversations, community, connecting with the audience and building relationships with the brand. It’s no longer just a broadcast channel or a sales and marketing tool. It’s a platform that allows us to hear what people say and respond accordingly. With that in mind, we develop strategies, websites and supporting digital assets. We also launch media buying campaigns, optimise design for mobile and online platforms, and create content that engages people and lets them interact with your brand.</p>
												   </div>
												   </div>
											  </div>
											  
											  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script> -->
											  

											  
											   <div class="swiper-slide full__mountain">
												<div id="scene">
														<div class="para-img mountain-bg para-1" data-depth="0.35"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/03.png" alt=""></div>
														<div class="para-img para-2" data-depth="0.45"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/05.png" alt=""></div>
														<div class="para-img para-3" data-depth="0.40"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/06.png" alt=""></div>
														<div class="para-img para-4" data-depth="0.35"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/07.png" alt=""></div>
														<div class="para-img para-5" data-depth="0.30"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/08.png" alt=""></div>
														<div class="para-img para-6" data-depth="0.25"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/09.png" alt=""></div>
														<div class="para-img para-7" data-depth="0.20"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/10.png" alt=""></div>
														<div class="para-img para-8 para-top" data-depth="0"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/11.png" alt=""></div>
														<div class="para-img para-9 para-top" data-depth="0"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/text.png" alt=""></div>
													</div>													
											   </div>

											   <div class="swiper-slide page__pagination">
													<div class="page__pagination">
														<a href="http://www.gcreativelab.com/about/" class="btn__top" style="background: #221609;">
															<span>ABOUT US</span>
															<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_up_white.svg" height="62" width="62" alt="">
															<div class="bg__arrow">
																	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination-icn/arrow-03.svg" height="316" width="316" alt="">
															</div>
														</a>
														<a href="/" class="btn__btm" style="background: #221609;">
																<span>OUR WORK...</span>
															<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_up_down.svg" height="62" width="62" alt="">
															<div class="bg__arrow">
																	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination-icn/arrow-04.svg" height="316" width="316" alt="">
															</div>
														</a>
													</div>
											   </div>
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
