<?php
function stonecanyon_cpt() {
    $args1 = array(
        'public' => true,
        'label'  => 'Homes',
         'menu_icon' => 'dashicons-admin-home',
		'supports' => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'homes', $args1 );
    
    $args = array(
        'public' => true,
        'label'  => 'Testimonials Items',
         'menu_icon' => 'dashicons-admin-users',
		'supports' => array( 'title', 'editor' )
    );
    register_post_type( 'testimonials', $args );
    
}
add_action( 'init', 'stonecanyon_cpt' );
