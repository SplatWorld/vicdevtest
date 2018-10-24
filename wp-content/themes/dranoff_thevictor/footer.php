<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->



<footer id="colophon" class="site-footer" role="contentinfo">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid">
		<div class="row">
			<div class="site-footer-inner">
                <?php if ( is_front_page() ) { ?>
                    
                    <div  class="quarter quarter-footer quarter-footer-home" style="background-image: url(<?php the_field('left_vertical_footer_image'); ?>);"></div>

                    <div class="three-quarters">
                        
                        <div class="quarter quarter-square footer-front-1">
                            <div class="quarter-square filter" style="background-image: url(<?php the_field('footer_tile_1_image'); ?>);"></div>
                            <div class="mask light-blue inverse" onclick="void(0)">
                                <div class="mask-content inverse">
                                    <?php if( get_field('footer_tile_1_icon') ): ?>
                                    <div class="icon footer-tile1-icon" style="background-image: url(<?php the_field('footer_tile_1_icon'); ?>);"></div>
                                    <?php endif; ?>
                                    <div class="lines white col-xs-10 col-xs-offset-1"></div>
                                    <?php if( get_field('footer_tile_1_title') ): ?>
                                    <h2 class="mask-title inverse col-xs-10 col-xs-offset-1"><?php the_field('footer_tile_1_title'); ?></h2>
                                    <?php endif; ?>
                                    <div class="lines white col-xs-10 col-xs-offset-1"></div>
                                    <div class="mask-copy inverse col-xs-10 col-xs-offset-1">
                                        <?php if( get_field('footer_tile_1_text') ): ?>
                                        <div class="brake-small"></div><?php the_field('footer_tile_1_text'); ?><div class="brake-small"></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                             </div>
                        </div><!-- .quarter.footer-front-1-->
                        
                        <div  class="quarter quarter-square footer-front-2" onclick="void(0)">
                            <a href="http://www.dranoffproperties.com/lifestyle" target="_blank">
                            <div  class="quarter-square filter" style="background-image: url(<?php the_field('footer_tile_2_image'); ?>);"></div>
                            <div class="mask light-gray"></div>
                            <div class="mask-content overlay-front light-gray">
                                <?php if( get_field('footer_tile_2_icon') ): ?>
                                <div class="icon footer-tile2-icon" style="background-image: url(<?php the_field('footer_tile_2_icon'); ?>);"></div>
                                <?php endif; ?>
                                <div class="lines dark col-xs-10 col-xs-offset-1"></div>
                                <?php if( get_field('footer_tile_2_title') ): ?>
                                <h2 class="mask-title col-xs-10 col-xs-offset-1"><?php the_field('footer_tile_2_title'); ?></h2>
                                <?php endif; ?>
                                <div class="lines dark col-xs-10 col-xs-offset-1"></div>
                                <div class="mask-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                                    <?php if( get_field('footer_tile_2_text') ): ?>
                                    <div class="brake-small"></div><?php the_field('footer_tile_2_text'); ?><div class="brake-small"></div>
                                    <?php endif; ?>
                                </div><!-- mask-copy -->
                            </div><!-- mask-content overlay-front light-gray -->
                        </a>
                        </div><!-- .quarter .footer-front-2 -->
                        
                        <div  class="quarter quarter-square footer-front-3">
                            <div class="quarter-square" style="background-image: url(<?php the_field('footer_tile_3_image'); ?>);"></div>
                            <!--<div class="mask light-blue inverse" onclick="void(0)">
                                <div class="mask-content inverse">
                                    <?php if( get_field('footer_tile_3_icon') ): ?>
                                    <div class="icon footer-tile3-icon" style="background-image: url(<?php the_field('footer_tile_3_icon'); ?>);"></div>
                                    <?php endif; ?>
                                    <div class="lines white col-xs-10 col-xs-offset-1"></div>
                                    <?php if( get_field('footer_tile_3_title') ): ?>
                                    <h2 class="mask-title inverse col-xs-10 col-xs-offset-1"><?php the_field('footer_tile_3_title'); ?></h2>
                                    <?php endif; ?>
                                    <div class="lines white col-xs-10 col-xs-offset-1"></div>
                                    <div class="mask-copy inverse col-xs-10 col-xs-offset-1">
                                        <?php if( get_field('footer_tile_3_text') ): ?>
                                        <div class="brake-small"></div><?php the_field('footer_tile_3_text'); ?><div class="brake-small"></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div> -->
                        </div><!-- .quarter .theleftbank-panel-->
                    
                    </div><!-- .three-quarters -->
                
                
                
                <?php } elseif ( is_page ('Floorplans') ) { ?>
                    <div  class="quarter quarter-footer-floorplans" style="background-image: url(<?php the_field('vertical_footer_floorplans_image'); ?>);"></div>                
                    <div class="three-quarters">
                        <div  class="quarter quarter-square footer-floorplans-1" style="background-image: url(<?php the_field('footer_floorplans_tile_1_image'); ?>);"></div>
                        <div  class="quarter quarter-square footer-floorplans-2" style="background-image: url(<?php the_field('footer_floorplans_tile_2_image'); ?>);"></div>
                        <div  class="quarter quarter-square footer-floorplans-3" style="background-image: url(<?php the_field('footer_floorplans_tile_3_image'); ?>);"></div>
                    </div>
                
                
                <?php } elseif ( is_page ('Gallery') ) { ?>
                    <div  class="quarter quarter-footer-gallery" style="background-image: url(<?php the_field('footer_gallery_image'); ?>);"></div>
                
                
                <?php } elseif ( is_page ('Neighborhood') ) { ?>
                    <div  class="quarter quarter-footer" style="background-image: url(<?php the_field('vertical_footer_neighborhood_image'); ?>);"></div>
                    <div class="three-quarters">
                        <div  class="quarter quarter-square footer-neighborhood-1" style="background-image: url(<?php the_field('footer_neighborhood_tile_1_image'); ?>);"></div>
                        <div  class="quarter quarter-square footer-neighborhood-2" style="background-image: url(<?php the_field('footer_neighborhood_tile_2_image'); ?>);"></div>
                        <div  class="quarter quarter-square footer-neighborhood-3" style="background-image: url(<?php the_field('footer_neighborhood_tile_3_image'); ?>);"></div>
                    </div>
                
                <?php } elseif ( is_page ('Amenities') ) { ?>
                    <div  class="quarter quarter-footer quarter-footer-amenities" style="background-image: url(<?php the_field('vertical_footer_amenities_image'); ?>);"></div>
                    <div class="three-quarters">
                        <div  class="quarter quarter-square amenities-footer-1" style="background-image: url(<?php the_field('footer_amenities_tile_1_image'); ?>);"></div>
                        <div  class="quarter quarter-square amenities-footer-2" style="background-image: url(<?php the_field('footer_amenities_tile_2_image'); ?>);"></div>
                        <div  class="quarter quarter-square amenities-footer-3" style="background-image: url(<?php the_field('footer_amenities_tile_3_image'); ?>);"></div>
                        
                    </div>
                
                
                <?php } elseif ( is_page ('Retail') ) { ?>
                    <div  class="quarter quarter-footer quarter-footer-amenities" style="background-image: url(<?php the_field('vertical_footer_retail'); ?>);"></div>
                    <div class="three-quarters">
                        <div  class="quarter quarter-square amenities-footer-1" style="background-image: url(<?php the_field('footer_retail_1'); ?>);" onclick="void(0)">
                            <div class="overlay blue">
                                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                                <h1 class="retail-title down col-xs-10 col-xs-offset-1"><?php the_field('footer_retail_title_1'); ?></h1>
                                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                                <div class="retail-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                                <?php if( get_field('footer_retail_description_1') ): ?>    
                                    <div class="brake"></div>
                                    <?php the_field('footer_retail_description_1'); ?>
                                    <div class="brake"></div>
                                <?php endif; ?> 
                                </div>
                            </div>
                        </div>
                        <div  class="quarter quarter-square amenities-footer-2" style="background-image: url(<?php the_field('footer_retail_2'); ?>);" onclick="void(0)">
                            <div class="overlay blue">
                                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                                <h1 class="retail-title down col-xs-10 col-xs-offset-1"><?php the_field('footer_retail_title_2'); ?></h1>
                                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                                <div class="retail-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                                <?php if( get_field('footer_retail_description_2') ): ?>    
                                    <div class="brake"></div>
                                    <?php the_field('footer_retail_description_2'); ?>
                                    <div class="brake"></div>
                                <?php endif; ?> 
                                </div>
                            </div>
                        </div>
                        <div  class="quarter quarter-square amenities-footer-3" style="background-image: url(<?php the_field('footer_retail_3'); ?>);" onclick="void(0)">
                            <div class="overlay blue">
                                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                                <h1 class="retail-title down col-xs-10 col-xs-offset-1"><?php the_field('footer_retail_title_3'); ?></h1>
                                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                                <div class="retail-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                                <?php if( get_field('footer_retail_description_3') ): ?>    
                                    <div class="brake"></div>
                                    <?php the_field('footer_retail_description_3'); ?>
                                    <div class="brake"></div>
                                <?php endif; ?> 
                                </div>
                            </div>
                        </div>
                        
                    </div>
                
                <?php } elseif ( is_page ('Dranoff Distinction', 'The Dranoff Distinction') ) { ?>
                
                    <div class="three-quarters-map hidden-md hidden-lg">
                        <?php echo do_shortcode('[res_map address="521 S Broad St, Philadelphia, PA 19147 | 201 S 25th St, Philadelphia, PA 19103 |777 S Broad St, Philadelphia, PA 19147 | 1 Market St, Camden, NJ 08102 | 50 S 16th St, Philadelphia, PA 19102 | 225 S 25th St, Philadelphia, PA 19103 | 3131 Walnut St, Philadelphia, PA 19104" description="<strong>Southstar Lofts</strong>{br}521 S Broad St{br}Philadelphia, PA 19147 | <strong>Locust on the Park</strong>{br}201 S 25th St{br}Philadelphia, PA 19103 | <strong>777 SOUTH BROAD</strong>{br}777 S Broad St{br}Philadelphia, PA 19147 | <strong>THE VICTOR</strong>{br}1 Market St{br}Camden, NJ 08102 | <strong>TWO LIBERTY</strong>{br}50 S 16th St{br}Philadelphia, PA 19102 | <strong>ONE RIVERSIDE</strong>{br}225 S 25th St{br} Philadelphia, PA 19103 | <strong>The Left Bank </strong>{br}3131 Walnut St{br} Philadelphia, PA 19104" icon="yellow | yellow | yellow | yellow | blue | blue | yellow" style="#3399ff" scalecontrol="no" typecontrol="yes" streetcontrol="yes" zoom="14" zoomcontrol="yes" draggable="yes" scrollwheel="yes" searchbox="no" clustering="no" logging="yes" poi="yes" width="100%" height="100%" maptype="roadmap" popup="no" center="39.953433, -75.163918" refresh="yes" publisherid="" adbg="#ffffff" key="AIzaSyBnnOnHfHjF15lpmezyHyu04t76aOFA_VY"]'); ?>
                    </div>
                    
                    <div class="quarter quarter-slider-footer">    
                        <?php $images = get_field('footer_upcoming_slider');
                        if( $images ): ?>
                            <div class="flexslider distinction">
                                <ul class="slides">
                                    <?php foreach( $images as $image ): ?>
                                    <li style="background-image: url(<?php echo $image['url']; ?>);">
                                        <div class="flex-caption">
                                            <h2><?php echo $image['title']; ?></h2>
                                            <p><?php echo $image['caption']; ?></p>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div><!-- flexslider gallery -->
                        <?php endif; ?> 
                    </div>
                    
                    <div class="three-quarters-map hidden-xs hidden-sm">
                        <?php echo do_shortcode('[res_map address="521 S Broad St, Philadelphia, PA 19147 | 201 S 25th St, Philadelphia, PA 19103 |777 S Broad St, Philadelphia, PA 19147 | 1 Market St, Camden, NJ 08102 | 50 S 16th St, Philadelphia, PA 19102 | 225 S 25th St, Philadelphia, PA 19103 | 3131 Walnut St, Philadelphia, PA 19104" description="<strong>Southstar Lofts</strong>{br}521 S Broad St{br}Philadelphia, PA 19147 | <strong>Locust on the Park</strong>{br}201 S 25th St{br}Philadelphia, PA 19103 | <strong>777 SOUTH BROAD</strong>{br}777 S Broad St{br}Philadelphia, PA 19147 | <strong>THE VICTOR</strong>{br}1 Market St{br}Camden, NJ 08102 | <strong>TWO LIBERTY</strong>{br}50 S 16th St{br}Philadelphia, PA 19102 | <strong>ONE RIVERSIDE</strong>{br}225 S 25th St{br} Philadelphia, PA 19103 | <strong>The Left Bank </strong>{br}3131 Walnut St{br} Philadelphia, PA 19104" icon="yellow | yellow | yellow | yellow | blue | blue | yellow" style="#3399ff" scalecontrol="no" typecontrol="yes" streetcontrol="yes" zoom="14" zoomcontrol="yes" draggable="yes" scrollwheel="yes" searchbox="no" clustering="no" logging="yes" poi="yes" width="100%" height="100%" maptype="roadmap" popup="no" center="39.953433, -75.163918" refresh="yes" publisherid="" adbg="#ffffff" key="AIzaSyBnnOnHfHjF15lpmezyHyu04t76aOFA_VY"]'); ?>
                    </div>                
                
                
                 <?php } elseif ( is_page ('Contact Us') ) { ?>
                    <div  class="quarter quarter-footer" style="background-image: url(<?php the_field('vertical_footer_contact'); ?>);"></div>
                    <div class="three-quarters">
                        <div  class="quarter quarter-square footer-contact-1" style="background-image: url(<?php the_field('footer_contact_tile_1_image'); ?>);"></div>
                        <div  class="quarter quarter-square box-info">
                            <div class="container-address">
                                    <a href="<?php the_field('phone_link'); ?>"><div class="phone-icon-contact"></div></a>
                                    <a href="<?php the_field('phone_link'); ?>"><p class="address-title">Phone</p></a>
                                    <a href="<?php the_field('phone_link'); ?>"><p class="left-bump-phone"><?php the_field('phone_number'); ?></p></a>
                                <div class="email-container">
                                    <a href="<?php the_field('email_link'); ?>" title="Email to us">
                                        <div class="email-icon-contact"></div>
                                        <p class="address-title">Email</p>
                                        <p class="left-bump-phone"><?php the_field('email_text'); ?></p>
                                    </a>
                                </div><!-- email container -->
                            </div><!-- end container address -->
                        </div><!-- end quarter box-info -->
                        <div  class="quarter quarter-square footer-contact-3" style="background-image: url(<?php the_field('footer_contact_tile_3_image'); ?>);"></div>
                    </div>
                
                
                <?php } else { ?>
                    <div  class="quarter quarter-footer quarter-footer-amenities"></div>
                    <div class="three-quarters">
                        <div  class="quarter quarter-square amenities-footer-1"></div>
                        <div  class="quarter quarter-square amenities-footer-2"></div>
                        <div  class="quarter quarter-square amenities-footer-3"></div>
                    </div>
                <?php } ?>
                
                
                  <div class="footer-home">
                      <div class="dranoff-logo-2"><a href="http://www.dranoffproperties.com/" target="_blank"><img width="180" height="40" src="<?php echo get_template_directory_uri(); ?>/images/dranoff-logo-footer.svg"></a></div>
                        <div class="footer-address hidden-xs hidden-sm col-md-3 col-md-offset-9">
                            <p>One Market Street<br/>Camden, NJ 08102<br/>856-471-1109</p>
                        </div>
                        <ul class="footer-menu-container col-xs-5 col-md-12">
                            <li class="flex-item-footer-1 dranoff-logo"><a href="http://www.dranoffproperties.com/" target="_blank"><img width="195" height="45" src="<?php echo get_template_directory_uri(); ?>/images/dranoff-logo-footer.svg"></a>
                            </li><!-- end dranoff logo -->
                            <li class="flex-item-footer-2"><a href="<?php echo get_site_url(); ?>">home</a></li>
                            <li class="flex-item-footer-3"><a href="<?php echo get_site_url(); ?>/floorplans">floorplans</a></li>
                            <li class="flex-item-footer-4"><a href="<?php echo get_site_url(); ?>/gallery">gallery</a></li>
                            <li class="flex-item-footer-5"><a href="<?php echo get_site_url(); ?>/neighborhood">neighborhood</a></li>
                            <li class="flex-item-footer-5"><a href="<?php echo get_site_url(); ?>/amenities">amenities</a></li>
                            <li class="flex-item-footer-5"><a href="<?php echo get_site_url(); ?>/retail">retail</a></li>
                            <li class="flex-item-footer-7"><a href="<?php echo get_site_url(); ?>/dranoff-distinction">dranoff distinction</a></li>
                            <li class="flex-item-footer-8"><a href="<?php echo get_site_url(); ?>/contact-us">contact us</a></li>
                        </ul><!-- footer menu flex container -->
                       
                        <div class="footer-address col-xs-7 visible-xs-block visible-sm-block">
                            <p>One Market Street<br/>Camden, NJ 08102<br/>856-635-9076</p>
                        </div>
                      
                       <div class="copyright col-xs-7 col-md-12">
                           <li>copyright <?php echo date("Y"); ?> |<!-- site map | --></li>
                            <li class="footer-icon" ><img  width="28" height="21" src="<?php echo get_template_directory_uri(); ?>/images/EHO-logo-footer.png"></li>
                            <li class="footer-icon" ><img  width="28" height="21" src="<?php echo get_template_directory_uri(); ?>/images/wheelchair-accessibility-icon.svg"></li>
                        </div><!-- end copyright/sitemap/eeoh logo -->
                       
                </div><!-- footer-home -->
			</div>
		</div>
	</div><!-- close .container -->
</footer><!-- close #colophon -->



<?php wp_footer(); ?>

</body>
</html>
