<?php
/*
Template Name: Contact Page Template
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="third-box-contact left">
    <div class="left-half-contact">
        <div class="blue-overlay-contact blue-thevictor">
            <div class="contact-title-container">
                    <h1 class="page-title-contact"><?php the_title(); ?></h1>
            </div> <!-- end contact title container -->        
            
       </div><!-- end blue overlay contact -->
        <p class="dranoff-text-contact"><?php the_field('contact_us_text'); ?></p>
        
<!--
        <div class="form-box">
            <?php
                $form = get_field( 'form' ); 
                echo do_shortcode($form);
            ?>
        </div>   
-->
        <div class="contact-button">
            <a href="#" class="showContactUs"><button>contact us now</button></a>
        </div>

    </div><!-- left-half -->


</div><!-- third-box-contact -->

<div class="two-thirds-box-contact">
  
        <div class="one-third-contact woman-in-cafe" style="background-image: url(<?php the_field('left_image'); ?>);"></div>
        <div class="one-third-contact left-bank-white">
            <div class="address-box">
                <div class="address-icon-contact"></div>
                <p class="address-title">Address</p> 
                <p class="left-bump-address"><?php the_field('address'); ?></p>
            </div>
        </div>  
        <div class="one-third-contact no-margin-right">
            <div class="address-box">
                <div class="hours-icon-contact"></div>
                <p class="address-title">Hours</p> 
                <p class="left-align"><?php the_field('hours'); ?></p>
                
            </div>
        </div>      
        
</div><!-- right two thirds -->


<div class="right-half-google-map">
    <?php
        $map = get_field( 'map' ); 
        echo do_shortcode($map);
    ?>
</div><!-- end right half google map -->

        
<?php endwhile; // end of the loop. ?>  



<?php get_footer(); ?>
