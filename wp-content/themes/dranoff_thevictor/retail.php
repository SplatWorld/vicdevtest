<?php
/*
Template Name: Retail Page Template
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="half-box right">
    <div class="right-half-retail">
        <div class="blue-overlay">
            <div class="copy retail">
                <div class="icon-lines icon-lines-retail col-xs-8 col-xs-offset-2"><img height="44" width="44" src="<?php echo get_template_directory_uri(); ?>/images/icons/retail.svg"></div>
                <div class="lines col-xs-8 col-xs-offset-2"></div>
                <h1 class="page-title col-xs-8 col-xs-offset-2"><?php the_title(); ?></h1>
                <div class="lines col-xs-8 col-xs-offset-2"></div>
                <div class="dranoff-text col-xs-10 col-xs-offset-1"><?php the_content(); ?></div>
            </div>
        </div>
    </div><!-- left-half -->
</div><!-- half -->

<div class="half-box left">
        <div class="half-half-box retail-1 left quarter-square" style="background-image: url(<?php the_field('retail_image_1'); ?>);" onclick="void(0)">
            <div class="overlay blue">
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <h1 class="retail-title down col-xs-10 col-xs-offset-1"><?php the_field('retail_title_1'); ?></h1>
                <div class="lines under white col-xs-10 col-xs-offset-1"></div>
                <div class="retail-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                 <?php if( get_field('retail_description_1') ): ?>    
                    <div class="brake"></div>
                    <?php the_field('retail_description_1'); ?>
                    <div class="brake"></div>
                <?php endif; ?>    
                </div>
            </div>
        </div>
        <div class="half-half-box retail-2 right quarter-square" style="background-image: url(<?php the_field('retail_image_2'); ?>);" onclick="void(0)">
            <div class="overlay blue">
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <h1 class="retail-title down col-xs-10 col-xs-offset-1"><?php the_field('retail_title_2'); ?></h1>
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <div class="retail-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                <?php if( get_field('retail_description_2') ): ?>    
                    <div class="brake"></div>
                    <?php the_field('retail_description_2'); ?>
                    <div class="brake"></div>
                <?php endif; ?> 
                </div>
            </div>
        </div>
        <div class="half-half-box retail-3 left quarter-square" style="background-image: url(<?php the_field('retail_image_3'); ?>);" onclick="void(0)">
            <div class="overlay blue">
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <h1 class="retail-title down col-xs-10 col-xs-offset-1"><?php the_field('retail_title_3'); ?></h1>
                <div class="lines under white col-xs-10 col-xs-offset-1"></div>
                <div class="retail-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                <?php if( get_field('retail_description_3') ): ?>    
                    <div class="brake"></div>
                    <?php the_field('retail_description_3'); ?>
                    <div class="brake"></div>
                <?php endif; ?> 
                </div>
            </div>
        </div>
        <div class="half-half-box retail-4 right quarter-square" style="background-image: url(<?php the_field('retail_image_4'); ?>);" onclick="void(0)">
            <div class="overlay blue">
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <h1 class="retail-title down col-xs-10 col-xs-offset-1"><?php the_field('retail_title_4'); ?></h1>
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <div class="retail-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                <?php if( get_field('retail_description_4') ): ?>    
                    <div class="brake"></div>
                    <?php the_field('retail_description_4'); ?>
                    <div class="brake"></div>
                <?php endif; ?> 
                </div>
            </div>
        </div>
</div><!-- half -->


<?php endwhile; // end of the loop. ?>  

<?php get_footer(); ?>
