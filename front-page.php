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
                    <h2 class="title"><?= get_field( 's2-title' ) ?></h2>
                </div>
                <p class="lead"><?= get_field( 's2-desc' ) ?></p>
                <div class="mt-5 d-none d-xl-block">
                    <a class="btn"
                       href="<?= _x( '/services/', 'kb', 'services btn s2' ) ?>"><?= _x( 'Services', 'kb', 'service text s2' ) ?></a>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="row g-3">
                    <!-- service-item -->
					<?php if ( have_rows( 'services' ) ): ?>
						<?php while ( have_rows( 'services' ) ): the_row(); ?>
                            <div class="col-xl-6 col-lg-4 col-sm-6">
                                <div class="service-item-sm rounded-sm bg-white font-weight-500 position-relative h-100">
                                    <img class="icon position-absolute" width="20" height="20" stroke-width="1.5"
                                         viewBox="0 0 24 24" fill="none"
                                         src="<?= get_sub_field( 'stack-icon' ) ?>"
                                         xmlns="http://www.w3.org/2000/svg">

                                    <span class="d-inline-block"><?= get_sub_field( 'stack-desc' ) ?></span>
                                </div>
                            </div>
						<?php endwhile; ?>
					<?php endif ?>
                </div>
            </div>
            <div class="col-lg-12 d-block d-xl-none">
                <a class="btn mt-2" href="services.html"><?= __( 'Services', 'kb' ) ?></a>
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
                    <h2 class="title"><?= __( 'Recent Projects', 'kb' ) ?></h2>
                </div>
            </div>
            <div class="col-12">
				<?php include get_theme_file_path( '/template-parts/query/hp-query.php' ) ?>
                <div class="text-center pt-4">
                    <a class="btn" href="<?= get_permalink( get_page_by_path( 'project' ) ) ?>">All Projects</a>
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
					<?php if ( have_rows( 'companies' ) ): ?>
						<?php while ( have_rows( 'companies' ) ) : the_row(); ?>
                            <div class="col-lg-3 col-md-3 col-6 text-center">
                                <img class="img-fluid brand-logo" src="<?php the_sub_field( 'company' ) ?>"
                                     alt="brand">
                            </div>

						<?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of projects -->


<?php get_footer(); ?>
