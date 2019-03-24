<?php
/**
 * Template part for displaying a single post
 */
?>

<?php
$args = array(
	'post_type' => 'case-study',
);

$query = new WP_Query( $args );
$getBackgroundImage = get_field('first_slide_background_image');
$caseBg = " url(".$getBackgroundImage['url'].") no-repeat fixed center;"."background-size: cover;";
$image = get_field('client_logo');
$size = 'large';
$width = $image['sizes'][ $size . '-width' ];
$height = $image['sizes'][ $size . '-height' ];
$client_img = get_field('client_feature_image');
$client_img01 = get_field('01_image');
$client_img02 = get_field('02_image');

$prev_post = get_previous_post();
$next_post = get_next_post();

$argsLastPost = array(
    'post_type' => 'case-study',
    'posts_per_page' => 1,
    'order'     => 'ASC',
    
);

$argsFirstPost = array(
    'post_type' => 'case-study',
    'posts_per_page' => 1,
    'order'     => 'DESC',    
);

$queryLast = new WP_Query( $argsLastPost );
$queryFirst = new WP_Query( $argsFirstPost );




?>

<div id="barba-wrapper">
        <div class="barba-container" data-namespace="caseinnerpage">
<!-- Swiper -->
<div class="case-container">
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
    <div class="swiper-slide content">
        <div class="menu-button">
            <img class="menu-icn" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-lines.svg" width="18" height="15" alt="">
        </div>
            <!--  -->
            

            <div class="case-inner-slide-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide main-slide">
                               
                            <div class="case__inner__holder">

                                <div class="case__inner__logo">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"  style="max-width: 250px; max-height: 150px;"/>
                                </div>
                                <div class="case__inner_title">
                                    <h1></h1>
                                </div>
                                <div class="case__inner__description">
                                    <?php the_field('client_short_description'); ?>
                                </div>
                                <div class="case__deliverables">
                                        <?php
                                        // vars	
                                        $deliverables = get_field('project_deliverables');
                                        // check
                                        if( $deliverables ): ?>
                                            <?php foreach( $deliverables as $deliverable ): ?>
                                                <?php if($deliverable == 'strategy') :  ?>
                                                    <div>
                                                        <img class="dev-ico" src="<?php echo get_template_directory_uri(); ?>/assets/images/case-icn/strategy.svg" width="45" alt="">
                                                        <!-- <h1 class="dev-icn-title"><?php echo $deliverable; ?></h1> -->
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($deliverable == 'design') :  ?>
                                                    <div>
                                                        <img class="dev-ico" src="<?php echo get_template_directory_uri(); ?>/assets/images/case-icn/design.svg" width="45" alt="">
                                                        <!-- <h1 class="dev-icn-title"><?php echo $deliverable; ?></h1> -->
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($deliverable == 'production') :  ?>
                                                    <div>
                                                        <img class="dev-ico" src="<?php echo get_template_directory_uri(); ?>/assets/images/case-icn/production.svg" width="45" alt="">
                                                        <!-- <h1 class="dev-icn-title"><?php echo $deliverable; ?></h1> -->
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($deliverable == 'social') :  ?>
                                                    <div>
                                                        <img class="dev-ico" src="<?php echo get_template_directory_uri(); ?>/assets/images/case-icn/social-media.svg" width="45" alt="">
                                                        <!-- <h1 class="dev-icn-title"><?php echo $deliverable; ?></h1> -->
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($deliverable == 'communications') :  ?>
                                                    <div>
                                                        <img class="dev-ico" src="<?php echo get_template_directory_uri(); ?>/assets/images/case-icn/communications.svg" width="45" alt="">
                                                        <!-- <h1 class="dev-icn-title"><?php echo $deliverable; ?></h1> -->
                                                    </div>
                                                <?php endif; ?>                               
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                </div>
                                <div class="address-case">©2018<i style="color: #D81C5C;">.</i> GCREATIVELAB</div>
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
                        
                    

                        <div class="swiper-slide second-slide case__slide">
                            <img src="<?php echo $client_img['url']; ?>" width="100%" height="100%" alt="">
                            
                        </div>

                        <div class="swiper-slide case__slide case__slide__description__holder">
                            <div class="case__inner__slide__holder">
                                <!-- <div class="case__inner__slide__title">
                                    <h1><?php echo get_field('01_title'); ?></h1>
                                </div>
                                <div class="case__inner__slide__subtitle">
                                    <h4>Subtitle</h4>
                                </div> -->
                                <div class="case__inner__slide__description">
                                    <?php echo get_field('title_01_description'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide case__slide">
                                <img src="<?php echo $client_img01['url']; ?>" height="auto" alt="">

                                <!-- <div class="case__right" style="background: url(<?php echo $client_img01['url']; ?>) no-repeat center center;
                                        background-size: contain;
                                        -webkit-background-size: contain;
                                        -moz-background-size: contain; 
                                        -o-background-size: contain;
                                        height: 100%;
                                        width: 100%;
                                        ">
                                </div> -->

                        </div>

                        <div class="swiper-slide case__slide case__slide__description__holder">
                                <div class="case__inner__slide__holder">
                                    <!-- <div class="case__inner__slide__title">
                                        <h1><?php echo get_field('02_title'); ?></h1>
                                    </div>
                                    <div class="case__inner__slide__subtitle">
                                        <h4>Subtitle</h4>
                                    </div> -->
                                    <div class="case__inner__slide__description">
                                        <?php echo get_field('title_02_description'); ?>
                                    </div>
                                </div>
                            </div>
    
                        <div class="swiper-slide case__slide">
                                
                                <img src="<?php echo $client_img02['url']; ?>" height="auto" alt="">
                        </div>
                            
                        <div class="swiper-slide case__slide case__slide__description__holder">
                                <div class="case__inner__slide__holder">
                                    <!-- <div class="case__inner__slide__title">
                                        <h1>Specs</h1>
                                    </div>
                                    <div class="case__inner__slide__subtitle">
                                        <h4>Subtitle</h4>
                                    </div> -->
                                    <div class="case__inner__slide__description">
                                        <p><?php echo get_field('full_project_deliverables'); ?></p>
                                    </div>
                                </div>
                        </div>

                        <div class="swiper-slide case__pagination">
                               <div class="case__inner__pagination__holder">

                                <?php

                                if(!empty($prev_post)) {

                                    $prev_thumb = get_the_post_thumbnail_url( $prev_post->ID,'full');
                                    
                                    ?>                                    
                                   <a href="<?php echo get_permalink($prev_post->ID); ?>" class="case__inner__top" style="background: url('<?php echo $prev_thumb; ?>') no-repeat center center;
                                    background-size: cover;
                                    -webkit-background-size: cover;
                                    -moz-background-size: cover; 
                                    -o-background-size: cover;" >
                                        <div class="case__page__holder">
                                            <div class="case__prev__title">
                                                <div class="case__prev">PREVIOUS CASE STUDY</div>
                                                <span><?php echo $prev_post->post_title; ?></span>
                                            </div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_up.svg" height="62" width="62" alt="">
                                        </div>
                                   </a>

                                   <?php }else{
                                    
                                       
                                       // The Loop
                                       if ( $queryFirst->have_posts() ) {
                                        $last_thumb = get_the_post_thumbnail_url( $prev_post->ID,'full');
                                        if ( $queryFirst->have_posts() ) {
                                            $queryFirst->the_post();

                                            if ( has_post_thumbnail() ) {
                                                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                                                if ( ! empty( $large_image_url[0] ) ) {
                                            
                                                }
                                            }
                                            
                                            ?>
                                            
                                            <a href="<?php echo get_permalink($queryFirst->ID); ?>" class="case__inner__top" style="background: url('<?php echo $large_image_url[0]; ?>') no-repeat center center;
                                                background-size: cover;
                                                -webkit-background-size: cover;
                                                -moz-background-size: cover; 
                                                -o-background-size: cover;" >
                                                    <div class="case__page__holder">
                                                        <div class="case__prev__title">
                                                              
                                                            <div class="case__prev">PREVIOUS CASE STUDY</div>
                                                            <span><?php echo get_the_title(); ?></span>
                                                        </div>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_up.svg" height="62" width="62" alt="">
                                                    </div>
                                            </a>

                                            <?php
                                        }

                                        /* Restore original Post Data */
                                        wp_reset_postdata();
                                    }

                                    ?>
                                    
                                    

                                   <?php } ?>

                                   <?php
                                   if(!empty($next_post)) {

                                    $next_thumb = get_the_post_thumbnail_url( $next_post->ID,'full');
                                    
                                   ?>

                                   
                                   <a href="<?php echo get_permalink($next_post->ID); ?>" class="case__inner__btm"
                                        style="background: url('<?php echo $next_thumb; ?>') no-repeat center center;
                                        background-size: cover;
                                        -webkit-background-size: cover;
                                        -moz-background-size: cover; 
                                        -o-background-size: cover;"   
                                    >
                                        <div class="case__page__holder">
                                        <div class="case__next__title">
                                            <div class="case__next">NEXT CASE STUDY</div>
                                            <span><?php echo $next_post->post_title; ?></span>
                                        </div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_down.svg" height="62" width="62" alt="">
                                    </a>
                                        </div>
                                   <?php }else{
                                       
                                    // The Loop
                                    if ( $queryLast->have_posts() ) {
                                        $last_thumb = get_the_post_thumbnail_url( $prev_post->ID,'full');
                                        if ( $queryLast->have_posts() ) {
                                            $queryLast->the_post();

                                            if ( has_post_thumbnail() ) {
                                                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                                                if ( ! empty( $large_image_url[0] ) ) {
                                            
                                                }
                                            }
                                            
                                            ?>
                                            
                                            <a href="<?php echo get_permalink($queryLast->ID); ?>" class="case__inner__btm" style="background: url('<?php echo $large_image_url[0]; ?>') no-repeat center center;
                                                background-size: cover;
                                                -webkit-background-size: cover;
                                                -moz-background-size: cover; 
                                                -o-background-size: cover;" >
                                                    <div class="case__page__holder">
                                                        <div class="case__prev__title">
                                                              
                                                            <div class="case__prev">NEXT CASE STUDY</div>
                                                            <span><?php echo get_the_title(); ?></span>
                                                        </div>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pagination_down.svg" height="62" width="62" alt="">
                                                    </div>
                                            </a>

                                            <?php
                                        }

                                        /* Restore original Post Data */
                                        wp_reset_postdata();
                                    }   
                                       
                                       
                                    ?>
                                    
                                    <?php } ?>
                               </div>
                        </div>
                        
                    </div>
                    <!-- Add Pagination -->
                    <!-- <div class="swiper-pagination"></div> -->
                </div>



            <!--  -->
    </div>
</div>
</div> <!-- Swiper Ends -->
        </div>
        </div>