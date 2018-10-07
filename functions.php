<?php
function joelkrause() {
	// wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
	wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
	wp_enqueue_style( 'joelkrause-style', get_stylesheet_uri(),false,'2.1','all');
	wp_enqueue_style( "style", get_stylesheet_directory_uri()."/library/css/main.css",false,'2.1','all');
	
}
add_action( 'wp_enqueue_scripts', 'joelkrause' );

register_nav_menus( array(
    'primary'   => __( 'Primary Menu' ),
) );

add_action('comment_post', 'ajaxify_comments',20, 2);
function ajaxify_comments($comment_ID, $comment_status){
  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
		switch($comment_status){
			case "0":
			wp_notify_moderator($comment_ID);
			case "1": //Approved comment
			echo "success";
			$commentdata =& get_comment($comment_ID, ARRAY_A);
			$post =& get_post($commentdata['comment_post_ID']);
			wp_notify_postauthor($comment_ID, $commentdata['comment_type']);
			break;
			default:
			echo "error";
		}
	exit;
	}
}

?>