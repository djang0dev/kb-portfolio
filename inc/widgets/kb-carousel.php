<?php
add_action( 'acf/init', 'my_acf_init_block_types' );
function my_acf_init_block_types() {

	// Check function exists.
	if ( function_exists( 'acf_register_block_type' ) ) {

		// register a testimonial block.
		acf_register_block_type( array(
			                         'name'            => 'kb-carousel',
			                         'title'           => __( 'CarouselKB', 'kb' ),
			                         'description'     => __( 'A custom carousel block.' ),
			                         'render_template' => 'template-parts/blocks/carousel/kb-carousel.php',
			                         'category'        => 'formatting',
			                         'icon'            => 'dashicons-image-flip-horizontal',
			                         'keywords'        => array( 'carousel', 'kb', 'carouselKb', 'custom' ),
		                         ) );
	}
}