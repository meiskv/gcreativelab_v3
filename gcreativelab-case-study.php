<?php
/*
Template Name: GCREATIVELAB CASE STUDY
*/

get_header(); ?>
			
	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main id="main-container" class="main small-12 medium-12 large-12 cell" role="main">
            <div id="barba-wrapper">
                <div class="barba-container" data-namespace="casepage">
				<!-- Swiper -->
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide menu work-menu">
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
                                

                                <div class="case-study-slide-container">
										<div class="swiper-wrapper">
											<div class="swiper-slide main-slide">
                                                    <div class="wrapper case-study">
                                                            <div class="left"> <!--  Left Starts -->
                                                                <div class="case__study__holder">
                                                                    <div class="content__header">We are</div>
                                                                    <div class="content__subheader">OUR WORK</div>
                                                                    <div class="content__description">
                                                            
                                                                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                                                        <?php the_content(); ?>
                                                                            
                                                                        <?php endwhile; endif; ?>
                                                                    </div>
                                                                    <!-- <div class="content__btn">
                                                                        <a href="http://www.gcreativelab.com/contact/">CONTACT US</a>
                                                                    </div> -->
                                                                    
                                                                </div>
                                                                <!-- <div class="address">©2018<i style="color: #D81C5C;">.</i> GCREATIVELAB<i style="color: #D81C5C;">.</i> LEGAL</div>
                                                                <div class="explore">WHO WE'VE WORK FOR
                                                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/explore_arrow.svg" width="10" height="9" alt="">
                                                                </div> -->
                                                                <div class="content__hero movin__g">G</div>
                                                            </div> <!--  Left Ends -->
                                                            </div>
												<!-- Main Slide Content -->
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
                                            
                                            <?php
                                            
                                            $paged          = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                                            $posts_per_page = 10;
                                            $args = array(
                                                'post_type'         => 'case-study',
                                                'posts_per_page'    => $posts_per_page,
                                                'paged'             => $paged,
                                                'order'             => 'ASC',
                                            );
                                            $custom_query_case = new WP_Query( $args ); 
                                            $number = 0;
                                            ?>

                                            <?php if ( $custom_query_case->have_posts() ) : ?>
                                            <?php while ( $custom_query_case->have_posts() ): $custom_query_case->the_post(); global $post; $post_meta = get_post_meta($post->ID); ?>
                                            <?php
                                                $image = get_field('client_logo');
                                                $size = 'large';
                                                $number++;
                                        $width = $image['sizes'][ $size . '-width' ];
                                        $height = $image['sizes'][ $size . '-height' ];
                                            ?>

											<div class="swiper-slide case-slide">
                                                
                                                <div class="case__holder">
                                                        <!-- CASE STARTS ENDS -->
                                                        
                                                        <!-- CASE LEFT ENDS -->

                                                        <!-- /////////////// -->

                                                        <!-- CASE STARTS ENDS -->
                                                        <div class="case__right" style="background: url(<?php echo get_field('work_cover')['url']; ?>) no-repeat center center;
                                                                background-size: cover;
                                                                -webkit-background-size: cover;
                                                                -moz-background-size: cover; 
                                                                -o-background-size: cover;">
                                                            <!-- <img src="<?php echo get_field('home_slide_cover')['url']; ?>" alt=""> -->
                                                        </div>
                                                        <div class="case__left">
                                                                
                                                            <div class="case__title">
                                                                <h1><?php echo the_title(); ?></h1>
                                                            </div>
                                                            <div class="case__deliverables">
                                                                <h4><?php the_field('short_deliverables');?></h4>
                                                            </div>
                                                            <div class="case__description">
                                                            <p><?php the_field('description_excerpt'); ?></p>
                                                            </div>
                                                            <div class="case__button">
                                                                <a href="<?php echo get_permalink(); ?>">HOW WE DID IT</a>
                                                            </div>

                                                        </div>
                                                        <!-- CASE LEFT ENDS -->
                                                </div>
                                            </div>


                                            <?php endwhile; ?>
                                            <?php endif; ?>



                                           
                                                
											
										</div>
										<!-- Add Pagination -->
										<!-- <div class="swiper-pagination"></div> -->
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
