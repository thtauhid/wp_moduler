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
 <h3 class="text-center"><?php echo get_theme_mod('client_main_title', 'What Our Clients Say'); ?></h3><hr>
  <div class="row">

    <!--Client Area-->

    <div class="col-4">
          <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
            <div class="card-header"> <img class="rounded-circle" src="<?php echo get_theme_mod('client_1_img', get_bloginfo('template_url').'/assets/placeholder_face.png'); ?>" height="50" width="50" style="padding: 5px"><?php echo get_theme_mod('client_1_name', 'Tasnimul H. Tauhid'); ?></div>
            <div class="card-body">
              <p class="card-text"><?php echo get_theme_mod('client_1_text', 'Some quick example text to build on the card title and make up the bulk of the cards content.'); ?></p>
            </div>
          </div>
    </div>

    <div class="col-4">
          <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
            <div class="card-header"> <img class="rounded-circle" src="<?php echo get_theme_mod('client_2_img', get_bloginfo('template_url').'/assets/placeholder_face.png'); ?>" height="50" width="50" style="padding: 5px"><?php echo get_theme_mod('client_2_name', 'Tasnimul H. Tauhid'); ?></div>
            <div class="card-body">
              <p class="card-text"><?php echo get_theme_mod('client_2_text', 'Some quick example text to build on the card title and make up the bulk of the cards content.'); ?></p>
            </div>
          </div>
    </div>

    <div class="col-4">
          <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
            <div class="card-header"> <img class="rounded-circle" src="<?php echo get_theme_mod('client_3_img', get_bloginfo('template_url').'/assets/placeholder_face.png'); ?>" height="50" width="50" style="padding: 5px"><?php echo get_theme_mod('client_3_name', 'Tasnimul H. Tauhid'); ?></div>
            <div class="card-body">
              <p class="card-text"><?php echo get_theme_mod('client_3_text', 'Some quick example text to build on the card title and make up the bulk of the cards content.'); ?></p>
            </div>
          </div>
    </div>
  </div>
 <h3 class="text-center"><?php echo get_theme_mod('', 'Our Awesome Team'); ?></h3><hr>
  <div class="row">
    <!--Our Team-->
    <div class="col-4">
          <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">

            <img class="card-img-top rounded-circle" src="<?php echo get_theme_mod('team_member_1_img', get_bloginfo('template_url').'/assets/face1.png'); ?>" style="padding: 25px" >

            <div class="card-header">
              <h4 class="card-title text-center"><?php echo get_theme_mod('team_member_1_name', 'Tasnimul H. Tauhid'); ?></h4>
              <h6 class="card-title text-center"><?php echo get_theme_mod('team_member_1_designation', 'Web Developer'); ?></h6>
            </div>
            <div class="card-body">
              <p class="card-text"><?php echo get_theme_mod('team_member_1_text', 'Some quick example text to build on the card title and make up the bulk of the cards content.'); ?></p>
              <a href="<?php echo get_theme_mod('team_member_1_facebook', '#'); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-facebook-square"  style="font-size: 25px;"></i></button></a>
              <a href="<?php echo get_theme_mod('team_member_1_twitter', '#'); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-twitter-square"  style="font-size:25px; "></i></button></a>
              <a href="mailto:<?php echo get_theme_mod('team_member_1_email', ''); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-envelope-square"  style="font-size:25px; "></i></button></a>
            </div>
          </div>
    </div>
    <div class="col-4">
          <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
            <img class="card-img-top rounded-circle" src="<?php echo get_theme_mod('team_member_2_img', get_bloginfo('template_url').'/assets/placeholder_face.png'); ?>" style="padding: 25px">
            <div class="card-header">
              <h4 class="card-title text-center"><?php echo get_theme_mod('team_member_2_name', 'Tasnimul H. Tauhid'); ?></h4>
              <h6 class="card-title text-center"><?php echo get_theme_mod('team_member_2_designation', 'Web Developer'); ?></h6>
            </div>
            <div class="card-body">
              <p class="card-text"><?php echo get_theme_mod('team_member_2_text', 'Some quick example text to build on the card title and make up the bulk of the cards content.'); ?></p>
              <a href="<?php echo get_theme_mod('team_member_2_facebook', '#'); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-facebook-square"  style="font-size: 25px;"></i></button></a>
              <a href="<?php echo get_theme_mod('team_member_2_twitter', '#'); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-twitter-square"  style="font-size:25px; "></i></button></a>
              <a href="mailto:<?php echo get_theme_mod('team_member_2_email', ''); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-envelope-square"  style="font-size:25px; "></i></button></a>
            </div>
          </div>
    </div>
    <div class="col-4">
          <div class="card text-white bg-secondary mb-3" style="max-width: 25rem;">
            <img class="card-img-top rounded-circle" src="<?php echo get_theme_mod('team_member_3_img', get_bloginfo('template_url').'/assets/placeholder_face.png'); ?>" style="padding: 25px">
            <div class="card-header">
              <h4 class="card-title text-center"><?php echo get_theme_mod('team_member_3_name', 'Tasnimul H. Tauhid'); ?></h4>
              <h6 class="card-title text-center"><?php echo get_theme_mod('team_member_3_designation', 'Web Developer'); ?></h6>
            </div>
            <div class="card-body">
              <p class="card-text"><?php echo get_theme_mod('team_member_3_text', 'Some quick example text to build on the card title and make up the bulk of the cards content.'); ?></p>

              <a href="<?php echo get_theme_mod('team_member_3_facebook', '#'); ?>">
                <button type="button" class="btn btn-outline-primary" style="padding: 5px;">
                  <i class="fa fa-facebook-square"  style="font-size: 25px;"></i>
                </button>
              </a>

              <a href="<?php echo get_theme_mod('team_member_3_twitter', '#'); ?>">
                <button type="button" class="btn btn-outline-primary" style="padding: 5px;">
                  <i class="fa fa-twitter-square"  style="font-size:25px; "></i>
                </button>
              </a>
              <a href="mailto:<?php echo get_theme_mod('team_member_3_email', ''); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-envelope-square"  style="font-size:25px; "></i></button></a>
            </div>
          </div>
    </div>
  </div>

 <br>     
 <h3 class="text-center"><?php echo get_theme_mod('cta_title', 'The Call To Action Button'); ?></h3><hr>
  <div class="row">
    <!--Full Scape-->
    <div class="col-12">
      <div class="jumbotron">
