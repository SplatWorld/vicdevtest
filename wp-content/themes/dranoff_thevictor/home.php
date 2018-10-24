<?php
/*
Template Name: Home Page Template
*/




get_header(); ?>


<!-- ****** TOP SLIDER ******* -->
<div class="slider-1 hidden-xs">
    <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'front-slider', 'slug' ); } ?>
</div>

<!-- ****** TOP SLIDER MOBILE ******* -->
<?php $images = get_field('mobile_top_slider');
    if( $images ): ?>
    <div class="front-slider-small visible-xs-block">
        <div class="flexslider front-small">
            <ul class="slides">
                <?php foreach( $images as $image ): ?>
                <li style="background-image: url(<?php echo $image['url']; ?>);">
                    <div class="slider-overlay-copy">
                            <?php echo $image['caption']; ?>
                    </div>    
                </li>
                 <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>




<!-- ****** TOP GRID ******* -->
<div class="box front-grid">
    
    <div  class="quarter quarter-long" style="background-image: url(<?php the_field('left_vertical_top_image'); ?>);"></div>
    
    <div class="six-quarters">
        
        <div  class="quarter quarter-square front-1" onclick="void(0)">
           <a href="https://youtu.be/JH3rEmQ9swc?rel=0&autoplay=1" data-rel="lightbox-video-1" target="_blank">
            <div  class="quarter-square filter" style="background-image: url(<?php the_field('tile_1_image'); ?>);"></div>
            <div class="quarter-square filter"></div>
            <div class="mask light-blue"></div>
            <div class="mask-content overlay-front blue">
                <?php if( get_field('tile_1_icon') ): ?>
                <div class="icon tile1-icon" style="background-image: url(<?php the_field('tile_1_icon'); ?>);"></div>
                <?php endif; ?>
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <?php if( get_field('tile_1_title') ): ?>
                <h2 class="mask-title col-xs-10 col-xs-offset-1"><?php the_field('tile_1_title'); ?></h2>
                <?php endif; ?> 
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <div class="mask-copy col-xs-10 col-xs-offset-1">
                    <?php if( get_field('tile_1_text') ): ?>
                    <div class="brake-small"></div><?php the_field('tile_1_text'); ?><div class="brake-small"></div>
                    <?php endif; ?>
                </div>
            </div>
           </a>
        </div>
        
        <div class="quarter quarter-square front-2">
            <div class="quarter-square filter" style="background-image: url(<?php the_field('tile_2_image'); ?>);"></div>
            <div class="mask light-gray inverse" onclick="void(0)">
                <div class="mask-content inverse">
                    <?php if( get_field('tile_2_icon') ): ?>
                    <div class="icon tile2-icon" style="background-image: url(<?php the_field('tile_2_icon'); ?>);"></div>
                    <?php endif; ?>
                    <div class="lines dark col-xs-10 col-xs-offset-1"></div>
                    <?php if( get_field('tile_2_title') ): ?>
                    <h2 class="mask-title inverse col-xs-10 col-xs-offset-1"><?php the_field('tile_2_title'); ?></h2>
                    <?php endif; ?>                    
                    <div class="lines dark col-xs-10 col-xs-offset-1"></div>
                    <div class="mask-copy inverse col-xs-10 col-xs-offset-1">
                        <?php if( get_field('tile_2_text') ): ?>
                        <div class="brake-small"></div><?php the_field('tile_2_text'); ?><div class="brake-small"></div>
                        <?php endif; ?>                   
                    </div>
                </div>
             </div>
        </div>
        
        <div  class="quarter quarter-square front-3" onclick="void(0)">
            <div class="quarter-square filter" style="background-image: url(<?php the_field('tile_3_image'); ?>);"></div>
            <div class="mask light-gold"></div>
            <div class="mask-content overlay-front gold">
                <?php if( get_field('tile_3_icon') ): ?>
                <div class="icon tile3-icon" style="background-image: url(<?php the_field('tile_3_icon'); ?>);"></div>
                <?php endif; ?>
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <?php if( get_field('tile_3_title') ): ?>
                <h2 class="mask-title col-xs-10 col-xs-offset-1"><?php the_field('tile_3_title'); ?></h2>
                <?php endif; ?>
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <div class="mask-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                    <?php if( get_field('tile_3_text') ): ?>
                    <div class="brake-small"></div><?php the_field('tile_3_text'); ?><div class="brake-small"></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
        <div  class="quarter quarter-square front-4" style="background-image: url(<?php the_field('tile_4_image'); ?>);"></div>
        
        <div  class="quarter quarter-square front-5" onclick="void(0)">
            <div class="quarter-square filter" style="background-image: url(<?php the_field('tile_5_image'); ?>);"></div>
            <div class="mask light-gray"></div>
            <div class="mask-content overlay-front light-gray">
                <?php if( get_field('tile_5_icon') ): ?>
                <div class="icon tile5-icon" style="background-image: url(<?php the_field('tile_5_icon'); ?>);"></div>
                <?php endif; ?>
                <div class="lines dark col-xs-10 col-xs-offset-1"></div>
                <?php if( get_field('tile_5_title') ): ?>
                <h2 class="mask-title col-xs-10 col-xs-offset-1"><?php the_field('tile_5_title'); ?></h2>
                <?php endif; ?>             
                <div class="lines dark col-xs-10 col-xs-offset-1"></div>
                <div class="mask-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                    <?php if( get_field('tile_5_text') ): ?>
                    <div class="brake-small"></div><?php the_field('tile_5_text'); ?><div class="brake-small"></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    

        <div  class="quarter quarter-square front-6">
            <div class="quarter-square filter" style="background-image: url(<?php the_field('tile_6_image'); ?>);"></div>
           <div class="mask light-blue inverse" onclick="void(0)">
            <div class="mask-content inverse">
                    
                    <?php if( get_field('tile_6_icon') ): ?>
                    <div class="icon tile6-icon" style="background-image: url(<?php the_field('tile_6_icon'); ?>);"></div>
                    <?php endif; ?>

                    <div class="lines white col-xs-10 col-xs-offset-1"></div>
                    
                    <?php if( get_field('tile_6_title') ): ?>
                    <h2 class="mask-title inverse col-xs-10 col-xs-offset-1"><?php the_field('tile_6_title'); ?></h2>
                    <?php endif; ?>
                    
                    <div class="lines white col-xs-10 col-xs-offset-1"></div>
                    
                    <div class="mask-copy inverse col-xs-10 col-xs-offset-1">
                        <?php if( get_field('tile_6_text') ): ?>
                        <div class="brake-small"></div><?php the_field('tile_6_text'); ?><div class="brake-small"></div>
                        <?php endif; ?>
                    </div>
                </div>        
            </div>   
        </div>

    </div>

