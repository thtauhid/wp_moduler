<hr>
  <div class="row">
    <!--Footer-->
    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-dark bg-faded">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
        </div>
                <p>
                        &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ) ?> | Powered by <a href="https://wordpress.org">Wordpress</a>
                </p>
      </nav>
      <br>
  </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>
  <?php wp_footer(  ); ?>
</body>
</html>