<?php get_header() ?>
<?php if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

	}
} ?>
<h2>index</h2>
<h1><?php the_title() ?></h1>
<div><?php the_content(); ?></div>
<?php get_footer() ?>
