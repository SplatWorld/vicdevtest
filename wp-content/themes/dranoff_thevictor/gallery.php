<?php
/*
Template Name: Gallery Page Template
*/

get_header(); ?>
 
<div class="gallery-container">
    <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="building">
                    <?php $images = get_field('building_gallery');
                        if( $images ): ?>
                            <div class="flexslider gallery">
                                <ul class="slides load gallery-slides">
                                    <?php foreach( $images as $image ): ?>
                                    <li style="background-image: url(<?php echo $image['url']; ?>);">
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div><!-- flexslider gallery -->
                        <?php endif; ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="units">
                    <?php $images = get_field('units_gallery');
                        if( $images ): ?>
                            <div class="flexslider gallery">
                                <ul class="slides gallery-slides">
                                    <?php foreach( $images as $image ): ?>
                                    <li style="background-image: url(<?php echo $image['url']; ?>);">
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div><!-- flexslider gallery -->
                        <?php endif; ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="neighborhood">
                    <?php $images = get_field('neighborhood_gallery');
                        if( $images ): ?>
                            <div class="flexslider gallery">
                                <ul class="slides gallery-slides">
                                    <?php foreach( $images as $image ): ?>
                                    <li style="background-image: url(<?php echo $image['url']; ?>);">
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div><!-- flexslider gallery -->
                        <?php endif; ?>
        
    </div>
  </div><!-- tab contenet -->
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" id="gold" class="active"><a href="#building" aria-controls="building" role="tab" data-toggle="tab">Building</a></li>
    <li role="presentation" id="victor-blue"><a href="#units" aria-controls="units" role="tab" data-toggle="tab">Units</a></li>
    <li role="presentation" id="dranoff-blue"><a href="#neighborhood" aria-controls="neighborhood" role="tab" data-toggle="tab">Neighborhood</a></li>
  </ul>

  
</div>


<!-- FlexSlider -->
<script type="text/javascript" charset="utf-8">
    
jQuery(window).load(function($) {
jQuery('.flexslider').flexslider({
    animation: "slide",
    directionNav: true,
    slideshow: true,
    slideshowSpeed: 4000,
    animationSpeed: 600,
    start: function(slider) {
        jQuery.flexloader(slider, { 'background_images': true });
    },
    after: function(slider) {
        jQuery.flexloader(slider, { 'background_images': true });
    }
});
});

</script>

<script type="text/javascript" charset="utf-8">
jQuery(function($) {
$('.nav-tabs a').each(function() {
  var $this = $(this);
  $this.click(function (e) {
    e.preventDefault();
    $this.tab('show');
    $(window).trigger('resize');
  });
});
    });
</script>

<?php get_footer(); ?>
