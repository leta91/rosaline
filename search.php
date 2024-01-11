<?php get_header(); ?>

<!--navbar-->
<nav class="navbar navbar-expand-lg" style="background-color: #FFE7C1;">
    <div class="container">
      <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">
      <img class="logo" alt="Rosaline Logo" src="<?php echo get_template_directory_uri(); ?>/img/Rosaline-cropped.logo.png" width="100" height="100">
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


<div class="content-container text-center">
    <h1 class="page-title my-4"><?php _e( 'Search results for:', 'rosaline' ); ?></h1>
    <div class="search-query"><?php echo get_search_query(); ?></div>    
    <div class="container">
        <div class="row results-displayer">
            <div class="search-results-container col-md-7">
            <?php if ( have_posts() ): ?>
                <?php while( have_posts() ): ?>
                    <?php the_post(); ?>
                    <div class="search-result my-5">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="read-more-link">
                            <?php _e( 'View full page', 'rosaline' );  ?>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p><?php _e( 'No Search Results found', 'rosaline' ); ?></p>
            <?php endif; ?>
            </div>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>