<blockquote class="blockquote text-center" >
  <h3><?php echo get_theme_mod('cta_sub_title', 'Something, That is pre built'); ?></h3>
  <p class="mb-0"><?php echo get_theme_mod('cta_main_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>'); ?><br>
  <a href="<?php echo get_theme_mod('cta_button_url', '#'); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 15px; font-size: 15px;"><b><?php echo get_theme_mod('cta_button_text', 'Check Out'); ?></b></button></a>
</blockquote>
      </div>
    </div>
  </div>
  <div class="row">
    <!--Grid-->

  </div>

  <h3 class="text-center">Latest Update From Blog</h3><hr>
  <div class="row">

         <?php 
            $args_latest = array(           
            'post_type' => 'post',
            'ignore_sticky_posts' => 0,
            'posts_per_page' => 3       
        );
            $the_query = new WP_Query($args_latest); ?>

    <!--Blog Update-->
    <?php if(have_posts()) : ?>
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>


  <div class="col-4">
    <div class="card mb-4">
     <a href="<?php the_permalink(); ?>"> <img class="img-thumbnail" src="
      <?php 
      if(has_post_thumbnail()) {the_post_thumbnail_url();} else{echo "http://via.placeholder.com/380x210";} ?>"></a>
       <div class="card-body">
        <h4 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
        <p>On <?php the_time('j F, Y') ?> by <?php the_author_posts_link(); ?> </p>

        <p class="card-text"><?php the_excerpt() ?></p>
          <button type="button" class="a btn btn-outline-primary"><a href="<?php the_permalink() ?>">More >></a></button><br>
      </div>
    </div>
  </div>
<?php endwhile; ?>
  </div>
        <?php else : ?>
      <p><?php __('No Posts Found'); ?></p>
    <?php endif; ?>
  <br>

<h3 class="text-center"><?php echo get_theme_mod('contact_title', 'Contact'); ?></h3><hr>
  <div class="row mb-4">
    <!--Contact-->
    <div class="col-2">
      <div class="text-center">

        <a href="<?php echo get_theme_mod('social_media_fb', '#'); ?>">
          <button type="button" class="btn btn-outline-primary" style="padding: 15px;">
            <i class="fa fa-facebook-square"  style="font-size: 70px;"></i>
          </button>
        </a>

        <a href="<?php echo get_theme_mod('social_media_google_plus', '#'); ?>">
          <button type="button" class="btn btn-outline-primary" style="padding: 15px;">
            <i class="fa fa-google-plus-square"  style="font-size: 70px;"></i>
          </button>
        </a>

        <a href="<?php echo get_theme_mod('social_media_twitter', '#'); ?>">
          <button type="button" class="btn btn-outline-primary" style="padding: 15px;">
            <i class="fa fa-twitter-square"  style="font-size: 70px"></i>
          </button>
        </a>

        <a href="<?php echo  get_theme_mod('social_media_linkedin', '#'); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 15px;"><i class="fa fa-linkedin-square"  style="font-size: 70px"></i>
        </button>
      </a>


      </div>

    </div>
    <div class="col-10">
      <form method="post">
        <input type="text" name="contactpersonname" placeholder="Name" required="required" style="padding: 10px; width: 100%"><br><br>
        <input type="text" name="emailaddress" placeholder="Email Address" size="40" required="required" style="padding: 10px; width: 100%"><br><br>
        <textarea name="contact_textarea" placeholder="Your Message" cols="40" rows="6" style="padding: 10px; width: 100%"></textarea><br><br>
        <button type="submit" class="btn btn-outline-primary" style="padding: 10px">Submit</button><br>
      </form>
    </div>

  </div>
<?php get_footer(); ?>