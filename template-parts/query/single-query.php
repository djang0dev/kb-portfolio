<?php

$singleArgs = [
	'post_type'      => get_post_type(),
	'post_status'    => 'publish',
	'posts_per_page' => 2,
	'orderby'        => 'rand',
	'post__not_in'   => [ get_the_ID() ],


];
$singleLoop = new WP_Query( $singleArgs );
?>

<!-- start of blog -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title mb-6">
                    <h2 class="title"><?= __( 'Related posts', 'kb' ) ?></h2>
                </div>
            </div>
        </div>
        <div class="row g-5 justify-content-center">
			<?php while ( $singleLoop->have_posts() ) : $singleLoop->the_post(); ?>
                <div class="col-lg-5 col-md-6 text-center">
                    <a class="d-block mb-5 blog-thumbnail overflow-hidden rounded" href="<?php the_permalink(); ?>"><img
                                class="img-fluid rounded"
                                loading="lazy"
                                src="<?= get_the_post_thumbnail_url( get_post(), 'more-project-thumbnail' ) ?>"
                                alt="blog post thumbnail"></a>
                    <ul class="text-uppercase small mb-3 list-inline">
                        <li class="list-inline-item"><a
                                    href="<?= kb_get_url_category( kb_get_category( get_the_category() ) ); ?>"
                                    class="btn-link font-tertiary"><?= kb_get_category( get_the_category() ); ?></a>
                        </li>
                    </ul>
                    <h3 class="mb-3"><a class="text-dark text-hover-underline-slim"
                                        href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>

                    <span class="font-primary lh-1">06 min read</span>
                </div>
			<?php endwhile;
			wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<!-- end of blog -->