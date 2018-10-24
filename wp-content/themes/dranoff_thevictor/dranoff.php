<?php
/*
Template Name: Dranoff Page Template
*/

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

<div class="half-box left">
    <div class="left-half">
        <div class="blue-overlay">
            <div class="copy dranoff">
                <div class="icon-lines col-xs-8 col-xs-offset-2"><img height="50" width="56" src="<?php echo get_template_directory_uri(); ?>/images/dranoff_distinction_icon.svg"></div>
                <div class="lines col-xs-8 col-xs-offset-2"></div>
                <h1 class="page-title col-xs-8 col-xs-offset-2"><?php the_title(); ?></h1>
                <div class="lines col-xs-8 col-xs-offset-2"></div>
                <div class="dranoff-text col-xs-10 col-xs-offset-1"><?php the_content(); ?></div>
            </div>
        </div>
    </div><!-- left-half -->
</div><!-- half -->
<div class="half-box right">
    <div class="right-half">
        <div class="right-half-img" style="background-image: url(<?php the_field('right_image'); ?>);"></div>
        
        <div class="condo-headline"><h1><?php the_field('condominium_headline'); ?></h1></div>
        
        <div class="half-half-box left quarter-square" style="background-image: url(<?php the_field('condo_1_image'); ?>);" onclick="void(0)">
            <div class="overlay blue">
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <h1 class="apt-title down col-xs-10 col-xs-offset-1"><?php the_field('condo_1_title'); ?></h1>
                <div class="lines under white col-xs-10 col-xs-offset-1"></div>
                <div class="apt-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                <div class="brake"></div>
                <?php the_field('condo_1_text'); ?>
                <div class="brake"></div>
                </div>
            </div>
        </div>
        
        <div class="half-half-box right quarter-square" style="background-image: url(<?php the_field('condo_2_image'); ?>);" onclick="void(0)">
            <div class="overlay blue">
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <h1 class="apt-title down col-xs-10 col-xs-offset-1"><?php the_field('condo_2_title'); ?></h1>
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <div class="apt-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                    <div class="brake"></div>
                    <?php the_field('condo_2_text'); ?>
                    <div class="brake"></div>
                </div>
            </div>
        </div>
    </div><!-- right-half -->
</div><!-- half -->

<div class="box">
    
    <div class="full-width-headline"><h1><?php the_field('apartment_headline'); ?></h1></div>
    
    <div class="quarter quarter-square first apt" style="background-image: url(<?php the_field('apartment_1_image'); ?>);" onclick="void(0)">
        <div class="overlay gold">
            <div class="lines white col-xs-10 col-xs-offset-1"></div>
            <h1 class="apt-title down col-xs-10 col-xs-offset-1"><?php the_field('apartment_1_title'); ?></h1>
            <div class="lines white col-xs-10 col-xs-offset-1"></div>
            <div class="apt-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                <div class="brake"></div>
                <?php the_field('apartment_1_text'); ?>
                <div class="brake"></div>
            </div>
        </div>    
    </div>

    <div class="quarter quarter-square second apt" style="background-image: url(<?php the_field('apartment_2_image'); ?>);" onclick="void(0)">
        <div class="overlay gold">
            <div class="lines white col-xs-10 col-xs-offset-1"></div>
            <h1 class="apt-title down col-xs-10 col-xs-offset-1"><?php the_field('apartment_2_title'); ?></h1>
            <div class="lines white col-xs-10 col-xs-offset-1"></div>
            <div class="apt-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                <div class="brake"></div>
                <?php the_field('apartment_2_text'); ?>
                <div class="brake"></div>
            </div>
        </div>
    </div>
    
    <div class="quarter quarter-square third apt" style="background-image: url(<?php the_field('apartment_3_image'); ?>);" onclick="void(0)">
        <div class="overlay gold">
            <div class="lines white col-xs-10 col-xs-offset-1"></div>
            <h1 class="apt-title down col-xs-10 col-xs-offset-1"><?php the_field('apartment_3_title'); ?></h1>
            <div class="lines white col-xs-10 col-xs-offset-1"></div>
            <div class="apt-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                    <div class="brake"></div>
                    <?php the_field('apartment_3_text'); ?>
                    <div class="brake"></div>
                </div>
            
        </div>
    </div>
    
    <div class="quarter quarter-square fourth apt" style="background-image: url(<?php the_field('apartment_4_image'); ?>);" onclick="void(0)">
        <div class="overlay gold">
            <div class="lines white col-xs-10 col-xs-offset-1"></div>
            <h1 class="apt-title down col-xs-10 col-xs-offset-1"><?php the_field('apartment_4_title'); ?></h1>
            <div class="lines white col-xs-10 col-xs-offset-1"></div>
            <div class="apt-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                <div class="brake"></div>
                <?php the_field('apartment_4_text'); ?>
                <div class="brake"></div>
            </div>
        </div>
    </div>

</div>

<?php endwhile; // end of the loop. ?>  


<!-- FlexSlider -->
<script type="text/javascript" charset="utf-8">             
jQuery(window).load(function($) {
jQuery('.flexslider').flexslider({
    animation: "slide",
    directionNav: true,
    slideshow: true,
    slideshowSpeed: 4000,
    animationSpeed: 600
});
});
</script>
<script type="text/javascript" charset="utf-8">
  jQuery(window).load(function() {
    jQuery('.flexslider').flexslider({
        
        start: function(slider) {
        slider.removeClass('load');
        } 
    });
  });
</script>

<?php get_footer(); ?>
