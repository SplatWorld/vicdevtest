<?php
/*
Template Name: Sitemap Page Template
*/

get_header(); ?>
 
<div class="half-box left">
    <div class="right-half-amenities sitemap-box">
        <div class="blue-overlay">
            <div class="copy">
                <div class="icon-lines col-xs-8 col-xs-offset-2"><img height="50" width="56" src="<?php echo get_template_directory_uri(); ?>/images/dranoff_distinction_icon.svg"></div>
                <div class="lines col-xs-8 col-xs-offset-2"></div>
                <h1 class="page-title col-xs-8 col-xs-offset-2"><?php the_title(); ?></h1>
                <div class="lines col-xs-8 col-xs-offset-2"></div>
                <div class="sitemap-text col-xs-8 col-xs-offset-2">
                    <h2 id="pages">Pages</h2>
                    <ul>
                    <?php
                    // Add pages you'd like to exclude in the exclude here
                    wp_list_pages(
                      array(
                        'exclude' => '',
                        'title_li' => '',
                        'sort_column' => 'menu_order',
                      )
                    );
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- left-half -->
</div><!-- half -->
<div class="half-box right">
     <div class="half-half-box amenities-1 left quarter-square" style="background-image: url(<?php the_field('amenities_tile_1_image'); ?>);">
            <div class="overlay blue">
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <h1 class="retail-title down col-xs-10 col-xs-offset-1"><?php the_field('amenities_tile_1_title'); ?></h1>
                <div class="lines under white col-xs-10 col-xs-offset-1"></div>
            </div>
        </div>
        <div class="half-half-box amenities-2 right quarter-square" style="background-image: url(<?php the_field('amenities_tile_2_image'); ?>);">
            <div class="overlay blue">
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <h1 class="retail-title down col-xs-10 col-xs-offset-1"><?php the_field('amenities_tile_2_title'); ?></h1>
                <div class="lines under white col-xs-10 col-xs-offset-1"></div>
            </div>
        </div>
        <div class="half-half-box amenities-3 left quarter-square" style="background-image: url(<?php the_field('amenities_tile_3_image'); ?>);">
            <div class="overlay blue">
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <h1 class="retail-title down col-xs-10 col-xs-offset-1"><?php the_field('amenities_tile_3_title'); ?></h1>
                <div class="lines under white col-xs-10 col-xs-offset-1"></div>
            </div>
        </div>
        <div class="half-half-box amenities-4 right quarter-square" style="background-image: url(<?php the_field('amenities_tile_4_image'); ?>);">
            <div class="overlay blue">
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <h1 class="retail-title down col-xs-10 col-xs-offset-1"><?php the_field('amenities_tile_4_title'); ?></h1>
                <div class="lines under white col-xs-10 col-xs-offset-1"></div>
            </div>
        </div>
</div><!-- half -->




<?php get_footer(); ?>