</div>

<!-- ****** MIDDLE SLIDER ******* -->
<div class="slider-2 hidden-xs"> 
    <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'middle-slider', 'slug' ); } ?>
</div>

<!-- ****** MIDDLE SLIDER MOBILE ******* -->
<?php
$images = get_field('mobile_middle_slider');
if( $images ): ?>
<div class="slider-2-small visible-xs-block">
        <div class="flexslider slider-2-small">
            <ul class="slides">
                <?php foreach( $images as $image ): ?>
                <li style="background-image: url(<?php echo $image['url']; ?>);">
                    <div class="slider-2-caption">
                            <?php echo $image['caption']; ?>
                    </div>    
                </li>
                 <?php endforeach; ?>
            </ul>
        </div>
</div>
<?php endif; ?>


<!-- ****** MIDDLE GRID ******* -->
<div class="box front-grid-2">

    <div  class="quarter quarter-square front-7" style="background-image: url(<?php the_field('tile_7_image'); ?>);"></div> 
    
    <div  class="quarter quarter-square front-8" onclick="void(0)">
            <div class="quarter-square filter" style="background-image: url(<?php the_field('tile_8_image'); ?>);"></div>
            <div class="mask light-blue"></div>
            <div class="mask-content overlay-front blue">
                <?php if( get_field('tile_8_icon') ): ?>
                <div class="icon tile8-icon" style="background-image: url(<?php the_field('tile_8_icon'); ?>);"></div>
                <?php endif; ?>
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <?php if( get_field('tile_8_title') ): ?>
                <h2 class="mask-title col-xs-10 col-xs-offset-1"><?php the_field('tile_8_title'); ?></h2>
                <?php endif; ?>
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <div class="mask-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                    <?php if( get_field('tile_8_text') ): ?>
                    <div class="brake-small"></div><?php the_field('tile_8_text'); ?><div class="brake-small"></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    
    <div  class="quarter quarter-square front-9" style="background-image: url(<?php the_field('tile_9_image'); ?>);"></div>

    <div  class="quarter quarter-square front-10" onclick="void(0)">
            <div class="quarter-square filter" style="background-image: url(<?php the_field('tile_10_image'); ?>);"></div>           
            <div class="mask light-gold"></div>
            <div class="mask-content overlay-front gold">
                <?php if( get_field('tile_10_icon') ): ?>
                <div class="icon tile10-icon" style="background-image: url(<?php the_field('tile_10_icon'); ?>);"></div>
                <?php endif; ?>
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <?php if( get_field('tile_10_title') ): ?>
                <h2 class="mask-title col-xs-10 col-xs-offset-1"><?php the_field('tile_10_title'); ?></h2>
                <?php endif; ?>              
                <div class="lines white col-xs-10 col-xs-offset-1"></div>
                <div class="mask-copy col-xs-10 col-xs-offset-1" onclick="void(0)">
                    <?php if( get_field('tile_10_text') ): ?>
                    <div class="brake-small"></div><?php the_field('tile_10_text'); ?><div class="brake-small"></div>
                    <?php endif; ?>
                </div>
            </div>
    </div>
    
