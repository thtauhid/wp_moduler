<hr>
  <div class="row">
    <!--Footer-->
    <div class="col-12">
        <p class="float-right">
           &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ) ?> | <?php echo __('Powered by', 'moduler') ?> <a href="https://wordpress.org"><?php echo __('Wordpress', 'moduler') ?></a>
        </p>
      <br>
  </div>
</div>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/bootstrap.js"></script>
  <?php wp_footer(); ?>
</body>
</html>