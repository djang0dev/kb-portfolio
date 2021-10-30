<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <!-- start of page-header -->
    <div class="page-header section position-relative">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-2">
                    <div class="section-title mt-3">
                        <p class="title text-uppercase pt-3">Project</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="section-title mb-3">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <ul class="list-unstyled list-inline">
						<?php if ( get_field( 'single-client' ) ): ?>
                            <div class="list-inline-item mt-4 me-6">
                                <p class="small text-uppercase"><?= __( 'Client', 'kb' ) ?></p>
                                <p class="text-black"><?php the_field( 'single-client' ); ?></p>
                            </div>
						<?php endif; ?>
                        <div class="list-inline-item mt-4 me-6">
                            <p class="small text-uppercase"><?= _n( 'Service', 'Services', count( get_field( 'single-service' ) ), 'kb' ) ?></p>
                            <p class="text-black"><?= kb_get_services( get_field( 'single-service' ) ) ?></p>
                        </div>
                        <div class="list-inline-item mt-4 me-6">
                            <p class="small text-uppercase"><?= _x( 'Date', 'kb', 'date in single project post' ) ?></p>
                            <p class="text-black"><?= get_the_date() ?></p>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end of page-header -->

    <!-- start of project details -->
	<?php if ( has_post_thumbnail() ): ?>
        <section class="bg-light-soft project-details-image">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- project-image -->
                    <div class="col-lg-10">
                        <img class="w-100 rounded" loading="lazy"
                             src="<?= get_the_post_thumbnail_url( get_post(), 'project-thumbnail' ) ?>"
                             alt="project image">
                    </div>
                </div>
            </div>
        </section>
	<?php endif; ?>

    <!-- start of project-content -->
    <section class="bg-light-soft section project-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="content">
						<?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of project details -->

    <!-- start of project -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title mb-6">
                        <h2 class="title">More Projects</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-center project-page">
                <div class="col-md-5">
                    <a class="project-block d-block text-reset" data-color="#f8d3d4" href="#!">
                        <div class="project-image rounded overflow-hidden">
                            <img class="w-100 rounded" src="assets/images/projects/05.jpg" alt="">
                        </div>
                        <div class="project-content d-flex align-items-center justify-content-between mt-4">
                            <div>
                                <h3 class="mb-1">Sol Mexican Grill</h3>
                                <p class="mb-0">Sol Mexican Grill is a Mexican restaurant</p>
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
                <div class="col-md-5">
                    <a class="project-block d-block text-reset" data-color="#d8f3e6" href="#!">
                        <div class="project-image rounded overflow-hidden">
                            <img class="w-100 rounded" src="assets/images/projects/06.jpg" alt="">
                        </div>
                        <div class="project-content d-flex align-items-center justify-content-between mt-4">
                            <div>
                                <h3 class="mb-1">AKERMUS</h3>
                                <p class="mb-0">It is a skincare brand based in Canada</p>
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
            </div>
        </div>
    </section>
    <!-- end of project -->
<?php endwhile; ?>

<?php get_footer(); ?>
