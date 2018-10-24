<?php
/*
Template Name: Floorplans Page Template
*/

get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>


    <div class="two-thirds left">
        <div class="white-overlay">
            <div class="copy floorplans">
                <div class="icon-lines col-xs-6 col-xs-offset-3"><img height="50" width="56" src="<?php echo get_template_directory_uri(); ?>/images/floorplan-icon.svg"></div>
                <div class="lines col-xs-6 col-xs-offset-3"></div>
                <h1 class="page-title col-xs-6 col-xs-offset-3"><?php the_title(); ?></h1>
                <div class="lines col-xs-6 col-xs-offset-3"></div>
                <div class="dranoff-text col-xs-10 col-xs-offset-1"><?php the_content(); ?></div>
            </div>
        </div>
    </div>

    <div class="one-third right floorplan-first" style="background-image: url(<?php the_field('top_floorplan_first_image'); ?>);">
        <!--<div class="floorplan-unit-headline floorplan-first-headline">
            <h2></h2>
        </div>
        <div class="floorplan-unit floorplan-first">
            <div class="overlay-floorplans studio-gray">
                <a class="fancybox-iframe" href="<?php echo get_template_directory_uri(); ?>/images/floorplans/studio.pdf"><div class="explore-floorplan icon-dark"></div></a>
            </div>
        </div> -->

    </div><!-- one-third right -->
    
    <div class="one-third left ">
        <div class="floorplan-unit-headline">
            <h2><?php the_field('floorplan_title_1'); ?></h2>
        </div>
        <div class="floorplan-unit one-left gold-transparent" style="background-image: url(<?php the_field('floorplan_background_1'); ?>);">
            <div class="overlay-floorplans gold-transparent" onclick="void(0)">
                    <a class="fancybox-iframe" href="<?php the_field('floorplan_pdf_1'); ?>"><div class="explore-floorplan"></div></a>
            </div> 
        </div>
    </div><!-- one-third left -->
   
     <div class="one-third middle">
        <div class="floorplan-unit-headline">
            <h2><?php the_field('floorplan_title_2'); ?></h2>
        </div>         
         <div class="floorplan-unit two-middle taupe-transparent" style="background-image: url(<?php the_field('floorplan_background_2'); ?>);">
            <div class="overlay-floorplans taupe-transparent" onclick="void(0)">
                    <a class="fancybox-iframe" href="<?php the_field('floorplan_pdf_2'); ?>"><div class="explore-floorplan icon-dark"></div></a>
            </div> 
        </div>
    </div><!-- one-third middle -->
    
     <div class="one-third right">
        <div class="floorplan-unit-headline">
            <h2><?php the_field('floorplan_title_3'); ?></h2>
        </div>
         <div class="floorplan-unit three-right blue-light-transparent" style="background-image: url(<?php the_field('floorplan_background_3'); ?>);">
            <div class="overlay-floorplans blue-light-transparent" onclick="void(0)">
                    <a class="fancybox-iframe" href="<?php the_field('floorplan_pdf_3'); ?>"><div class="explore-floorplan"></div></a>
            </div> 
        </div>
    </div><!-- one-third right -->
    
     <div class="one-third left ">
        <div class="floorplan-unit-headline">
            <h2><?php the_field('floorplan_title_4'); ?></h2>
        </div>
        <div class="floorplan-unit four-left gold-transparent" style="background-image: url(<?php the_field('floorplan_background_4'); ?>);">
            <div class="overlay-floorplans gold-transparent" onclick="void(0)">
                    <a class="fancybox-iframe" href="<?php the_field('floorplan_pdf_4'); ?>"><div class="explore-floorplan"></div></a>
            </div> 
        </div>         
    </div><!-- one-third left -->
   
     <div class="one-third middle">
        <div class="floorplan-unit-headline">
            <h2><?php the_field('floorplan_title_5'); ?></h2>
        </div>
        <div class="floorplan-unit five-middle taupe-transparent" style="background-image: url(<?php the_field('floorplan_background_5'); ?>);">
            <div class="overlay-floorplans taupe-transparent" onclick="void(0)">
                    <a class="fancybox-iframe" href="<?php the_field('floorplan_pdf_5'); ?>"><div class="explore-floorplan icon-dark"></div></a>
            </div> 
        </div>
    </div><!-- one-third middle -->
    
     <div class="one-third right">
        <div class="floorplan-unit-headline">
            <h2><?php the_field('floorplan_title_6'); ?></h2>
        </div>
        <div class="floorplan-unit six-right blue-light-transparent" style="background-image: url(<?php the_field('floorplan_background_6'); ?>);">
            <div class="overlay-floorplans blue-light-transparent" onclick="void(0)">
                    <a class="fancybox-iframe" href="<?php the_field('floorplan_pdf_6'); ?>"><div class="explore-floorplan"></div></a>
            </div> 
        </div>
    </div><!-- one-third right -->


    <?php if( get_field('floorplan_title_7') ): ?>
    <div class="one-third left">
        <div class="floorplan-unit-headline">
            <h2><?php the_field('floorplan_title_7'); ?></h2>
        </div>
        <div class="floorplan-unit seven-left gold-transparent" style="background-image: url(<?php the_field('floorplan_background_7'); ?>);">
            <div class="overlay-floorplans gold-transparent" onclick="void(0)">
                    <a class="fancybox-iframe" href="<?php the_field('floorplan_pdf_7'); ?>"><div class="explore-floorplan"></div></a>
            </div> 
        </div>         
    </div><!-- one-third left -->
    <?php endif; ?>

    <?php if( get_field('floorplan_title_8') ): ?>
    <div class="one-third middle">
        <div class="floorplan-unit-headline">
            <h2><?php the_field('floorplan_title_8'); ?></h2>
        </div>
        <div class="floorplan-unit eight-middle taupe-transparent" style="background-image: url(<?php the_field('floorplan_background_8'); ?>);">
            <div class="overlay-floorplans taupe-transparent" onclick="void(0)">
                    <a class="fancybox-iframe" href="<?php the_field('floorplan_pdf_8'); ?>"><div class="explore-floorplan icon-dark"></div></a>
            </div> 
        </div> 
    </div><!-- one-third middle -->
    <?php endif; ?>

    <?php if( get_field('floorplan_title_9') ): ?>
    <div class="one-third right">
        <div class="floorplan-unit-headline last">
            <h2><?php the_field('floorplan_title_9'); ?></h2>
        </div>
        <div class="floorplan-unit nine-right blue-light-transparent" style="background-image: url(<?php the_field('floorplan_background_9'); ?>);">
            <div class="overlay-floorplans blue-light-transparent" onclick="void(0)">
                    <a class="fancybox-iframe" href="<?php the_field('floorplan_pdf_9'); ?>"><div class="explore-floorplan"></div></a>
            </div> 
        </div> 
    </div><!-- one-third right -->
    <?php endif; ?>

    <?php if( get_field('floorplan_title_10') ): ?>
    <div class="one-third left">
        <div class="floorplan-unit-headline">
            <h2><?php the_field('floorplan_title_10'); ?></h2>
        </div>
        <div class="floorplan-unit ten-left gold-transparent" style="background-image: url(<?php the_field('floorplan_background_10'); ?>);">
            <div class="overlay-floorplans gold-transparent" onclick="void(0)">
                    <a class="fancybox-iframe" href="<?php the_field('floorplan_pdf_10'); ?>"><div class="explore-floorplan"></div></a>
            </div> 
        </div>         
    </div><!-- one-third left -->
    <?php endif; ?>

    <?php if( get_field('floorplan_title_11') ): ?>
    <div class="one-third middle">
        <div class="floorplan-unit-headline last">
            <h2><?php the_field('floorplan_title_11'); ?></h2>
        </div>         
        <div class="floorplan-unit eleven-middle taupe-transparent" style="background-image: url(<?php the_field('floorplan_background_11'); ?>);">
            <div class="overlay-floorplans taupe-transparent" onclick="void(0)">
                    <a class="fancybox-iframe" href="<?php the_field('floorplan_pdf_11'); ?>"><div class="explore-floorplan icon-dark"></div></a>
            </div> 
        </div> 
    </div><!-- one-third middle -->
    <?php endif; ?>

<!--
    <?php if( get_field('floorplan_title_12') ): ?>
     <div class="one-third right">
        <div class="floorplan-unit-headline last">
            <h2><?php the_field('floorplan_title_12'); ?></h2>
        </div>
        <div class="floorplan-unit twelve-right blue-light-transparent" style="background-image: url(<?php the_field('floorplan_background_12'); ?>);">
            <div class="overlay-floorplans blue-light-transparent" onclick="void(0)">
                    <a class="fancybox-iframe" href="<?php the_field('floorplan_pdf_12'); ?>"><div class="explore-floorplan"></div></a>
            </div> 
        </div> 
    </div><!-- one-third right -->
    <?php endif; ?>
-->

    <div class="one-third right floorplan-last" style="background-image: url(<?php the_field('floorplan_last_image'); ?>);">

   
    <?php endwhile; // end of the loop. ?>   
    
<script type="text/javascript">
var pixelRatio = window.devicePixelRatio || 1;
if(window.innerWidth/pixelRatio < 641 ) {
  easy_fancybox_handler = null;
};
</script>
    

<?php get_footer(); ?>
