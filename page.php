<?php get_header(); ?>

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
  <h1 class="display-4 fst-italic entry-title"><?php the_title(); ?></h1>
  <h2 class="fst-italic subtitle"><?php echo get_post_meta($post->ID, 'subtitle', true); ?></h2>
  <p><?php the_content(); ?></p>


      </div>


<!--footer-->

<?php get_footer(); ?>