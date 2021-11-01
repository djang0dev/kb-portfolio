<?php get_header(); ?>

<!-- start of page-header -->
<div class="page-header section position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center">
                    <p class="small text-uppercase mb-4">I'm Kinane</p>
                    <div class="section-title text-center">
                        <h1 class="title"><?= __( 'About Me', 'kb' ) ?></h1>
                    </div>
                </div>

                <div class="rotate-circle">
                    <svg class="rotateOnScroll circle-text bg-dark" viewBox="0 0 460 460">
                        <defs>
                            <path id="circle-button-text"
                                  d="M230,380 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z"></path>
                        </defs>
                        <text class="text-uppercase" style="font-size:40px;letter-spacing:7px">
                            <textPath fill="white"
                                      href="#circle-button-text"><?= __( 'hello — I am Kinane — about me —', 'kb' ) ?>
                            </textPath>
                        </text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of page-header -->

<!-- start of about -->
<!-- start of biography -->
<section class="section bg-light-soft adjust-rotate-circle-spacing">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 mx-auto text-center">
                <div class="section-title text-center mb-6">
                    <h2 class="title h3 pt-3"><?= __( 'Biography', 'kb' ) ?></h2>
                </div>

                <p class="lead"><?php the_field( 'biography' ) ?></p>

                <!-- <div class="text-center mt-5"><a class="btn-link" href="#!">
                        <svg class="me-2" width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 20L18 20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 4V16M12 16L15.5 12.5M12 16L8.5 12.5" stroke="currentColor"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Download Resume</a>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- end of biography -->

<section class="section">
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-lg-4 col-10">
                <div class="about-image position-sticky pe-0 pe-lg-6">
                    <img class="img-fluid rounded-pill"
                         src="http://portfolio/wp-content/uploads/2021/11/profil-pic-2.jpg"
                         alt="author">
                </div>
            </div>
            <div class="col-lg-6 mt-0 mt-lg-5">

                <!-- start of experience -->
                <div>
                    <div class="section-title mb-5">
                        <h2 class="title h3"><?= __( 'Experience', 'kb' ) ?></h2>
                    </div>

                    <div class="row g-4">
						<?php if ( have_rows( 'experience' ) ): while ( have_rows( 'experience' ) ):
							the_row(); ?>
                            <div class="col-sm-6">
                                <small><?= get_sub_field( 'experience-date' ) ?></small>
                                <h3 class="h5 my-1 font-tertiary"><?= get_sub_field( 'exp-title' ) ?></h3>
                                <p class="text-muted"><?= get_sub_field( 'exp-location' ) ?></p>
                            </div>
						<?php endwhile; endif; ?>
                    </div>
                </div>
                <!-- end of experience -->

                <!-- start of competences & tools -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="section pb-0">
                            <div class="section-title mb-5">
                                <h2 class="title h3"><?= __( 'Competences', 'kb' ) ?></h2>
                            </div>

                            <div class="row g-3">
								<?php if ( have_rows( 'competences' ) ): while ( have_rows( 'competences' ) ):
									the_row(); ?>
                                    <div class="col-12">
                                        <p class="h5 font-tertiary"><?= get_sub_field( 'competence-title' ) ?></p>
                                    </div>
								<?php endwhile; endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="section pb-0">
                            <div class="section-title mb-5">
                                <h2 class="title h3">Tools</h2>
                            </div>

                            <div class="row g-3">
								<?php if ( have_rows( 'tools' ) ): while ( have_rows( 'tools' ) ):
									the_row(); ?>
                                    <div class="col-12">
                                        <p class="h5 font-tertiary"><?= get_sub_field( 'tool' ) ?></p>
                                    </div>
								<?php endwhile; endif; ?>>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of competences & tools -->

            </div>
        </div>
    </div>
</section>
<!-- end of about -->

<?php get_footer(); ?>

