<?php
/*
 * Widget personnalisé en utilisant étendant la classe WP_Widget
 * */

class KB_Social_Widget extends WP_Widget {
	public array $fields = [];

	public function __construct() {
		parent::__construct( 'kb_social_widget', __( 'Social widget', 'kb' ) );
		$this->fields = [
			'twitter'   => 'Twitter',
			'facebook'  => 'Facebook',
			'instagram' => 'Instagram',

		];
	}

	public function widget( array $args, array $instance ): void {
		echo $args['before_widget'];
		

		echo $args['after_widget'];

	}


}