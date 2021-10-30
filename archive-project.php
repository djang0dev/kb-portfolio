<?php get_header() ?>

<!-- start of page-header -->
<div class="page-header section position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center">
                    <p class="small text-uppercase mb-4"><?= __( 'Portfolio', 'kb' ) ?></p>
                    <div class="section-title text-center">
                        <h1 class="title"><?= __( 'Projects', 'kb' ) ?></h1>
                    </div>
                </div>

                <div class="rotate-circle">
                    <svg class="rotateOnScroll circle-text bg-dark" viewBox="0 0 460 460">
                        <defs>
                            <path id="circle-button-text"
                                  d="M230,380 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z"></path>
                        </defs>
                        <text class="text-uppercase" style="font-size:38px;letter-spacing:7px">
                            <textPath fill="white"
                                      href="#circle-button-text"><?= _x( 'All Recent Projects — Portfolio —', 'kb', 'rotate circle project archive' ) ?>
                            </textPath>
                        </text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of page-header -->

<!-- start of projects -->
<section class="section bg-light-soft adjust-rotate-circle-spacing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row justify-content-between g-6 project-page">
					<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                        <div class="col-md-6">
                            <a class="project-block d-block text-reset"
                               data-color="<?php the_field( 'single-main-color' ) ?>"
                               href="<?php the_permalink(); ?>">
                                <div class="project-image rounded overflow-hidden">
                                    <img class="w-100 rounded"
                                         src="<?= get_the_post_thumbnail_url( get_post(), 'full' ) ?>" alt="">
                                </div>
                                <div class="project-content d-flex align-items-center justify-content-between mt-4">
                                    <div>
                                        <h3 class="mb-1"><?php the_title(); ?></h3>
                                        <p class="mb-0"><?php the_excerpt(); ?></p>
                                    </div>
                                    <div class="icon ms-4">
                                        <svg width="26px" height="18px" viewBox="0 0 26 18" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg">
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
                            </a>
                        </div>
					<?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of projects -->
</div>
<?php get_footer() ?>
