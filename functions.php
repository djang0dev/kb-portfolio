<?php
// require theme supports
require_once( 'inc/supports.php' );
// include assets css & js
//require_once( 'inc/lib.php' );
require_once( 'inc/assets.php' );
require_once( 'menus.php' );
require_once( 'images.php' );

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