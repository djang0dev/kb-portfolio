<?php

/**
 * Testimonial Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
if ( ! empty( $block ) ) {
	$id = 'kbcarousel-' . $block['id'];
}
if ( ! empty( $block['anchor'] ) ) {
	$id = $block['anchor'];
}
$className = 'kbcarousel';
if ( ! empty( $block['className'] ) ) {
	$className .= ' ' . $block['className'];
}
?>
<section class="section swiper-projects-section">
    <style>
        .project-page .project-image-single img {
            transition: .3s ease
        }

        .project-page .project-block:hover .project-image-single img {
            transform: scale(1.1)
        }

        .swiper-projects .project-image-single img {
            transform: scale3d(1.1, 1.1, 1.1);
            will-change: transform;
            transition: transform 1.4s ease
        }

        .swiper-projects .swiper-slide-active .project-image-single img,
        .swiper-projects .swiper-slide-duplicate-active .project-image-single img {
            transform: scale3d(1, 1, 1)
        }

    </style>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-6">
                <div class="section-title text-center">
                    <h2 class="title">Recent Projects</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="swiper swiper-projects">
                    <div class="swiper-wrapper">
						<?php if ( have_rows( 'carousel_slide' ) ): while ( have_rows( 'carousel_slide' ) ): the_row() ?>
                            <div class="swiper-slide">
                                <div class="project-block" data-color="#f3e0d8">
                                    <div class=" project-image-single rounded overflow-hidden">
                                        <img alt="" class="w-100 rounded" src="assets/images/projects/01.jpg">
                                    </div>
                                    <a class="project-content d-flex align-items-center justify-content-between mt-4 text-reset"
                                       href="project-single.html">
                                        <div>
                                            <h3 class="mb-1">Soul Whisperer</h3>
                                            <p class="mb-0">Consectetur adipisicing elitic dolorum</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project-block" data-color="#f3e0d8">
                                    <div class="project-image-single rounded overflow-hidden">
                                        <img alt="" class="w-100 rounded" src="assets/images/projects/01.jpg">
                                    </div>
                                    <a class="project-content d-flex align-items-center justify-content-between mt-4 text-reset"
                                       href="project-single.html">
                                        <div>
                                            <h3 class="mb-1">Soul Whisperer</h3>
                                            <p class="mb-0">Consectetur adipisicing elitic dolorum</p>
                                        </div>
                                        <div class="icon ms-4">
                                            <svg height="18px" version="1.1" viewBox="0 0 26 18" width="26px"
                                                 xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <g fill="none" fill-rule="evenodd" id="Design" stroke="none"
                                                   stroke-width="1">
                                                    <g fill="#191A1E"
                                                       id="Werk-1"
                                                       transform="translate(-220.000000, -2553.000000)">
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
						<?php endwhile; endif; ?>

                    </div>
                    <div class="swiper-project-controls">
                        <!-- pagination -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

