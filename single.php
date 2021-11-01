<?php get_header(); ?>
<!-- start of page-header -->
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
    <div class="page-header section position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center">
                        <p class="small text-uppercase mb-4">03 min read</p>
                        <div class="section-title text-center">
                            <h1 class="title"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of page-header -->

    <!-- start of blog details -->
    <section class="bg-light-soft blog-details-image">
        <div class="container">
            <div class="row justify-content-center">
                <!-- blog-image -->
                <div class="col-lg-10 text-center">
                    <img class="img-fluid rounded" loading="lazy"
                         src="<?= get_the_post_thumbnail_url( get_post(), 'full' ) ?>"
                         alt="blog post thumbnail">
                </div>
            </div>
        </div>
    </section>

    <!-- blog-content -->
    <section class="bg-light-soft section blog-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-2 order-1 order-md-0 mt-6 mt-md-0">
                    <div class="position-sticky" style="top:150px">
                        <span class="d-inline-block mb-3">SHARE</span>
                        <ul class="social-icon">
                            <li class="btn d-inline-block d-md-block me-2 mb-2" onclick="return tbs_click()"><i
                                        class="lab la-twitter"></i></li>
                            <li class="btn d-inline-block d-md-block me-2 mb-2" onclick="return fbs_click()"><i
                                        class="lab la-facebook-f"></i></li>
                            <li class="btn d-inline-block d-md-block me-2 mb-2" onclick="return ins_click()"><i
                                        class="lab la-linkedin-in"></i></li>
                            <li class="btn d-inline-block d-md-block me-2 mb-2" onclick="return red_click()"><i
                                        class="lab la-reddit"></i></li>
                            <li class="btn d-inline-block d-md-block me-2 mb-2" onclick="return pin_click()"><i
                                        class="lab la-pinterest-p"></i></li>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        var pageLink = window.location.href;
                        var pageTitle = String(document.title).replace(/\&/g, '%26');

                        function tbs_click() {
                            pageLink = `https://twitter.com/intent/tweet?text=${pageTitle}&url=${pageLink}`;
                            socialWindow(pageLink, 570, 570);
                        }

                        function fbs_click() {
                            pageLink = `https://www.facebook.com/sharer.php?u=${pageLink}&quote=${pageTitle}`;
                            socialWindow(pageLink, 570, 570);
                        }

                        function ins_click() {
                            pageLink = `https://www.linkedin.com/sharing/share-offsite/?url=${pageLink}`;
                            socialWindow(pageLink, 570, 570);
                        }

                        function red_click() {
                            pageLink = `https://www.reddit.com/submit?url=${pageLink}`;
                            socialWindow(pageLink, 570, 570);
                        }

                        function pin_click() {
                            pageLink = `https://www.pinterest.com/pin/create/button/?&text=${pageTitle}&url=${pageLink}&description=${pageTitle}`;
                            socialWindow(pageLink, 570, 570);
                        }

                        function socialWindow(pageLink, width, height) {
                            var left = (screen.width - width) / 2;
                            var top = (screen.height - height) / 2;
                            var params = "menubar=no,toolbar=no,status=no,width=" + width + ",height=" + height + ",top=" + top + ",left=" + left;
                            window.open(pageLink, "", params);
                        }
                    </script>
                </div>
                <div class="col-md-8 order-0 order-md-2">
                    <div class="content">
						<?php the_content(); ?>
                    </div>

                    <hr class="my-5">

                    <p><?php the_date() ?> - <?php the_time(); ?></p>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>
<!-- end of blog details -->

<!-- start of blog query -->
<?php include get_theme_file_path( '/template-parts/query/single-query.php' ) ?>
<!-- end of blog query -->

<?php get_footer(); ?>
