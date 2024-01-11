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

  <section class="showcase bg-image">
    <div class="container">
    </div>
  </section>

  <div class="container"> 
      <?php if(is_active_sidebar('quote')): ?>
        <?php dynamic_sidebar('quote'); ?>
      <?php endif; ?>
      </div>

    <div class="container">
    <?php if(is_active_sidebar('our-story')): ?>
        <?php dynamic_sidebar('our-story'); ?>
      <?php endif; ?>
    </div>

  <section id="features" class="pt-md"> 
      <?php if(is_active_sidebar('sidebar-1')): ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
      <?php endif; ?>
  </section>

  <div class="container"> 
      <?php if(is_active_sidebar('as-seen-on')): ?>
        <?php dynamic_sidebar('as-seen-on'); ?>
      <?php endif; ?>
      </div>

  <div class="table-title">
  <?php if(is_active_sidebar('table-title')): ?>
        <?php dynamic_sidebar('table-title'); ?>
      <?php endif; ?>
  </div>

    <div class="table-responsive container mb-5">
      <?php if(is_active_sidebar('sidebar-2')): ?>
        <?php dynamic_sidebar('sidebar-2'); ?>
      <?php endif; ?>
    </div>

<!--footer-->

<?php get_footer(); ?>