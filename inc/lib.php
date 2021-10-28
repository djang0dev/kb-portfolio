<?php
add_action( 'wp_enqueue_scripts', 'kb_enqueue_lib' );
function kb_enqueue_lib() {
	// barba
	wp_enqueue_script( 'barba', get_template_directory_uri() . '/inc/lib/barba/barba.umd.js', [], false, true );
	wp_enqueue_script( 'barba-css', get_template_directory_uri() . '/inc/lib/barba/barba-css.umd.js', [], false, true );
	// bootstrap
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/inc/lib/bootstrap/bootstrap.min.js', [], false, true );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/lib/bootstrap/bootstrap.custom.min.css', [], false );
	// line awesome
	wp_enqueue_style( 'lineawesome-css', get_template_directory_uri() . '/inc/lib/line-awesome/line-awesome.min.css', [], false );
	// spinner
	wp_enqueue_style( 'spinner-css', get_template_directory_uri() . '/inc/lib/spinner/spinner.min.css', [], false );
	//swiper
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/inc/lib/swiper/swiper-bundle.min.js', [], false, true );
	wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/inc/lib/swiper/swiper-bundle.min.css', [], false );

}