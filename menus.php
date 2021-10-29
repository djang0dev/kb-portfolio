<?php
add_action( 'after_setup_theme', function () {
	// register main menu
	register_nav_menu( 'header', __( 'Main Navigation', 'kb' ) );
	// register menu
	register_nav_menu( 'footer', __( 'Footer Navigation', 'kb' ) );
} );


/*
 * Changer la classe des li suivant le menu
 * à ajouter dans wp_nav menu
 * */
function kb_menu_class( $classes, $item, $args ) {
	if ( property_exists( $args, 'list_item_class' ) ) {
		$classes[] = $args->list_item_class;
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'kb_menu_class', 1, 3 );

/*
 * Changer la classe des li > a (des liens a) suivant le menu
 * à ajouter dans wp_nav menu
 * */

function kb_menu_link_class( $atts, $item, $args ) {
	if ( property_exists( $args, 'link_class' ) ) {
		$atts['class'] = $args->link_class;
	}

	return $atts;
}

add_filter( 'nav_menu_link_attributes', 'kb_menu_link_class', 1, 3 );