<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <?php
    // call head
    wp_head();
    ?>

</head>

<body>

    <!-- ======= Hero Section ======= -->
    <?php if (is_front_page()) : ?>
        <section id="hero">
            <div class="hero-container">
                <!-- <?= get_custom_logo() ?> -->
                <div class="hero-logo" data-aos="zoom-in">
                    <a href="<?= get_home_url(); ?>"><img height="200" src="<?= get_template_directory_uri() . '/assets/img/site-logo.png' ?>" alt="<?= bloginfo('name') ?>"></a>
                </div>
                <h1 data-aos="zoom-in" class="text-capitalize">Welcome To <?= bloginfo('name') ?></h1>
                <h2 data-aos="fade-up"><?= get_bloginfo('description') ?></h2>
            </div>
        </section>
    <?php endif; ?>
    <!-- End Hero -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <a href="<?= get_home_url(); ?>"><img src="<?= get_template_directory_uri() . '/assets/img/site-logo.png' ?>" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <?= zeromagaze_primary_menu() ?>
                <i class="bi bi-list mobile-nav-toggle"><?php _e('Menu', 'zeromagaze'); ?></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->