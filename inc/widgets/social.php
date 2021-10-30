<?php
/*
 * Widget personnalisé en utilisant et en étendant la classe WP_Widget
 * */

class KB_Social_Widget extends WP_Widget {
	public array $fields = [];

	public function __construct() {
		parent::__construct( 'kb_social_widget', __( 'Social widget', 'kb' ) );
		$this->fields = [
			'twitter'  => 'Twitter',
			'facebook' => 'Facebook',
			'linkedin' => 'Linkedin',
			'github'   => 'Github',

		];
	}

	public function widget( $args, $instance ): void {
		echo $args['before_widget'];
		if ( isset( $instance['title'] ) ) {
			$title = apply_filters( 'widget_title', $instance['title'] );
			echo $args['before_title'] . $title . $args['after_title'];

		}
		$template = locate_template( 'template-parts/widgets/social.php' );
		if ( ! empty( $template ) ) {
			include_once $template;
		}
		echo $args['after_widget'];

	}

	public function form( $instance ): void {
		foreach ( $this->fields as $field => $label ) {
			$value = $instance[ $field ] ?? '';
			?>
            <p>
                <label for="<?= $this->get_field_id( $field ) ?>"><?= esc_html( $label ) ?></label>
                <input type="text" class="widefat" name="<?= $this->get_field_name( $field ) ?>"
                       id="<?= $this->get_field_id( $field ) ?>" value="<?= esc_attr( $value ) ?>">
            </p>
			<?php

		}
	}


}