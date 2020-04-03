<?php

// Testimonial
function stonecanyon_shortcode($para, $content){
    $para = shortcode_atts(array(
    
    ), $para); ob_start(); ?>



<?php 
    return ob_get_clean(); }
    
add_shortcode( 'testimonials', 'stonecanyon_shortcode' );
