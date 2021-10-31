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
                            <textPath fill="white" href="#circle-button-text">Read — All — latest blog posts —
                            </textPath>
                        </text>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of page-header -->

<?php $postContent = ''; ?>
<?php if ( have_posts() ): while ( have_posts() ) :
	the_post(); ?>
    <!-- start of featured blog -->
	<?php if ( has_tag( 'featured', get_post() ) ) : ?>
    <section class="section bg-light-soft adjust-rotate-circle-spacing">
        <div class="container">
            <div class="row justify-content-center">
                <!-- featured blog item -->
                <div class="col-lg-10 text-center">
                    <a class="d-block mb-5 blog-thumbnail overflow-hidden rounded" href="blog-details.html"><img
                                class="img-fluid rounded" loading="lazy" src="assets/images/blog/01.jpg"
                                alt="blog post thumbnail"></a>
                    <ul class="text-uppercase small mb-3 list-inline">
                        <li class="list-inline-item"><a href="#!" class="btn-link font-tertiary">accessibility</a>
                        </li>
                    </ul>
                    <h3 class="mb-1"><a class="text-dark text-hover-underline-slim" href="blog-details.html">How to
                            build
                            tech for good — and turn a profit</a></h3>
                    <p class="mb-3">Its combining purpose and profit</p>

                    <span class="font-primary lh-1">03 min read</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end of featured blog -->
<?php else: ob_start() ?>
    <!-- start of blog -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title mb-6">
                        <h2 class="title">All Blog Postes</h2>
                    </div>
                    <div class="row g-6">

                        <div class="col-12">
                            <!-- blog item -->
                            <div class="row align-items-end g-5">
                                <div class="col-md-5 col-sm-6">
                                    <a class="d-block blog-thumbnail overflow-hidden rounded"
                                       href="blog-details.html"><img
                                                class="img-fluid rounded" loading="lazy"
                                                src="assets/images/blog/02.jpg"
                                                alt="blog post thumbnail"></a>
                                </div>
                                <div class="col-md-7">
                                    <ul class="text-uppercase small mb-3 list-inline">
                                        <li class="list-inline-item"><a href="#!"
                                                                        class="btn-link font-tertiary">focus</a>
                                        </li>
                                    </ul>
                                    <h3 class="mb-1"><a class="text-dark text-hover-underline-slim"
                                                        href="blog-details.html">Stay focused by always asking
                                            yourself one
                                            key question</a></h3>
                                    <p class="mb-3">"Will this make our boat go faster?"</p>

                                    <span class="font-primary lh-1">03 min read</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- blog item -->
                            <div class="row align-items-end g-5">
                                <div class="col-md-5 col-sm-6">
                                    <a class="d-block blog-thumbnail overflow-hidden rounded"
                                       href="blog-details.html"><img
                                                class="img-fluid rounded" loading="lazy"
                                                src="assets/images/blog/03.jpg"
                                                alt="blog post thumbnail"></a>
                                </div>
                                <div class="col-md-7">
                                    <ul class="text-uppercase small mb-3 list-inline">
                                        <li class="list-inline-item"><a href="#!"
                                                                        class="btn-link font-tertiary">customer</a>
                                        </li>
                                    </ul>
                                    <h3 class="mb-1"><a class="text-dark text-hover-underline-slim"
                                                        href="blog-details.html">Build a customer-obsessed digital
                                            business
                                            agency</a></h3>
                                    <p class="mb-3">The mindset your startup needs to scale</p>

                                    <span class="font-primary lh-1">06 min read</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- blog item -->
                            <div class="row align-items-end g-5">
                                <div class="col-md-5 col-sm-6">
                                    <a class="d-block blog-thumbnail overflow-hidden rounded"
                                       href="blog-details.html"><img
                                                class="img-fluid rounded" loading="lazy"
                                                src="assets/images/blog/04.jpg"
                                                alt="blog post thumbnail"></a>
                                </div>
                                <div class="col-md-7">
                                    <ul class="text-uppercase small mb-3 list-inline">
                                        <li class="list-inline-item"><a href="#!"
                                                                        class="btn-link font-tertiary">people</a>
                                        </li>
                                    </ul>
                                    <h3 class="mb-1"><a class="text-dark text-hover-underline-slim"
                                                        href="blog-details.html">Forget ‘networking’ — just connect
                                            with
                                            people you find interesting</a></h3>
                                    <p class="mb-3">Stop treating it like a chore and think about what you want.</p>

                                    <span class="font-primary lh-1">03 min read</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- blog item -->
                            <div class="row align-items-end g-5">
                                <div class="col-md-5 col-sm-6">
                                    <a class="d-block blog-thumbnail overflow-hidden rounded"
                                       href="blog-details.html"><img
                                                class="img-fluid rounded" loading="lazy"
                                                src="assets/images/blog/06.jpg"
                                                alt="blog post thumbnail"></a>
                                </div>
                                <div class="col-md-7">
                                    <ul class="text-uppercase small mb-3 list-inline">
                                        <li class="list-inline-item"><a href="#!"
                                                                        class="btn-link font-tertiary">experience</a>
                                        </li>
                                    </ul>
                                    <h3 class="mb-1"><a class="text-dark text-hover-underline-slim"
                                                        href="blog-details.html">Good UX isn’t enough — websites
                                            must
                                            enchant us again</a></h3>
                                    <p class="mb-3">Making fun and excitement, not efficiency, your north star</p>

                                    <span class="font-primary lh-1">03 min read</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <!-- blog item -->
                            <div class="row align-items-end g-5">
                                <div class="col-md-5 col-sm-6">
                                    <a class="d-block blog-thumbnail overflow-hidden rounded"
                                       href="blog-details.html"><img
                                                class="img-fluid rounded" loading="lazy"
                                                src="assets/images/blog/05.jpg"
                                                alt="blog post thumbnail"></a>
                                </div>
                                <div class="col-md-7">
                                    <ul class="text-uppercase small mb-3 list-inline">
                                        <li class="list-inline-item"><a href="#!"
                                                                        class="btn-link font-tertiary">tech</a>
                                        </li>
                                    </ul>
                                    <h3 class="mb-1"><a class="text-dark text-hover-underline-slim"
                                                        href="blog-details.html">Distractions aren’t bad for your
                                            productivity</a></h3>
                                    <p class="mb-3">Manage your distractions instead of eliminating them</p>

                                    <span class="font-primary lh-1">03 min read</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mt-4">
                                <a class="btn" href="#!">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php $postContent .= ob_get_contents(); ?>
<?php endif; ?>
<?php endwhile; endif; ?>
<?php ob_end_clean();
print_r( $postContent ); ?>
<!-- end of blog -->
<?php get_footer() ?>
