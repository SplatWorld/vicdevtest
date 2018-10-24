<?php
/*
Template Name: Amenities Page Template
*/

get_header(); ?>
 
<?php while ( have_posts() ) : the_post(); ?>

<div class="half-box right">
    <div class="right-half-amenities">
        <div class="blue-overlay">
            <div class="copy retail">
                <div class="icon-lines icon-lines-amenities col-xs-8 col-xs-offset-2"><img height="44" width="44" src="<?php echo get_template_directory_uri(); ?>/images/icons/amenities.svg"></div>
                <div class="lines col-xs-8 col-xs-offset-2"></div>
                <h1 class="page-title col-xs-8 col-xs-offset-2"><?php the_title(); ?></h1>
                <div class="lines col-xs-8 col-xs-offset-2"></div>
                <div class="dranoff-text amenities col-xs-12">

                    <div class="amenities-text col-xs-6 col-sm-6">
                        <?php if( get_field('bullet_points_1') ): 
                        the_field('bullet_points_1'); 
                        endif; ?> 
                    </div>    
                    <div class="amenities-text col-xs-6 col-sm-6">  
                        <?php if( get_field('bullet_points_2') ): 
                        the_field('bullet_points_2'); 
                        endif; ?>   
                    </div>
                </div>
            </div>
        </div>
    </div><!-- left-half -->
</div><!-- half -->

<div class="half-box left">
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

<?php endwhile; // end of the loop. ?>  


<?php get_footer(); ?>