</div><!-- box -->


<!-- ************ EXPAND TOP SLIDER - SLIDE 1 ************* -->
<script type="text/javascript" charset="utf-8">
    jQuery( "#expand-1" ).click(function() {
  jQuery( "#showHide-1" ).slideToggle('slow', function() {
      var label = document.getElementById("expand-1");
        if (jQuery(this).is(':visible')) {
             label.style.background = "url('wp-content/themes/dranoff_southstar/images/icons/collapse-3.svg') no-repeat right center";               
        } else { 
            label.style.background = "url('wp-content/themes/dranoff_southstar/images/icons/expand-3.svg') no-repeat right center";
        }        
    });       
});
</script>

<!-- ************ EXPAND TOP SLIDER - SLIDE 2 ************* -->
<script type="text/javascript" charset="utf-8">
    jQuery( "#expand-2" ).click(function() {
  jQuery( "#showHide-2" ).slideToggle('slow', function() {
      var label = document.getElementById("expand-2");
        if (jQuery(this).is(':visible')) {
             label.style.background = "url('wp-content/themes/dranoff_southstar/images/icons/collapse-3.svg') no-repeat right center";               
        } else { 
            label.style.background = "url('wp-content/themes/dranoff_southstar/images/icons/expand-3.svg') no-repeat right center";
        }      
    });       
});
</script>

<!-- ************ EXPAND TOP SLIDER - SLIDE 3 ************* -->
<script type="text/javascript" charset="utf-8">
    jQuery( "#expand-3" ).click(function() {
  jQuery( "#showHide-3.slider-description" ).slideToggle('slow', function() {
      var label = document.getElementById("expand-3");
        if (jQuery(this).is(':visible')) {
             label.style.background = "url('wp-content/themes/dranoff_southstar/images/icons/collapse-3.svg') no-repeat right center";               
        } else { 
            label.style.background = "url('wp-content/themes/dranoff_southstar/images/icons/expand-3.svg') no-repeat right center";
        }     
    });       
});
</script>

<!-- ************ EXPAND TOP SLIDER - SLIDE 4 ************* -->
<script type="text/javascript" charset="utf-8">
    jQuery( "#expand-4" ).click(function() {
  jQuery( "#showHide-4." ).slideToggle('slow', function() {
      var label = document.getElementById("expand-4");
         if (jQuery(this).is(':visible')) {
             label.style.background = "url('wp-content/themes/dranoff_southstar/images/icons/collapse-3.svg') no-repeat right center";               
        } else { 
            label.style.background = "url('wp-content/themes/dranoff_southstar/images/icons/expand-3.svg') no-repeat right center";
        }
    });       
});
</script>

<!-- ************* FLEXSLIDER ************ -->
<script type="text/javascript" charset="utf-8">             
jQuery(window).load(function($) {
jQuery('.flexslider').flexslider({
    animation: "slide",
    directionNav: true,
    slideshow: true,
    controlNav: false,
    slideshowSpeed: 4000,
    animationSpeed: 600
});
});
</script>


<!-- ************ EXPAND TOP SLIDER MOBILE - SLIDE 1 ************* -->
<script type="text/javascript" charset="utf-8">
    jQuery( "#expand-small-1" ).click(function() {
  jQuery( "#showHide-small-1" ).slideToggle('slow', function() {
      var label = document.getElementById("expand-small-1");
        if (jQuery(this).is(':visible')) {
             document.getElementById("expand-small-1").style.background = "url('wp-content/themes/dranoff_southstar/images/icons/collapse-3.svg') no-repeat right center";
        } else { 
            document.getElementById("expand-small-1").style.background = "url('wp-content/themes/dranoff_southstar/images/icons/expand-3.svg') no-repeat right center";
        }        
    });       
});
</script>

<!-- ************ EXPAND TOP SLIDER MOBILE - SLIDE 2 ************* -->
<script type="text/javascript" charset="utf-8">
    jQuery( "#expand-small-2" ).click(function() {
  jQuery( "#showHide-small-2" ).slideToggle('slow', function() {
      var label = document.getElementById("expand-small-2");
        if (jQuery(this).is(':visible')) {
             document.getElementById("expand-small-2").style.background = "url('wp-content/themes/dranoff_southstar/images/icons/collapse-3.svg') no-repeat right center";               
        } else { 
            document.getElementById("expand-small-2").style.background = "url('wp-content/themes/dranoff_southstar/images/icons/expand-3.svg') no-repeat right center";
        }        
    });       
});
</script>

