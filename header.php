<!DOCTYPE html>
<html lang="en">
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head() ?>

    <!-- title -->
    <!--	<title>Kinane - Portfolio HTML Template</title>-->

    <!--favicon-->
    <!--	<link rel="icon" type="image/png" href="assets/images/favicon.png">-->

    <!-- CSS files -->
    <!--	<link rel="stylesheet" href="plugins/spinner/spinner.min.css">-->
    <!--	<link rel="stylesheet" href="plugins/bootstrap/bootstrap.custom.min.css">-->
    <!--	<link rel="stylesheet" href="plugins/line-awesome/css/line-awesome.min.css">-->
    <!--	<link rel="stylesheet" href="plugins/swiper/swiper-bundle.min.css">-->

    <!-- main stylesheet -->
    <!--	<link href="assets/css/style.css" rel="stylesheet">-->

</head>
<body class="has-noise">

<!-- start of scroll-progress -->
<div class="scroll-progress position-fixed">
    <div class="scroll-bar"></div>
</div>
<!-- end of scroll-progress -->

<!-- start of cursor -->
<div class="cursor"></div>
<!-- end of cursor -->

<!-- start of navigation -->
<div class="adjust-navigation-height"></div>

<header class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md px-0 py-3 py-lg-4">
                    <!-- navbar logo -->
                    <a class="navbar-brand font-weight-bold mb-0" href="/" title="Kinane">Kinane
                        <!--<img src="assets/images/logo.png" alt="Kinane">-->
                    </a>

                    <!-- navbar-toggler -->
                    <button class="navbar-toggler" type="button" data-toggle="navbar-menu">
                        <svg viewBox="0 0 341.333 341.333">
                            <g>
                                <g>
                                    <rect y="277.333" width="341.333" height="42.667"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect y="149.333" width="341.333" height="42.667"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect y="21.333" width="341.333" height="42.667"/>
                                </g>
                            </g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                        </svg>
                    </button>
                    <div class="navbar-collapse" id="navbar-menu">
						<?php wp_nav_menu( [
							                   'theme_location'  => 'header',
							                   'container'       => false,
							                   'menu_class'      => 'navbar-nav mx-auto',
							                   'container_class' => "navbar-collapse",
							                   'container_id'    => "navbar-menu",
							                   'list_item_class' => 'nav-item',
							                   'link_class'      => 'nav-link',
						                   ] ); ?>
                        <ul class="navbar-nav mt-3 mt-md-0">
                            <li class="nav-item">
                                <a class="btn btn-sm"
                                   href="<?= _x( '/contact/', 'kb', 'contact href header menu' ) ?>"><?= _x( 'Contact', 'kb', 'contact btn text header' ) ?></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- end of navigation -->

<!-- default preloader -->
<div class="preloader">
    <div class="loader fixed-top w-100 h-100 d-flex align-items-center justify-content-center bg-light">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="2"></circle>
        </svg>
    </div>
</div>
<!-- end of navigation -->
<!-- start of main-section -->
<section data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="loader">

        <!-- start of loader -->
        <div class="loader fixed-top w-100 h-100 d-flex align-items-center justify-content-center bg-light">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="2"></circle>
            </svg>
        </div>
        <!-- end of loader -->

        <div class="content-block">