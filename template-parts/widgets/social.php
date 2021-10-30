<?php
$networks = [
	'twitter'  => 'Twitter',
	'facebook' => 'Facebook',
	'linkedin' => 'Linkedin',
	'github'   => 'Github',
]
?>
<!--</div>-->
<div class="footer__social">
	<?php foreach ( $networks as $name => $label ): ?>
		<?php if ( ! empty( $instance[ $name ] ) ): ?>
            <li class="list-inline-item">
                <a class="text-hover-underline-initial text-white" href="<?= esc_url( $instance[ $name ] ) ?>"
                   title="<?= sprintf( esc_attr( 'Nous suivre sur %s', 'kb' ), $label ) ?>">
                    <img height="25" src="<?= kb_icon( $name ) ?>" alt="">
					<?= $label ?>
                </a>
            </li>
		<?php endif; ?>
	<?php endforeach; ?>
</div>