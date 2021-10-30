<?php
/**
 * Ce fichier renvoie la custom WP_Query pour afficher sur la homepage les projects CPT
 * */
$hpArgs = [
	'post_type'      => 'project',
	'post_status'    => 'publish',
	'posts_per_page' => 5,
	'orderby'        => 'date',

];
$hpLoop = new WP_Query( $hpArgs );

?>
<div class="swiper swiper-projects">
    <div class="swiper-wrapper">
		<?php while ( $hpLoop->have_posts() ) : $hpLoop->the_post(); ?>
            <div class="swiper-slide">
                <div class="project-block" data-color="<?php the_field( 'single-main-color' ) ?>">
                    <div class="project-image rounded overflow-hidden">
                        <img class="w-100 rounded"
                             src="<?= get_the_post_thumbnail_url( get_post(), 'full' ) ?>" alt="">
                    </div>
                    <a class="project-content d-flex align-items-center justify-content-between mt-4 text-reset"
                       href="<?php the_permalink(); ?>">
                        <div>
                            <h3 class="mb-1"><?php the_title() ?></h3>
                            <p class="mb-0"><?php the_excerpt(); ?></p>
                        </div>
                        <div class="icon ms-4">
                            <svg width="26px" height="18px" viewBox="0 0 26 18" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg"
                            >
                                <g id="Design" stroke="none" stroke-width="1" fill="none"
                                   fill-rule="evenodd">
                                    <g id="Werk-1"
                                       transform="translate(-220.000000, -2553.000000)"
                                       fill="#191A1E">
                                        <g id="Group-12"
                                           transform="translate(170.000000, 2211.000000)">
                                            <path d="M63.9305435,360.256408 L70.0630489,354.123902 L71.4695733,355.530427 L64.38624,362.61376 L62.9695733,364.030427 L54.5304267,355.59128 L55.9470934,354.174613 L61.9270743,360.154594 L61.9270743,338 L63.9305435,338 L63.9305435,360.256408 Z"
                                                  id="Combined-Shape"
                                                  transform="translate(63.000000, 351.000000) rotate(-90.000000) translate(-63.000000, -351.000000) "></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
		<?php endwhile; ?>
    </div>
    <div class="swiper-project-controls">
        <!-- pagination -->
        <div class="swiper-pagination"></div>

        <!-- navigation buttons -->
        <div class="swiper-prev is-hoverable">
            <svg width="26px" height="18px" viewBox="0 0 26 18" version="1.1"
                 xmlns="http://www.w3.org/2000/svg"
            >
                <g id="Design" stroke="none" stroke-width="1" fill="none"
                   fill-rule="evenodd">
                    <g id="Werk-1" transform="translate(-220.000000, -2553.000000)"
                       fill="#191A1E">
                        <g id="Group-12" transform="translate(170.000000, 2211.000000)">
                            <path d="M63.9305435,360.256408 L70.0630489,354.123902 L71.4695733,355.530427 L64.38624,362.61376 L62.9695733,364.030427 L54.5304267,355.59128 L55.9470934,354.174613 L61.9270743,360.154594 L61.9270743,338 L63.9305435,338 L63.9305435,360.256408 Z"
                                  id="Combined-Shape"
                                  transform="translate(63.000000, 351.000000) rotate(-90.000000) translate(-63.000000, -351.000000) "></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="swiper-next is-hoverable">
            <svg width="26px" height="18px" viewBox="0 0 26 18" version="1.1"
                 xmlns="http://www.w3.org/2000/svg"
            >
                <g id="Design" stroke="none" stroke-width="1" fill="none"
                   fill-rule="evenodd">
                    <g id="Werk-1" transform="translate(-220.000000, -2553.000000)"
                       fill="#191A1E">
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
</div>