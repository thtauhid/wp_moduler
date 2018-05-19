<?php get_header() ?> 
<div class="jumbotron">
  <h1 class="display-3"><?php echo get_theme_mod('main_title', 'Hello, world!'); ?></h1>
  <p class="lead"><?php echo get_theme_mod( 'below_text', 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.' ); ?></p>
  <hr class="my-4">
  <p><?php echo get_theme_mod( 'main_text', 'It uses utility classes for typography and spacing to space content out within the larger container.' ); ?></p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="<?php echo get_theme_mod( 'button_url', '#' ); ?>" role="button"><?php echo get_theme_mod( 'button_text', 'Learn more' ); ?></a>
  </p>
</div>
    </div>
  </div>
   <h3 class="text-center"><?php echo get_theme_mod('expertise_main_title', 'Our Expertise') ?></h3><hr>
  <div class="row">
    <!--Expertise-->
    <div class="col-12">
      <div class="jumbotron">
        <?php echo get_theme_mod( 'expertise_1st_element', 'HTML & CSS:' ); ?><div class="progress">
          <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo get_theme_mod( 'expertise_1st_element_persentage', '60' ); ?>%"></div>
        </div><br>
        <?php echo get_theme_mod( 'expertise_2nd_element', 'Bootstrap:' ); ?><div class="progress">
          <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo get_theme_mod( 'expertise_2nd_element_persentage', '70' ); ?>%"></div>
        </div><br>
        <?php echo get_theme_mod( 'expertise_3rd_element', 'PHP:' ); ?><div class="progress">
          <div class="progress-bar progress-bar-striped bg-faded progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo get_theme_mod( 'expertise_3rd_element_persentage', '80' ); ?>%"></div>
        </div><br>
        <?php echo get_theme_mod( 'expertise_4th_element', 'Photoshop:' ); ?><div class="progress">
          <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo get_theme_mod( 'expertise_4th_element_persentage', '90' ); ?>%"></div>
        </div>
      </div>
    </div>
  </div>
 <h3 class="text-center">What Our Clients Say</h3><hr>
  <div class="row">
    <!--Client Area-->
    <div class="col-4">
          <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
            <div class="card-header"><img src="<?php bloginfo('template_url'); ?>/assets/placeholder_face.png" height="50" width="50" style="padding: 5px"> Tasnimul H. Tauhid</div>
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    </div>
    <div class="col-4">
          <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
            <div class="card-header"><img src="<?php bloginfo('template_url'); ?>/assets/placeholder_face.png" height="50" width="50" style="padding: 5px"> Tasnimul H. Tauhid</div>
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    </div>
    <div class="col-4">
          <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
            <div class="card-header"><img src="<?php bloginfo('template_url'); ?>/assets/placeholder_face.png" height="50" width="50" style="padding: 5px"> Tasnimul H. Tauhid</div>
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
    </div>
  </div>

 <h3 class="text-center">Our Awesome Team</h3><hr>
  <div class="row">
    <!--Our Team-->
    <div class="col-4">
          <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
            <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/assets/placeholder_face.png" style="padding: 25px">
            <div class="card-header">
              <h4 class="card-title text-center">Tasnimul H. Tauhid</h4>
              <h6 class="card-title text-center">Web Developer</h6>
            </div>
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-facebook-square"  style="font-size: 25px;"></i></button>
              <button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-twitter-square"  style="font-size:25px; "></i></button>
              <button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-google-plus-square"  style="font-size:25px; "></i></button>
              <button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-envelope-square"  style="font-size: 25px;"></i></button>
            </div>
          </div>
    </div>


    <div class="col-4">
          <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
            <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/assets/placeholder_face.png" style="padding: 25px">
            <div class="card-header">
              <h4 class="card-title text-center">Tasnimul H. Tauhid</h4>
              <h6 class="card-title text-center">Web Developer</h6>
            </div>
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-facebook-square"  style="font-size: 25px;"></i></button>
              <button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-twitter-square"  style="font-size:25px; "></i></button>
              <button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-google-plus-square"  style="font-size:25px; "></i></button>
              <button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-envelope-square"  style="font-size: 25px;"></i></button>
            </div>
          </div>
    </div>
        <div class="col-4">
          <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
            <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/assets/placeholder_face.png"  style="padding: 25px">
            <div class="card-header">
              <h4 class="card-title text-center">Tasnimul H. Tauhid</h4>
              <h6 class="card-title text-center">Web Developer</h6>
            </div>
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-facebook-square"  style="font-size: 25px;"></i></button>
              <button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-twitter-square"  style="font-size:25px; "></i></button>
              <button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-google-plus-square"  style="font-size:25px; "></i></button>
              <button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-envelope-square"  style="font-size: 25px;"></i></button>
            </div>
          </div>
    </div>
  </div>

 <br>     <h3 class="text-center">The Call To Action Button</h3><hr>
  <div class="row">
    <!--Full Scape-->
    <div class="col-12">
      <div class="jumbotron">
<blockquote class="blockquote text-center" >
  <h3>Something, That is pre built</h3>
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer><br>
  <button type="button" class="btn btn-outline-primary" style="padding: 15px; font-size: 15px;"><b>Check Out</b></button>
</blockquote>
      </div>
    </div>
  </div>
  <div class="row">
    <!--Grid-->

  </div>

  <div class="row">
    <!--One Side Image-->
    <div class="col-4">
      <img class="img" src="<?php bloginfo('template_url'); ?>/assets/future.jpg" width="100%" height="93%">
    </div>
    <div class="col-8" style="">
      <div class="jumbotron">
        <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
      </div>
    </div>
  </div>

  <div class="row">
    <!--One Side Image-->
    <div class="col-8" style="">
      <div class="jumbotron">
        <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
      </div>
    </div>
    <div class="col-4">
      <img class="img" src="<?php bloginfo('template_url'); ?>/assets/future.jpg" width="100%" height="93%">
    </div>  </div>
  <h3 class="text-center">Latest Update From Blog</h3><hr>
  <div class="row">
    <!--Blog Update-->
  <div class="col-4">
    <div class="card mb-4">
      <img class="img-thumbnail" src="http://via.placeholder.com/250x200"><br>
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-primary">More >></button><br>
      </div>
    </div>
  </div>

  <div class="col-4">
    <div class="card mb-4">
      <img class="img-thumbnail" src="http://via.placeholder.com/250x200"><br>
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-primary">More >></button><br>
      </div>
    </div>
  </div>

   <div class="col-4">
    <div class="card mb-4">
      <img class="img-thumbnail" src="http://via.placeholder.com/250x200"><br>
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-outline-primary">More >></button><br>
      </div>
    </div>
  </div>
  </div><br>
    <h3 class="text-center">Find Us On Social Media</h3><hr>
  <div class="row">
    <!--Social Media-->
<div class="col-12">
  <div class="jumbotron text-center">
    <button type="button" class="btn btn-outline-primary" style="padding: 15px;"><i class="fa fa-facebook-square"  style="font-size: 80px;"></i></button>
    <button type="button" class="btn btn-outline-primary" style="padding: 15px;"><i class="fa fa-google-plus-square"  style="font-size: 80px;"></i></button>
    <button type="button" class="btn btn-outline-primary" style="padding: 15px;"><i class="fa fa-twitter-square"  style="font-size: 80px"></i></button>
    <button type="button" class="btn btn-outline-primary" style="padding: 15px;"><i class="fa fa-linkedin-square"  style="font-size: 80px"></i></button>
  </div>
</div>
  </div>
<h3 class="text-center">Contact</h3><hr>
  <div class="row mb-4">
    <!--Contact-->
    <div class="col-8">
      <div id="map" style="height: 100%;width: 100%"></div>
      <script>
        function initMap() {
          var uluru = {lat: 24.8679073, lng: 89.357053};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSRXlGoQAIbi1yydLbVayIRw8OuBJaeiw&callback=initMap">
      </script>
    </div>
    <div class="col-4">
      <form>
        <input type="text" name="name" placeholder="Name" required="required" style="padding: 10px; width: 100%"><br><br>
        <input type="text" name="emailaddress" placeholder="Email Address" size="40" required="required" style="padding: 10px; width: 100%"><br><br>
        <textarea placeholder="Your Message" cols="40" rows="6" style="padding: 10px; width: 100%"></textarea><br><br>
        <button type="submit" class="btn btn-outline-primary" style="padding: 10px">Submit</button><br>
      </form>
    </div>

  </div>
<?php get_footer(); ?>