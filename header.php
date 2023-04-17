<!doctype html>
<html lang="en">

<head>
    <!-- Title -->
    <?php if (is_category()) : ?>
        <title><?php echo $wp_query->get_queried_object()->cat_name; ?> | <?php echo get_bloginfo('name'); ?></title>
    <?php else : ?>
        <title><?php single_post_title(); ?> | <?php echo get_bloginfo('name'); ?></title>
    <?php endif; ?>

    <!-- Metatags -->
    <meta charset="utf-8" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/responsive.css">
    <?php echo wp_head(); ?>
</head>

<?php
global $post;
$post_slug = $post->post_name;
?>

<?php if (is_home() || is_category()) : ?>
    <?php $post_slug = "blog"; ?>
<?php elseif (is_singular("post")) : ?>
    <?php $post_slug = "post"; ?>
<?php else : ?>
    <?php $post_slug = $post->post_name; ?>
<?php endif; ?>

<body>
    <?php include(TEMPLATEPATH . '/includes/nav.php'); ?>

    <div class="global__wrapper" data-namespace="<?php echo $post_slug; ?>">

        <!-- site-body START -->
        <div class="site-body">


            <!-- header-area START -->
            <header>
                <div class="nav-header">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <nav class="navbar navbar-expand-lg navbar-light pt-4 pb-4">
                                    <div class="logo pr-5">
                                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt=""></a>
                                    </div>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <?php
                                        $menu_name = 'Menu lp'; // Replace 'Menu lp' for desired menu according needs
                                        $menu_object = wp_get_nav_menu_object($menu_name);
                                        $menu_id = $menu_object->term_id;
                                        wp_nav_menu(array('menu' => $menu_id, 'menu_class' => 'navbar-nav'));
                                        ?>
                                    </div>
                                    <div class="ml-auto">
                                        <button class="cust-button-outline-alt mr-2" type="button">Sign in</button>
                                        <button class="cust-button-alt" type="button">Sign Up</button>
                                    </div>
                                </nav>


                            </div>

                        </div>
                    </div>
                </div>
                <div class="mobile-header">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="logo-area">
                                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="javascript:void(0)" class="bar"><i class="fal fa-bars"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu">
                    <a href="javascript:void(0)" class="bar"><i class="fal fa-times"></i></a>
                    <div class="manu-area">
                    <?php
                                        $menu_name = 'Menu lp'; // Replace 'Menu lp' for desired menu according needs
                                        $menu_object = wp_get_nav_menu_object($menu_name);
                                        $menu_id = $menu_object->term_id;
                                        wp_nav_menu(array('menu' => $menu_id, 'menu_class' => 'navbar-nav'));
                                        ?>
                    </div>
                </div>
            </header>
            <!-- header-area END -->