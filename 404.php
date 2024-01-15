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

<div class="container text-center mt-3 mb-3">
  <div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Page not found', 'rosaline' ); ?></h1>
			</header>

			<div class="page-wrapper text-center">
				<div class="page-content">
					<p><?php _e( 'The page you were looking for was not found in this location. Try searching here', 'rosaline' ); ?></p>
          <?php get_search_form(); ?>
          <p>&nbsp;</p>
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/404/404.svg">

					
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->
</div>

        </div>

<?php get_footer(); ?>

