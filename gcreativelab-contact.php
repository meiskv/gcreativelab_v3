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

						<div class="address">214, BUILDING 4, DUBAI MEDAI CITY, PO BOX 24554, DUBAI, UAE</div>
						
						<ul id="social">
							<li>FACEBOOK</li>
							<li>.</li>
							<li>INSTAGRAM</li>
							<li>.</li>
							<li>LINKEDIN</li>
							<li>.</li>
							<li>TWITTER</li>
						</ul>

						</div>
						<div class="swiper-slide content">
						<div class="left-overlay"></div>
							<div class="menu-button">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu.svg" width="42" height="84" alt="">
							</div>
								<!--  -->
                                <div class="wrapper contact">
                                    <div class="left"> <!--  Left Starts -->
                                        <div class="content__holder contact__holder">
                                            <div class="content__header">Hello.</div>
                                            <div class="content__subheader">HERE</div>
                                            <div class="content__description">
                                                <ul>
                                                    <li>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact__map.svg" height="41" width="53" alt="">
                                                    214, Building 4, Dubai Media City, PO Box 24554, Dubai, UAE
                                                    </li>
                                                    <li>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact__phone.svg" height="41" width="53" alt="">
                                                    04 390 1630
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="content__btn">
                                                <a href="mailto:INFO.GCREATIVE@GRAYLING.COM">INFO.GCREATIVE@GRAYLING.COM</a>
                                            </div>
                                            
                                        </div>
                                        <div class="address">©2018<i style="color: #D81C5C;">.</i> GCREATIVELAB<i style="color: #D81C5C;">.</i> LEGAL</div>
                                        <div class="content__hero movin__g">G</div>
                                    </div> <!--  Left Ends -->
                                    <div class="right">
                                        <div id="contact__map"></div>
                                        
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
