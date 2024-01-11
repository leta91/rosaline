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