<?php
/*
Template Name: Press and Awards
*/

get_header(); ?>
 
<?php while ( have_posts() ) : the_post(); ?>

<div class="press-area">
    
    
    <div class="press-title-area">
        <div class="press-title">
            <!--<div class="icon-lines icon-lines-press col-xs-8 col-xs-offset-2"><img height="44" width="44" src="<?php echo get_template_directory_uri(); ?>/images/icons/amenities.svg"></div> -->
            <div class="lines col-xs-6 col-xs-offset-3"></div>
            <h1 class="page-title col-xs-6 col-xs-offset-3">Press</h1>
            <div class="lines col-xs-6 col-xs-offset-3"></div>
        </div>    
    </div>

    <div class="dranoff-text">
        <div class="press">
        <?php the_content(); ?>
        </div>
        <div class="press" id="showHide" style="display: none;">
            <?php the_field('hidden_press'); ?>
        </div>
        <button class="load-more bottom-margin" id="expand">Show More</button>
    </div>

</div><!-- press-area -->


<div class="awards-area">

    <div class="press-title-area">
        <div class="press-title">
            <!--<div class="icon-lines icon-lines-press col-xs-8 col-xs-offset-2"><img height="44" width="44" src="<?php echo get_template_directory_uri(); ?>/images/icons/amenities.svg"></div> -->
            <div class="lines col-xs-6 col-xs-offset-3"></div>
            <h1 class="page-title col-xs-6 col-xs-offset-3">Awards</h1>
            <div class="lines col-xs-6 col-xs-offset-3"></div>
        </div>    
    </div>

    <div class="dranoff-text">
        <div class="press awards">
            <?php the_field('visible_awards'); ?>
        </div>
        <!--
        <div class="press awards" id="showHide-awards" style="display: none;">
            <?php the_field('hidden_awards'); ?>
        </div>
        <button class="load-more bottom-margin" id="expand-awards">Show More</button>   
        -->
    </div>

</div>

<?php endwhile; // end of the loop. ?>  


<!-- ************ EXPAND/COLLAPSE PRESS ************* -->
<script type="text/javascript" charset="utf-8">
jQuery( "#expand" ).click(function() {
  jQuery( "#showHide" ).slideToggle("slow", "linear", function() {
      var label = document.getElementById("expand");
        if (jQuery(this).is(':visible')) {
             label.innerHTML = label.innerHTML.replace("Show More", "Show Less");

        } else { 
            label.innerHTML = label.innerHTML.replace("Show Less", "Show More");
        }
    });
});

jQuery( "#expand-awards" ).click(function() {
  jQuery( "#showHide-awards" ).slideToggle("slow", "linear", function() {
      var label = document.getElementById("expand-awards");
        if (jQuery(this).is(':visible')) {
             label.innerHTML = label.innerHTML.replace("Show More", "Show Less");

        } else { 
            label.innerHTML = label.innerHTML.replace("Show Less", "Show More");
        }
    });
});





</script> 



<?php get_footer(); ?>