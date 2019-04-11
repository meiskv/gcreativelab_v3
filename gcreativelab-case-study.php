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
                                                    <span class="indicatorText">Scroll</span>&nbsp;to Navigate&nbsp;<div id="indicator_loader" style="width: 34px; height: 34px;"></div>
                                                </div>
                                            </div>
                                            
                                            <?php
                                            
                                            $paged          = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                                            $posts_per_page = 11;
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

                                            <div class="swiper-slide page__pagination">
                                                    <div class="page__pagination">
                                                        <a href="http://www.gcreativelab.com/services/" class="btn__top top__text">
                                                            <span style="color: #0F294B;">SERVICES</span>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_up.svg" height="62" width="62" alt="">
                                                            <div class="bg__arrow">
                                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page_pagination/services_up.svg" height="316" width="316" alt="">
                                                            </div>
                                                        </a>
                                                        <a href="http://www.gcreativelab.com/about/" class="btn__btm">
                                                                <span style="color: #0F294B;">ABOUT</span>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_up.svg" height="62" width="62" alt="">
                                                            <div class="bg__arrow">
                                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page_pagination/about_btm.svg" height="316" width="316" alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                               </div>
                                                
											
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
