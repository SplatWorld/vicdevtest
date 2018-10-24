<?php
/**
 * Template Name: Neighborhood Page Template
 *
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<div class="full-size">
        <div class="white-overlay">
            <div class="copy floorplans">
                <div class="icon-lines col-xs-6 col-xs-offset-3"><img height="50" width="56" src="<?php echo get_template_directory_uri(); ?>/images/the-victor-neighborhood-icon-new.svg"></div>
                <div class="lines col-xs-6 col-xs-offset-3"></div>
                <h1 class="page-title col-xs-6 col-xs-offset-3"><?php the_title(); ?></h1>
                <div class="lines col-xs-6 col-xs-offset-3"></div>
                <div class="dranoff-text col-xs-10 col-xs-offset-1"><?php the_content(); ?></div>
            </div>
        </div>
    </div>
    <?php echo do_shortcode('[put_wpgm id=3]'); ?>




		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>
            
	<?php endwhile; // end of the loop. ?>
    
<?php get_footer(); ?>
