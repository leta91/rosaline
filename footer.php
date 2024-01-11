<!--footer-->

<?php if(is_active_sidebar('Footer-area')): ?>
        <?php dynamic_sidebar('footer-area'); ?>
      <?php endif; ?>


      <?php wp_footer(); ?>  <!--to show WP admin bar on frontend -->
      
      <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.bundle.min.js"></script>
</body>
</html>