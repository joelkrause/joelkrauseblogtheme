<?php
function joelkrause() {
	wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
	wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
	wp_enqueue_style( 'joelkrause-style', get_stylesheet_uri() );
	
}
add_action( 'wp_enqueue_scripts', 'joelkrause' );

register_nav_menus( array(
    'primary'   => __( 'Primary Menu' ),
) );
?>