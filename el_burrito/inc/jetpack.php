<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package el_burrito
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function el_burrito_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'el_burrito_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function el_burrito_jetpack_setup
add_action( 'after_setup_theme', 'el_burrito_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function el_burrito_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function el_burrito_infinite_scroll_render
