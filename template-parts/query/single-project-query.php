<?php
/**
 * Ce fichier renvoie la custom WP_Query pour afficher sur la homepage les projects CPT
 * */
$singleArgs = [
	'post_type'      => 'project',
	'post_status'    => 'publish',
	'posts_per_page' => 2,
	'orderby'        => 'rand',
	'post__not_in'   => [ get_the_ID() ],


];
$singleLoop = new WP_Query( $singleArgs );

?>
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title mb-6">
                    <h2 class="title"><?= __( 'More Projects', 'kb' ) ?></h2>
                </div>
            </div>
        </div>

        <div class="row g-5 justify-content-center project-page">
			<?php while ( $singleLoop->have_posts() ) : $singleLoop->the_post(); ?>
                <div class="col-md-5">
                    <a class="project-block d-block text-reset" data-color="<?php the_field( 'single-main-color' ) ?>"
                       href="<?php the_permalink(); ?>">
                        <div class="project-image rounded overflow-hidden">
                            <img class="w-100 rounded" src="<?= get_the_post_thumbnail_url( get_post(), 'full' ) ?>"
                                 alt="">
                        </div>
                        <div class="project-content d-flex align-items-center justify-content-between mt-4">
                            <div>
                                <h3 class="mb-1"><?php the_title(); ?></h3>
                                <p class="mb-0"><?php the_excerpt(); ?></p>
                            </div>
                            <div class="icon ms-4">
                                <svg width="26px" height="18px" viewBox="0 0 26 18" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="Design" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Werk-1" transform="translate(-220.000000, -2553.000000)" fill="#191A1E">
                                            <g id="Group-12" transform="translate(170.000000, 2211.000000)">
                                                <path d="M63.9305435,360.256408 L70.0630489,354.123902 L71.4695733,355.530427 L64.38624,362.61376 L62.9695733,364.030427 L54.5304267,355.59128 L55.9470934,354.174613 L61.9270743,360.154594 L61.9270743,338 L63.9305435,338 L63.9305435,360.256408 Z"
                                                      id="Combined-Shape"
                                                      transform="translate(63.000000, 351.000000) rotate(-90.000000) translate(-63.000000, -351.000000) "></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
			<?php endwhile; ?>
        </div>

    </div>
</section>
