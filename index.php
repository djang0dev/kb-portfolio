<?php get_header(); ?>


<!-- start of banner -->
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="heading">
                    <span><?= __( 'Hi,', 'kb' ) ?><img class="rounded-pill"
                                                       src="<?= wp_get_attachment_image_url( get_field( 's1-img' ), 'full' ) ?>"
                                                       alt="<?= __( 'Profil picture', 'kb' ) ?>"> <?= __( 'I\'m Kinane', 'kb' ) ?></span>
                    <span><?= __( 'Web Developer & Growth Hacker', 'kb' ) ?></span>
                    <span><?= __( 'based in', 'kb' ) ?> <img
                                src="<?= wp_get_attachment_image_url( get_field( 's1-country' ), 'full' ) ?>"
                                alt="*"><?= __( ' France', 'kb' ) ?></span>
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- end of banner -->

<!-- start of intro -->
<section class="section bg-light-soft">
    <div class="container">
        <div class="row justify-content-center gy-4 gx-6">
            <div class="col-xl-5 col-lg-8">
                <div class="section-title mb-4">
                    <h2 class="title"><?= __( 'How can I help you?', 'kb' ) ?></h2>
                </div>
                <p class="lead"><?= __( 'As a Web developer, I am here to make you stand out in the digital world.
                    The combination of my passion for web development and your vision will ensure a great end
                    result.', 'kb' ) ?></p>
                <div class="mt-5 d-none d-xl-block">
                    <a class="btn" href="services.html">Services</a>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="row g-3">
                    <!-- service-item -->
                    <div class="col-xl-6 col-lg-4 col-sm-6">
                        <div class="service-item-sm rounded-sm bg-white font-weight-500 position-relative h-100">
                            <svg class="icon position-absolute" width="20" height="20" stroke-width="1.5"
                                 viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 7.4V3.6C3 3.26863 3.26863 3 3.6 3H9.4C9.73137 3 10 3.26863 10 3.6V7.4C10 7.73137 9.73137 8 9.4 8H3.6C3.26863 8 3 7.73137 3 7.4Z"
                                      stroke="currentColor" stroke-width="1.5"/>
                                <path d="M14 20.4V16.6C14 16.2686 14.2686 16 14.6 16H20.4C20.7314 16 21 16.2686 21 16.6V20.4C21 20.7314 20.7314 21 20.4 21H14.6C14.2686 21 14 20.7314 14 20.4Z"
                                      stroke="currentColor" stroke-width="1.5"/>
                                <path d="M14 12.4V3.6C14 3.26863 14.2686 3 14.6 3H20.4C20.7314 3 21 3.26863 21 3.6V12.4C21 12.7314 20.7314 13 20.4 13H14.6C14.2686 13 14 12.7314 14 12.4Z"
                                      stroke="currentColor" stroke-width="1.5"/>
                                <path d="M3 20.4V11.6C3 11.2686 3.26863 11 3.6 11H9.4C9.73137 11 10 11.2686 10 11.6V20.4C10 20.7314 9.73137 21 9.4 21H3.6C3.26863 21 3 20.7314 3 20.4Z"
                                      stroke="currentColor" stroke-width="1.5"/>
                            </svg>
                            <span class="d-inline-block">UI/UX Design</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 d-block d-xl-none">
                <a class="btn mt-2" href="services.html">Services</a>
            </div>
        </div>
    </div>
</section>
<!-- end of intro -->

<!-- start of projects -->
<section class="section swiper-projects-section">
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
                        <div class="swiper-slide">
                            <div class="project-block" data-color="#f3e0d8">
                                <div class="project-image rounded overflow-hidden">
                                    <img class="w-100 rounded" src="assets/images/projects/01.jpg" alt="">
                                </div>
                                <a class="project-content d-flex align-items-center justify-content-between mt-4 text-reset"
                                   href="project-single.html">
                                    <div>
                                        <h3 class="mb-1">Soul Whisperer</h3>
                                        <p class="mb-0">Consectetur adipisicing elitic dolorum</p>
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
                        <div class="swiper-slide">
                            <div class="project-block" data-color="#fee3cd">
                                <div class="project-image rounded overflow-hidden">
                                    <img class="w-100 rounded" src="assets/images/projects/02.jpg" alt="">
                                </div>
                                <a class="project-content d-flex align-items-center justify-content-between mt-4 text-reset"
                                   href="project-single.html">
                                    <div>
                                        <h3 class="mb-1">Lava</h3>
                                        <p class="mb-0">Consectetur adipisicing elit. Hic, dolorum.</p>
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
                        <div class="swiper-slide">
                            <div class="project-block" data-color="#d6dcf5">
                                <div class="project-image rounded overflow-hidden">
                                    <img class="w-100 rounded" src="assets/images/projects/03.jpg" alt="">
                                </div>
                                <a class="project-content d-flex align-items-center justify-content-between mt-4 text-reset"
                                   href="project-single.html">
                                    <div>
                                        <h3 class="mb-1">Avatar</h3>
                                        <p class="mb-0">We explored avatars that deviate from human form</p>
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
                        <div class="swiper-slide">
                            <div class="project-block" data-color="#feeecd">
                                <div class="project-image rounded overflow-hidden">
                                    <img class="w-100 rounded" src="assets/images/projects/04.jpg" alt="">
                                </div>
                                <a class="project-content d-flex align-items-center justify-content-between mt-4 text-reset"
                                   href="project-single.html">
                                    <div>
                                        <h3 class="mb-1">Mark's Chocolate</h3>
                                        <p class="mb-0">Consectetur adipisicing elit. Hic, dolorum.</p>
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
                        <div class="swiper-slide">
                            <div class="project-block" data-color="#f8d3d4">
                                <div class="project-image rounded overflow-hidden">
                                    <img class="w-100 rounded" src="assets/images/projects/05.jpg" alt="">
                                </div>
                                <a class="project-content d-flex align-items-center justify-content-between mt-4 text-reset"
                                   href="project-single.html">
                                    <div>
                                        <h3 class="mb-1">Sol Mexican Grill</h3>
                                        <p class="mb-0">Sol Mexican Grill is a Mexican restaurant</p>
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
                        <div class="swiper-slide">
                            <div class="project-block" data-color="#d8f3e6">
                                <div class="project-image rounded overflow-hidden">
                                    <img class="w-100 rounded" src="assets/images/projects/06.jpg" alt="">
                                </div>
                                <a class="project-content d-flex align-items-center justify-content-between mt-4 text-reset"
                                   href="project-single.html">
                                    <div>
                                        <h3 class="mb-1">AKERMUS</h3>
                                        <p class="mb-0">It is a skincare brand based in Canada</p>
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

                <div class="text-center pt-4">
                    <a class="btn" href="projects.html">All Projects</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of projects -->

<!-- start of projects -->
<section class="section border-top border-color">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-6">
                <div class="section-title text-center">
                    <h2 class="title">I've Worked With</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row g-5 align-items-center justify-content-center">
                    <div class="col-lg-3 col-md-3 col-6 text-center">
                        <img class="img-fluid brand-logo" src="assets/images/brands/01.png" alt="brand">
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 text-center">
                        <img class="img-fluid brand-logo" src="assets/images/brands/06.png" alt="brand">
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 text-center">
                        <img class="img-fluid brand-logo" src="assets/images/brands/03.png" alt="brand">
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 text-center">
                        <img class="img-fluid brand-logo" src="assets/images/brands/04.png" alt="brand">
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 text-center">
                        <img class="img-fluid brand-logo" src="assets/images/brands/05.png" alt="brand">
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 text-center">
                        <img class="img-fluid brand-logo" src="assets/images/brands/02.png" alt="brand">
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 text-center">
                        <img class="img-fluid brand-logo" src="assets/images/brands/07.png" alt="brand">
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 text-center">
                        <img class="img-fluid brand-logo" src="assets/images/brands/08.png" alt="brand">
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 text-center">
                        <img class="img-fluid brand-logo" src="assets/images/brands/03.png" alt="brand">
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 text-center">
                        <img class="img-fluid brand-logo" src="assets/images/brands/04.png" alt="brand">
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 text-center">
                        <img class="img-fluid brand-logo" src="assets/images/brands/05.png" alt="brand">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of projects -->


<?php get_footer(); ?>
