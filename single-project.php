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
                    <ul class="list-unstyled list-inline">
                        <div class="list-inline-item mt-4 me-3">
                            <h3 class="mt-4 mb-2 h5 text-uppercase px-3 py-1 rounded"
                                style="background: var(--bs-dark); color: white;">PHP</h3>
                        </div>
                        <div class="list-inline-item mt-4 me-3">
                            <h3 class="mt-4 mb-2 h5 px-3 py-1 rounded"
                                style="background: var(--bs-dark); color: white;">WordPress</h3>
                        </div>
                        <div class="list-inline-item mt-4 me-3">
                            <h3 class="mt-4 mb-2 h5 px-3 py-1 rounded"
                                style="background: var(--bs-dark); color: white;">JavaScript</h3>
                        </div>
                        <div class="list-inline-item mt-4 me-3">
                            <h3 class="mt-4 mb-2 h5 px-3 py-1 rounded"
                                style="background: var(--bs-dark); color: white;">Sass</h3>
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

    <!-- start of more projects -->
	<?php
	// dans un custom template
	include get_theme_file_path( '/template-parts/query/single-project-query.php' ) ?>
    <!-- end of more projects -->
<?php endwhile; ?>

<?php get_footer(); ?>
