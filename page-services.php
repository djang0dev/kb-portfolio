<?php get_header() ?>
<div class="page-header section position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center">
                    <p class="small text-uppercase mb-4"><?= __( 'Dev & Growth', 'kb' ) ?></p>
                    <div class="section-title text-center">
                        <h1 class="title"><?= wp_title( '' ) ?></h1>
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
                                      href="#circle-button-text"><?= __( 'Dev — & — Growth — Services —', 'kb' ) ?></textPath>
                        </text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of page-header -->

<!-- start of services -->
<section class="section bg-light-soft adjust-rotate-circle-spacing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row justify-content-center g-5">
					<?php $services = get_field( 'services-services' );
					if ( have_rows( 'services-services' ) ): while ( have_rows( 'services-services' ) ):
					the_row() ?>
					<?php if ( get_row()['field_6180189a89a54'] === end( $services )['service-title'] ): ?>
                    <div class="col-lg-6 col-md-12">
						<?php elseif ( get_row()['field_6180189a89a54'] === $services[ count( $services ) - 2 ]['service-title'] ): ?>
                        <div class="col-lg-6 col-md-6">
							<?php else: ?>
                            <div class="col-lg-4 col-md-6">
								<?php endif; ?>
                                <div class="rounded-sm px-4 px-sm-5 py-5 bg-white h-100">
                                    <img width="40" height="40" src="<?= get_sub_field( 'service-icon' ) ?>" alt="">
                                    <h3 class="mt-4 mb-2 h4"><?= get_sub_field( 'service-title' ) ?></h3>
                                    <p><?= get_sub_field( 'service-desc' ) ?></p>
                                </div>
                            </div>
							<?php endwhile;
							endif; ?>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- end of services -->

<!-- start of FAQ -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title mb-6">
                    <h2 class="title"><?= __( 'Frequently Asked Questions', 'kb' ) ?></h2>
                </div>

                <div class="row g-5">
					<?php
					if ( have_rows( 'services-faq' ) ): while ( have_rows( 'services-faq' ) ):
						the_row() ?>
                        <div class="col-12">
                            <h5 class="font-tertiary mb-2"><?= get_sub_field( 'faq-title' ) ?></h5>
                            <p><?= get_sub_field( 'faq-desc' ) ?></p>
                        </div>
					<?php endwhile; endif; ?>
                    <div class="col-12">
                        <hr class="mt-0 mb-5">
                        <p class="font-secondary"><?= __( 'Can’t find the answer? Drop me an email at', 'kb' ) ?> <a
                                    class="btn-link"
                                    href="mailto:hello@kinanebrevet.me">hello
                                [at] kinanebrevet.me</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of FAQ -->
<?php get_footer() ?>

