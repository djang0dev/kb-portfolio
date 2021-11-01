<?php get_header() ?>
<?php if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

	}
} ?>
    <div class="content-block">
        <!-- start of page-header -->
        <div class="page-header section position-relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center">
                            <p class="small text-uppercase mb-4"><?php the_title() ?></p>
                            <div class="section-title text-center">
                                <h1 class="title"><?= __( 'Get in touch', 'kb' ) ?></h1>
                            </div>
                        </div>

                        <div class="rotate-circle">
                            <svg class="rotateOnScroll circle-text bg-dark" viewBox="0 0 460 460">
                                <defs>
                                    <path id="circle-button-text"
                                          d="M230,380 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z"></path>
                                </defs>
                                <text class="text-uppercase" style="font-size:40px;letter-spacing:6px">
                                    <textPath fill="white"
                                              href="#circle-button-text"><?= __( 'Contact — Get in touch — Hola —', 'kb' ) ?>
                                    </textPath>
                                </text>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of page-header -->

        <!-- start of contact info -->
        <section class="section bg-light-soft adjust-rotate-circle-spacing">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row g-5">
                            <div class="col-lg-4">
                                <div class="section-title mb-4">
                                    <h2 class="title h3">Find me on</h2>
                                </div>

                                <p class="mb-2"><a class="btn-link-alt" href="#!">Dribbble</a></p>
                                <p><a class="btn-link-alt" href="#!">Behance</a></p>
                            </div>
                            <div class="col-lg-4">
                                <div class="section-title mb-4">
                                    <h2 class="title h3">Contact Details</h2>
                                </div>

                                <p class="mb-2"><a class="btn-link-alt" href="mailto:hello@kinanebrevet.me">hello@kinanebrevet.me</a>
                                </p>
                                <p><a class="btn-link-alt" href="tel:+31869235">+31 6 869 235</a></p>
                            </div>
                            <div class="col-lg-4">
                                <div class="section-title mb-4">
                                    <h2 class="title h3">Business Details</h2>
                                </div>

                                <p class="mb-2">CoC: 56971536</p>
                                <p>VAT: FR006953208D08</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of contact info -->

        <!-- start of contact form -->
        <section class="section">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-10">
						<?php the_content(); ?>
                    </div>
                </div>
            </div>
    </div>
<?php get_footer(); ?>