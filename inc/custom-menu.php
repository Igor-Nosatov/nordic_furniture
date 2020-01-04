<?php

function header_menu1_link( $atts, $item, $args ) {
		if($args->theme_location == 'header-menu1') {
			$atts['class'] = 'nav-link nav-link-header';
		}
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'header_menu1_link', 10, 3 );


function header_menu1_classes($classes, $item, $args) {
  if($args->theme_location == 'header-menu1') {
    $classes[] = 'nav-item nav-item-header';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'header_menu1_classes', 1, 3);


function header_menu2_link( $atts, $item, $args ) {
		if($args->theme_location == 'header-menu2') {
			$atts['class'] = 'nav-link';
		}
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'header_menu2_link', 10, 3 );


function header_menu2_classes($classes, $item, $args) {
  if($args->theme_location == 'header-menu2') {
    $classes[] = 'nav-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'header_menu2_classes', 1, 3);



function mobile_menu_menu_link( $atts, $item, $args ) {
		if($args->theme_location == 'mobile-menu') {
			$atts['class'] = 'nav-link';
		}
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'mobile_menu_menu_link', 10, 3 );


function mobile_menu_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'mobile-menu') {
    $classes[] = 'nav-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'mobile_menu_menu_classes', 1, 3);



function footer1_link( $atts, $item, $args ) {
		if($args->theme_location == 'footer-menu1') {
			$atts['class'] = 'nav-link';
		}
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'footer1_link', 10, 3 );


function footer1_classes($classes, $item, $args) {
  if($args->theme_location == 'footer-menu1') {
    $classes[] = 'nav-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'footer1_classes', 1, 3);

function footer2_link( $atts, $item, $args ) {
		if($args->theme_location == 'footer-menu2') {
			$atts['class'] = 'nav-link';
		}
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'footer2_link', 10, 3 );


function footer2_classes($classes, $item, $args) {
  if($args->theme_location == 'footer-menu2') {
    $classes[] = 'nav-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'footer2_classes', 1, 3);
 ?>
