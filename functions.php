<?php
// require theme supports
require_once( 'inc/supports.php' );
// include assets css & js
//require_once( 'inc/lib.php' );
require_once( 'inc/assets.php' );
require_once( 'menus.php' );
require_once( 'images.php' );
require_once( 'inc/widgets/kb-carousel.php' );

// fonction custom pour trouver les widgets uniquement avec leur filename
function kb_icon( string $icon ): string {
	return get_template_directory_uri() . '/assets/icons/' . $icon . '.svg';
}

function kb_get_services( array $services ): string {
	$acc = '';
	foreach ( $services as $key => $service ) {
		if ( array_key_last( get_field( 'single-service' ) ) === $key ) {
			$acc .= ucfirst( $service );
		} else {
			$acc .= ucfirst( $service ) . ', ';
		}
	}

	return $acc;
}

function kb_get_category( array $categories ): string {
	if ( $categories[0] ) {
		return $categories[0]->cat_name;
	}

	return false;
}

function kb_get_url_category( string $category ): string {
	return get_category_link( get_category_by_slug( $category ) );
}

function my_custom_upload_mimes( $mimes = array() ) {

// Add a key and value for the CSV file type
	$mimes['glb'] = "application/octet-stream";

	return $mimes;
}

add_action( 'upload_mimes', 'my_custom_upload_mimes' );