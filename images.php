<?php
// enregistrement de nouvelles tailles d'images
add_action( 'after_setup_theme', function () {
	add_image_size( 'project-thumbnail', 926, 522, true );

} );
