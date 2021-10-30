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

// widgets

require_once( 'inc/widgets/social.php' );
add_action( 'widgets_init', function () {
	// declare footer widget zone
	register_widget( KB_Social_Widget::class );
	register_sidebar( [
		                  'id'            => 'footer-social',
		                  'name'          => __( 'Footer Social', 'kb' ),
		                  'before_title'  => '<div class="footer__title">',
		                  'after_title'   => '</div>',
		                  'before_widget' => '<div class="footer__col">',
		                  'after_widget'  => '</div>'
	                  ] );


} );

