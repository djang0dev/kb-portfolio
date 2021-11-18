<!-- start of cta -->
<section class="section bg-light-soft">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center">
                <p class="small text-uppercase mb-4"><?= __( 'Do you like my work?', 'kb' ) ?></p>
                <div class="section-title text-center">
                    <h2 class="title"><?= __( 'Let\'s make a wonderful ', 'kb' ) ?> <br> <span
                                class="text-primary loop-text text-underline">
						<?= sprintf( _x( '<span>%1s</span><span>%2s</span><span>%3s</span><span>%4s</span></span>', 'kb', 'text loop' ), 'website', 'experience', 'direction', 'strategy' ) ?>
						<?= _x( ' together!', 'kb', 'after text loop footer' ) ?></h2>
                </div>
                <a class="btn mt-6" href="<?= get_permalink( get_page_by_path( 'contact' ) ) ?>">Get in touch!</a>
            </div>
        </div>
    </div>
</section>
<!-- end of cta -->
<!-- start of footer -->
<footer>
    <div class="container bg-light-soft">
        <div class="block"
             style="background-image:url(https://kinane.co/wp-content/uploads/2021/10/footer_test.jpg)">
            <div class="row gx-0 gx-md-4 gy-4 justify-content-center">
                <div class="col-lg-5 text-center text-lg-start order-1 order-lg-0">
                    <ul class="list-inline mb-3">
						<?php dynamic_sidebar( 'footer-social' ) ?>
                    </ul>
                    <p class="small"><?= _x( '&copy; Copyright, Kinane B', 'kb', 'Copyright in footer' ) ?></p>
                </div>
                <div class="col-lg-5 text-center text-lg-end order-0 order-lg-1">
					<?php wp_nav_menu( [
						                   'theme_location'  => 'header',
						                   'container'       => false,
						                   'menu_class'      => 'list-inline mb-3"',
						                   'container_id'    => "nav-menu-footer",
						                   'list_item_class' => 'list-inline-item',
						                   'link_class'      => 'text-hover-underline-initial text-white',
					                   ] ); ?>
                    <p class="small">Contact at <a class="btn-link text-white" href="mailto:hello@kinane.co">hello[at]kinane.co</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end of footer -->
</div>
</main>
</section>
<!-- end of main-section -->
<?php wp_footer(); ?>
</body></html>