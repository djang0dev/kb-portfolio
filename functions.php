<?php
// require theme supports
require_once( 'inc/supports.php' );
// include assets css & js
//require_once( 'inc/lib.php' );
require_once( 'inc/assets.php' );
require_once( 'menus.php' );

// fonction custom pour trouver les widgets uniquement avec leur filename
function kb_icon( string $icon ): string {
	return get_template_directory_uri() . '/assets/icons/' . $icon . '.svg';
}