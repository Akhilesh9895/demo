<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php wp_head(); ?>
    <!-- <title>Machine Test</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="Machine Test"> -->
    <!-- favicon icon -->
    <!-- <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png"> -->
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <!-- style sheets and font icons  -->
    <!-- <link rel="stylesheet" href="css/vendors.min.css">
    <link rel="stylesheet" href="css/icon.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/responsive.min.css">
    <link rel="stylesheet" href="demos/logistics/logistics.css"> -->
</head>

<body data-mobile-nav-style="classic">
    <!-- start header -->
    <header class="header-with-topbar">
        <?php
        $logo = get_field('contact-and-logo', 'option');
        ?>
        <div class="header-top-bar top-bar-dark bg-blue">
            <div class="container-fluid">
                <div class="row h-45px align-items-center m-0">
                    <!-- <div class="col-12 col-lg-7 fw-500 justify-content-lg-start justify-content-center">
                        <span class="fs-15 md-m-0">
                            <i class="feather icon-feather-phone-call text-base-color me-10px"></i><span
                                class="text-light-gray">087 245 0049 / 01 8137811</span>
                        </span>
                        <span class="text-white mx-3">|</span>
                        <span class="d-xl-inline-block d-none fs-15"><i
                                class="feather icon-feather-mail text-base-color me-10px"></i><a
                                href="mailto:contact@smple.ie" class="widget text-light-gray text-white-hover"><span
                                    class="__cf_email__"
                                    data-cfemail="385657154a5d485441785c5755595156165b5755">contact@sample.ie</span></a></span>
                        <span class="text-white mx-3">|</span>
                        <span class="d-xl-inline-block d-none fs-15 text-light-gray"><i
                                class="feather icon-feather-clock text-base-color me-10px"></i>Mon-Thu: 8.00am to
                            9.00pm</span>
                    </div> -->
                    <div class="col-12 col-lg-7 fw-500 justify-content-lg-start justify-content-center">

                        <?php if (have_rows('contact_details', 'option')) : ?>

                            <?php
                            $contact_count = 0;
                            ?>

                            <?php while (have_rows('contact_details', 'option')) : the_row(); ?>

                                <?php
                                $icon  = get_sub_field('icon');
                                $title = get_sub_field('title');

                                if (!$title) {
                                    continue;
                                }
                                ?>

                                <?php if ($contact_count > 0) : ?>
                                    <span class="text-white mx-3">|</span>
                                <?php endif; ?>

                                <span class="fs-15">

                                    <?php if ($icon) : ?>
                                        <i class="dashicons <?php echo esc_attr($icon); ?> text-base-color me-10px"></i>
                                    <?php endif; ?>

                                    <span class="text-light-gray">
                                        <?php echo esc_html($title); ?>
                                    </span>

                                </span>

                                <?php
                                $contact_count++;
                                ?>

                            <?php endwhile; ?>

                        <?php endif; ?>

                    </div>
                    <div class="col-md-5 text-end d-none d-lg-flex fs-15">
                        <a href="https://www.facebook.com" target="_blank" class="me-25px lg-me-15px"><i
                                class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.twitter.com" target="_blank" class="me-25px lg-me-15px"><i
                                class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-light bg-white header-reverse" data-header-hover="light">
            <div class="container-fluid">
                <div class="col-auto">
                    <!-- <a class="navbar-brand" href="index.html">
                        <img src="<?php //echo get_stylesheet_directory_uri(); 
                                    ?>/assets/image/tax_logos.svg" alt="" class="default-logo">
                        <img src="<?php //echo get_stylesheet_directory_uri(); 
                                    ?>/assets/image/tax_logos.svg" alt="" class="alt-logo">
                        <img src="<?php //echo get_stylesheet_directory_uri(); 
                                    ?>/assets/image/tax_logos.svg" alt="" class="mobile-logo">
                    </a> -->
                    <?php
                    $logo = get_field('logo', 'option');

                    if ($logo) :
                    ?>
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" class="default-logo">
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" class="alt-logo">
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" class="mobile-logo">
                        </a>
                    <?php endif; ?>
                </div>
                <!-- <div class="col-auto menu-order left-nav">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">About us</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Order Company</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Apply for Tax Rebate</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                        </ul>
                    </div> -->
                <div class="col-auto menu-order left-nav">

                    <button class="navbar-toggler float-start"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-label="Toggle navigation">

                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>

                    </button>

                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">

                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container'      => false,
                            'menu_class'     => 'navbar-nav',
                            'fallback_cb'    => false,
                            'walker'         => new Bootstrap_Nav_Walker(),
                        ));
                        ?>

                    </div>

                </div>
            </div>

            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->