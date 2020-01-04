<?php

function nordic_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nordic' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'nordic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Image', 'nordic' ),
		'id'            => 'footer-image',
		'description'   => esc_html__( 'Add widgets here.', 'nordic' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'nordic_widgets_init' );
