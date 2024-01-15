<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo ('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo ('description'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="favicon.ico">    <!--favicon icon-->
    <title><?php bloginfo('name'); ?> |
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>

<!--navbar-->
<nav class="navbar navbar-expand-lg" style="background-color: #FBECED;">
    <div class="container">
      <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">
        <img class="logo" alt="Rosaline Logo" src="<?php echo get_template_directory_uri(); ?>/img/v2-200x100px-Rosaline-Pink-Logo.png">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

        <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>

</div>
</div>
</nav>
<div class="container mt-4 mb-2">
  <h1 class="display-4 fst-italic entry-title">Shop</h1>
  