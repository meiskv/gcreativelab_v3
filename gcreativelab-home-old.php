<?php
/*
Template Name: GCREATIVELAB HOME OLD
*/

get_header(); ?>
			
	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main id="main-container" class="main small-12 medium-12 large-12 cell" role="main">
			<div id="barba-wrapper">
					<div class="barba-container" data-namespace="homepage">
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
						<div class="left-overlay"></div>
							<div class="menu-button">
								<img class="menu-icn" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-lines.svg" width="18" height="15" alt="">
							</div>
								<!--  -->
								<div class="home-slide-container">
										<div class="swiper-wrapper">
											<div class="swiper-slide main-slide" id="main-slide">
												
												<!--  -->
									<div class="wrapper home">
                                    <div class="left"> <!--  Left Starts -->
                                        <div class="content__holder home__holder">
                                            <div class="home__content__header_home">We are</div>
											<div class="home__content__header"><i class="header_animation">BOLD</i></div>
											<div class="content__description">
                                                
												<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

												<?php the_content(); ?>
													
												<?php endwhile; endif; ?>	
                                            </div>
                                            
                                            
                                        </div>
										<!-- <div class="address">©2018<i style="color: #D81C5C;">.</i> GCREATIVELAB<i style="color: #D81C5C;">.</i> LEGAL</div>
										<div class="explore">DISCOVER THE STUDIO
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/explore_arrow.svg" width="10" height="9" alt="">
										  </div> -->
                                        <div class="content__hero movin__g">G</div>
                                    </div> <!--  Left Ends -->
                                </div>
								<!--  -->

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

												<!-- Main Slide Content -->
												
											</div>

											<?php       
                                            $paged          = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                                            $posts_per_page = 5;
                                            $args = array(
                                                'post_type'         => 'case-study',
                                                'posts_per_page'    => $posts_per_page,
                                                'paged'             => $paged,
                                                'order'             => 'ASC',
                                            );
                                            $custom_query = new WP_Query( $args ); 
                                            $number = 0;
                                            ?>

                                            <?php if ( $custom_query->have_posts() ) : ?>
                                            <?php while ( $custom_query->have_posts() ): $custom_query->the_post(); global $post; $post_meta = get_post_meta($post->ID); ?>
                                            <?php
                                                $image = get_field('client_logo');
                                                $size = 'large';
                                                $number++;
                                        $width = $image['sizes'][ $size . '-width' ];
                                        $height = $image['sizes'][ $size . '-height' ];
                                            ?>
										

												
											<div class="swiper-slide swiper-cases">
													<div class="case__home__holder">
														<div class="case__home__img">
															<img src="<?php echo get_field('home_slide_cover')['url']; ?>" alt="">
															<!-- <img src="http://localhost:8888/DEV/gcreative/uploads/2018/06/cover.jpg" alt=""> -->
														</div>
														
														<div class="case__home__meta">
																
																<div class="case__home__title"><h1><?php echo the_title(); ?></h1></div>
																<div class="case__home__date">
																	<h4><?php echo get_field('subtitle'); ?></h4>
																</div>
														</div>
														<div class="case__home__category">
															<!-- <h4>CASE STUDY</h4> -->
															<p><?php echo the_field('description_excerpt'); ?></p>
														</div>
														<div class="case__home__btn">
															<a href="<?php echo get_permalink(); ?>">READ MORE</a>
														</div>
													<!-- <div class="case__home__number">.0<?php echo $number; ?></div> -->
													</div>
												</div>
												<?php endwhile; ?>
											<?php endif; ?>
											
												
											</div>
										</div>
										<!-- Add Pagination -->
										<!-- <div class="swiper-pagination"></div> -->
										<!-- <span class="home__backBtn">SURPRISE PRESS ME</span> -->
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
