<?php
function nordic_style(){
  wp_enqueue_style( 'nordic_fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(),  null );

  wp_enqueue_style( 'nordic-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'nordic_style' );

function nordic_scripts() {
  wp_enqueue_script( 'nordic-bundle', get_template_directory_uri() . '/assets/js/bundle.js', array(), '20151215', true );

  wp_enqueue_script( 'delete-title', get_template_directory_uri() . '/assets/js/delete-title.js', array(), '20151215', true );

	wp_enqueue_script( 'nordic-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'nordic-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nordic_scripts' );