<!-- ************ EXPAND TOP SLIDER MOBILE - SLIDE 3 ************* -->
<script type="text/javascript" charset="utf-8">
    jQuery( "#expand-small-3" ).click(function() {
  jQuery( "#showHide-small-3" ).slideToggle('slow', function() {
      var label = document.getElementById("expand-small-3");
        if (jQuery(this).is(':visible')) {
             document.getElementById("expand-small-3").style.background = "url('wp-content/themes/dranoff_southstar/images/icons/collapse-3.svg') no-repeat right center";
        } else { 
            document.getElementById("expand-small-3").style.background = "url('wp-content/themes/dranoff_southstar/images/icons/expand-3.svg') no-repeat right center";
        }        
    });       
});
</script>

<!-- ************ EXPAND TOP SLIDER MOBILE - SLIDE 4 ************* -->
<script type="text/javascript" charset="utf-8">
    jQuery( "#expand-small-4" ).click(function() {
  jQuery( "#showHide-small-4" ).slideToggle('slow', function() {
      var label = document.getElementById("expand-small-4");
        if (jQuery(this).is(':visible')) {
             document.getElementById("expand-small-4").style.background = "url('wp-content/themes/dranoff_southstar/images/icons/collapse-3.svg') no-repeat right center";               
        } else { 
            document.getElementById("expand-small-4").style.background = "url('wp-content/themes/dranoff_southstar/images/icons/expand-3.svg') no-repeat right center";
        }        
    });       
});
</script>


<!-- ************ EXPAND MIDDLE SLIDER MOBILE - SLIDE 1 ************* -->
<script type="text/javascript" charset="utf-8">
    jQuery( "#expand-small-21" ).click(function() {
  jQuery( "#showHide-small-21" ).slideToggle('slow', function() {
      var label = document.getElementById("expand-small-21");
        if (jQuery(this).is(':visible')) {
             document.getElementById("expand-small-21").style.background = "url('wp-content/themes/dranoff_southstar/images/icons/collapse-3.svg') no-repeat right center";
        } else { 
            document.getElementById("expand-small-21").style.background = "url('wp-content/themes/dranoff_southstar/images/icons/expand-3.svg') no-repeat right center";
        }        
    });       
});
</script>

<!-- ************ EXPAND MIDDLE SLIDER MOBILE - SLIDE 2 ************* -->
<script type="text/javascript" charset="utf-8">
    jQuery( "#expand-small-22" ).click(function() {
  jQuery( "#showHide-small-22" ).slideToggle('slow', function() {
      var label = document.getElementById("expand-small-22");
        if (jQuery(this).is(':visible')) {
             document.getElementById("expand-small-22").style.background = "url('wp-content/themes/dranoff_southstar/images/icons/collapse-3.svg') no-repeat right center";               
        } else { 
            document.getElementById("expand-small-22").style.background = "url('wp-content/themes/dranoff_southstar/images/icons/expand-3.svg') no-repeat right center";
        }        
    });       
});
</script>

<!-- ************ EXPAND MIDDLE SLIDER MOBILE - SLIDE 3 ************* -->
<script type="text/javascript" charset="utf-8">
    jQuery( "#expand-small-23" ).click(function() {
  jQuery( "#showHide-small-23" ).slideToggle('slow', function() {
      var label = document.getElementById("expand-small-23");
        if (jQuery(this).is(':visible')) {
             document.getElementById("expand-small-23").style.background = "url('wp-content/themes/dranoff_southstar/images/icons/collapse-3.svg') no-repeat right center";
        } else { 
            document.getElementById("expand-small-23").style.background = "url('wp-content/themes/dranoff_southstar/images/icons/expand-3.svg') no-repeat right center";
        }        
    });       
});
</script>

<!-- ************ EXPAND MIDDLE SLIDER MOBILE - SLIDE 4 ************* -->
<script type="text/javascript" charset="utf-8">
    jQuery( "#expand-small-24" ).click(function() {
  jQuery( "#showHide-small-24" ).slideToggle('slow', function() {
      var label = document.getElementById("expand-small-24");
        if (jQuery(this).is(':visible')) {
             document.getElementById("expand-small-24").style.background = "url('wp-content/themes/dranoff_southstar/images/icons/collapse-3.svg') no-repeat right center";               
        } else { 
            document.getElementById("expand-small-24").style.background = "url('wp-content/themes/dranoff_southstar/images/icons/expand-3.svg') no-repeat right center";
        }        
    });       
});
</script>




<?php get_footer(); ?>