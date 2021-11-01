<?php get_header(); ?>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<div class="page-header section position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center">
                    <p class="small text-uppercase mb-4"><?= __( 'Time to think about life because', 'kb' ) ?></p>
                    <div class="section-title text-center">
                        <h1 class="title"><?= __( 'You\'re lost', 'kb' ) ?></h1>
                    </div>
                </div>
                <div class="row justify-content-between g-6 project-page">
                    <model-viewer
                            alt="Neil Armstrong's Spacesuit from the Smithsonian Digitization Programs Office and National Air and Space Museum"
                            src="<?= wp_get_attachment_url( 222 ) ?>"
                            ar
                            ar-modes="webxr scene-viewer quick-look"
                            shadow-intensity="1"
                            camera-controls
                            disable-zoom
                            auto-rotate
                            style="height: 600px !important"
                    ></model-viewer>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
