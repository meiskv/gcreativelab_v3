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
											  
											  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>

											  
											   <div class="swiper-slide full__mountain">
												<div id="scene">
														<!-- <div class="para-img" data-depth="1.1"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain/01.png" alt=""></div>
														<div class="para-img" data-depth="1"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain/02.png" alt=""></div> -->
														<div class="para-img mountain-bg" data-depth="0.5"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/03.png" alt=""></div>
														<div class="para-img" data-depth="0.45"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/05.png" alt=""></div>
														<div class="para-img" data-depth="0.40"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/06.png" alt=""></div>
														<div class="para-img" data-depth="0.35"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/07.png" alt=""></div>
														<div class="para-img" data-depth="0.30"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/08.png" alt=""></div>
														<div class="para-img" data-depth="0.25"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/09.png" alt=""></div>
														<div class="para-img" data-depth="0.20"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/10.png" alt=""></div>
														<div class="para-img para-top" data-depth="0"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/11.png" alt=""></div>
														<div class="para-img para-top" data-depth="0"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain_v2/text.png" alt=""></div>
														<div class="para-img para-left" data-depth="0">
															<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountain/12.png" alt=""> -->
															
														</div>
													</div>													
											   </div>

											   <!-- <div class="swiper-slide page__pagination">
													<div class="page__pagination">
														<a href="http://www.gcreativelab.com/about/" class="btn__top">
															<span>ABOUT US</span>
															<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_up.svg" height="62" width="62" alt="">
															<div class="bg__arrow">
																	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination-icn/arrow-03.svg" height="316" width="316" alt="">
															</div>
														</a>
														<a href="/" class="btn__btm">
																<span>WE ARE...</span>
															<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_down.svg" height="62" width="62" alt="">
															<div class="bg__arrow">
																	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination-icn/arrow-04.svg" height="316" width="316" alt="">
															</div>
														</a>
													</div>
											   </div> -->
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
