<?php get_header() ?>
<!-- start of page-header -->
<div class="page-header section position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center">
                    <p class="small text-uppercase mb-4"><?= __( 'Read blog posts', 'kb' ) ?></p>
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
                                      href="#circle-button-text"><?= _x( 'Read — All — latest blog posts —', 'kb', 'wheel archive blog' ) ?>
                            </textPath>
                        </text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of page-header -->
<?php $postContent = '';
$accFeatured       = 0;
if ( have_posts() ): while ( have_posts() ) :
the_post(); ?>
<!-- start of featured blog -->
<?php if ( has_tag( 'featured', get_the_ID() ) && $accFeatured === 0 ) : ?>
    <section class="section bg-light-soft adjust-rotate-circle-spacing">
        <div class="container">
            <div class="row justify-content-center">
                <!-- featured blog item -->
                <div class="col-lg-10 text-center">
                    <a class="d-block mb-5 blog-thumbnail overflow-hidden rounded" href="<?php the_permalink(); ?>"><img
                                class="img-fluid rounded" loading="lazy"
                                src="<?= get_the_post_thumbnail_url( get_post(), 'full' ) ?>"
                                alt="blog post thumbnail"></a>
                    <ul class="text-uppercase small mb-3 list-inline">
                        <li class="list-inline-item"><a href="#!"
                                                        class="btn-link font-tertiary"><?php the_category(); ?></a>
                        </li>
                    </ul>
                    <h3 class="mb-1"><a class="text-dark text-hover-underline-slim"
                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="mb-3"><?php the_excerpt(); ?></p>

                    <span class="font-primary lh-1">03 min read</span>
                </div>
            </div>
        </div>
    </section>
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title mb-6">
                    <h2 class="title"><?= __( 'All Blog Posts', 'kb' ) ?></h2>
                </div>
                <div class="row g-6">
                    <!-- end of featured blog -->
					<?php $accFeatured ++; ?>
					<?php else: ob_start();
						$category = kb_get_category( get_the_category() );
						?>
                        <!-- start of blog -->
                        <div class="col-12">
                            <!-- blog item -->
                            <div class="row align-items-end g-5">
                                <div class="col-md-5 col-sm-6">
                                    <a class="d-block blog-thumbnail overflow-hidden rounded"
                                       href="<?php the_permalink(); ?>"><img
                                                class="img-fluid rounded" loading="lazy"
                                                src="<?= get_the_post_thumbnail_url( get_post(), 'singular-more-project' ) ?>"
                                                alt="blog post thumbnail"></a>
                                </div>
                                <div class="col-md-7">
                                    <ul class="text-uppercase small mb-3 list-inline">
                                        <li class="list-inline-item"><a href="<?= kb_get_url_category( $category ) ?>"
                                                                        class="btn-link font-tertiary"><?= $category ?></a>
                                        </li>
                                    </ul>
                                    <h3 class="mb-1"><a class="text-dark text-hover-underline-slim"
                                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p class="mb-3"><?php the_excerpt(); ?></p>

                                    <span class="font-primary lh-1">03 min read</span>
                                </div>
                            </div>
                        </div>
						<?php $postContent .= ob_get_contents();
						ob_end_clean(); ?>
					<?php endif;
					endwhile;
					endif; ?>
					<?php
					print_r( $postContent ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of blog -->
<?php get_footer() ?>
