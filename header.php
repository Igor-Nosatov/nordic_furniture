<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nordic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="header">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg">
						<a href="<?php echo get_home_url(); ?>"><?php the_custom_logo(); ?></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fas fa-bars fa-lg"></i>
						</button>
						<div class="collapse navbar-collapse" id="navbarCollapse">
							<?php
							wp_nav_menu(array(
								'theme_location'    => 'header-menu1',
								'depth'             => 0,
								'container'         => '',
								'menu_class'        => 'navbar-nav mr-auto mx-auto display-sm-none',
							));
							?>
							<?php
							wp_nav_menu(array(
								'theme_location'    => 'mobile-menu',
								'depth'             => 0,
								'container'         => '',
								'menu_class'        => 'nav flex-column font-weight-bold text-dark display-md-none',
							));
							?>
							
							
							<a class="cart-customlocation" href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?> " title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
							<a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>"><button class="shop-button">Buy Now</button></a>
						</div>
					</nav>
				</div>
			</div>
		</div>

	</header>