<?php get_header() ?> 
<div class="jumbotron">
  <h1 class="display-3"><?php echo esc_html( get_theme_mod('moduler_main_title', __('Hello, world!', 'moduler') )); ?></h1>
  <p class="lead"><?php echo esc_html( get_theme_mod( 'moduler_below_title', __('This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.', 'moduler') ) ); ?></p>
  <hr class="my-4">
  <p><?php echo esc_html( get_theme_mod( 'moduler_main_text', __('It uses utility classes for typography and spacing to space content out within the larger container.', 'moduler') ) ); ?></p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="<?php echo esc_html( get_theme_mod( 'moduler_button_url', '#' ) ); ?>" role="button"><?php echo esc_html( get_theme_mod( 'moduler_button_text', __('Learn more', 'moduler') ) ); ?></a>
  </p>
</div>
    </div>
  </div>
   <h3 class="text-center"><?php echo esc_html( get_theme_mod('moduler_expertise_main_title', __('Our Expertise', 'moduler') ) ) ?></h3><hr>
  <div class="row">
    <!--Expertise-->
    <div class="col-12">
      <div class="jumbotron">
        <?php echo esc_html( get_theme_mod( 'moduler_expertise_1st_element', __('HTML & CSS:', 'moduler') ) ); ?><div class="progress">
          <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_html( get_theme_mod( 'moduler_expertise_1st_element_persentage', '60' ) ); ?>%"></div>
        </div><br>
        <?php echo esc_html( get_theme_mod( 'moduler_expertise_2nd_element', __('Bootstrap:', 'moduler') ) ); ?><div class="progress">
          <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_html( get_theme_mod( 'moduler_expertise_2nd_element_persentage', '70' ) ); ?>%"></div>
        </div><br>
        <?php echo esc_html( get_theme_mod( 'moduler_expertise_3rd_element', __('PHP:', 'moduler') ) ); ?><div class="progress">
          <div class="progress-bar progress-bar-striped bg-faded progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_html( get_theme_mod( 'moduler_expertise_3rd_element_persentage', '80' ) ); ?>%"></div>
        </div><br>
        <?php echo esc_html( get_theme_mod( 'moduler_expertise_4th_element', __('Photoshop:', 'moduler') ) ); ?><div class="progress">
          <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_html( get_theme_mod( 'moduler_expertise_4th_element_persentage', '90' ) ); ?>%"></div>
        </div>
      </div>
    </div>
  </div>
 <h3 class="text-center"><?php echo esc_html( get_theme_mod('moduler_client_main_title', __('What Our Clients Say', 'moduler') ) ); ?></h3><hr>
  <div class="row">

    <!--Client Area-->

    <div class="col-4">
          <div class="card text-white bg-secondary mb-3 moduler_client_area_main">
            <div class="card-header"> <img class="rounded-circle moduler_client_area" src="<?php echo esc_html( get_theme_mod('moduler_client_1_img',  get_template_directory_uri().'/assets/beautiful-blur-carefree-713312.jpg') ); ?>"><?php echo esc_html( get_theme_mod('moduler_client_1_name', __('Tasnimul H. Tauhid', 'moduler') ) ); ?></div>
            <div class="card-body">
              <p class="card-text"><?php echo esc_html( get_theme_mod('moduler_client_1_text', __('Some quick example text to build on the card title and make up the bulk of the cards content.', 'moduler') ) ); ?></p>
            </div>
          </div>
    </div>

    <div class="col-4">
          <div class="card text-white bg-secondary mb-3 moduler_client_area_main">
            <div class="card-header"> <img class="rounded-circle moduler_client_area" src="<?php echo esc_html( get_theme_mod('moduler_client_2_img',  get_template_directory_uri().'/assets/beard-eyewear-face-874158.jpg') ); ?>"><?php echo esc_html( get_theme_mod('moduler_client_2_name', __('Tasnimul H. Tauhid', 'moduler') ) ); ?></div>
            <div class="card-body">
              <p class="card-text"><?php echo esc_html( get_theme_mod('moduler_client_2_text', __('Some quick example text to build on the card title and make up the bulk of the cards content.', 'moduler') ) ); ?></p>
            </div>
          </div>
    </div>

    <div class="col-4">
          <div class="card text-white bg-secondary mb-3 moduler_client_area_main">
            <div class="card-header"> <img class="rounded-circle moduler_client_area" src="<?php echo esc_html( get_theme_mod('moduler_client_3_img',  get_template_directory_uri().'/assets/adolescent-attractive-beautiful-638700.jpg') ); ?>"><?php echo esc_html( get_theme_mod('moduler_client_3_name', __('Tasnimul H. Tauhid', 'moduler') ) ); ?></div>
            <div class="card-body">
              <p class="card-text"><?php echo esc_html( get_theme_mod('moduler_client_3_text', __('Some quick example text to build on the card title and make up the bulk of the cards content.', 'moduler') ) ); ?></p>
            </div>
          </div>
    </div>
  </div>
 <h3 class="text-center"><?php echo esc_html( get_theme_mod('moduler_', __('Our Awesome Team', 'moduler') ) ); ?></h3><hr>
  <div class="row">
    <!--Our Team-->
    <div class="col-4">
          <div class="card text-white bg-secondary mb-3 moduler_client_area_main">

            <img class="card-img-top rounded-circle moduler_team_area_img" src="<?php echo  esc_html( get_theme_mod('moduler_team_member_1_img',  get_template_directory_uri().'/assets/adolescent-attractive-beautiful-638700.jpg') ); ?>">

            <div class="card-header">
              <h4 class="card-title text-center"><?php echo esc_html( get_theme_mod('moduler_team_member_1_name', __('Tasnimul H. Tauhid', 'moduler') ) ); ?></h4>
              <h6 class="card-title text-center"><?php echo esc_html( get_theme_mod('moduler_team_member_1_designation', __('Web Developer', 'moduler') ) ); ?></h6>
            </div>
            <div class="card-body">
              <p class="card-text"><?php echo esc_html( get_theme_mod('moduler_team_member_1_text', __('Some quick example text to build on the card title and make up the bulk of the cards content.', 'moduler') ) ); ?></p>
              <a href="<?php echo esc_html( get_theme_mod('moduler_team_member_1_facebook', '#') ); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fab fa-facebook-square"  style="font-size: 25px;"></i></button></a>
              <a href="<?php echo esc_html( get_theme_mod('moduler_team_member_1_twitter', '#') ); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fab fa-twitter-square"  style="font-size:25px; "></i></button></a>
              <a href="mailto:<?php echo esc_html( get_theme_mod('moduler_team_member_1_email', '') ); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-envelope-square"  style="font-size:25px; "></i></button></a>
            </div>
          </div>
    </div>
    <div class="col-4">
          <div class="card text-white bg-secondary  moduler_client_area_main">
            <img class="card-img-top rounded-circle moduler_team_area_img" src="<?php echo esc_html( get_theme_mod('moduler_team_member_2_img',  get_template_directory_uri().'/assets/beard-eyewear-face-874158.jpg') ); ?>">
            <div class="card-header">
              <h4 class="card-title text-center"><?php echo esc_html( get_theme_mod('moduler_team_member_2_name', __('Tasnimul H. Tauhid', 'moduler') ) ); ?></h4>
              <h6 class="card-title text-center"><?php echo esc_html( get_theme_mod('moduler_team_member_2_designation', __('Web Developer', 'moduler') ) ); ?></h6>
            </div>
            <div class="card-body">
              <p class="card-text"><?php echo esc_html( get_theme_mod('moduler_team_member_2_text', __('Some quick example text to build on the card title and make up the bulk of the cards content.', 'moduler') ) ); ?></p>
              <a href="<?php echo esc_html( get_theme_mod('moduler_team_member_2_facebook', '#') ); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fab fa-facebook-square"  style="font-size: 25px;"></i></button></a>
              <a href="<?php echo esc_html( get_theme_mod('moduler_team_member_2_twitter', '#') ); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fab fa-twitter-square"  style="font-size:25px; "></i></button></a>
              <a href="mailto:<?php echo esc_html( get_theme_mod('moduler_team_member_2_email', '') ); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-envelope-square"  style="font-size:25px; "></i></button></a>
            </div>
          </div>
    </div>
    <div class="col-4">
          <div class="card text-white bg-secondary mb-3 moduler_client_area_main">
            <img class="card-img-top rounded-circle moduler_team_area_img" src="<?php echo  esc_html( get_theme_mod('moduler_team_member_3_img',  get_template_directory_uri().'/assets/beautiful-blur-carefree-713312.jpg') ); ?>">
            <div class="card-header">
              <h4 class="card-title text-center"><?php echo esc_html( get_theme_mod('moduler_team_member_3_name', __('Tasnimul H. Tauhid', 'moduler') ) ); ?></h4>
              <h6 class="card-title text-center"><?php echo esc_html( get_theme_mod('moduler_team_member_3_designation', __('Web Developer', 'moduler') ) ); ?></h6>
            </div>
            <div class="card-body">
              <p class="card-text"><?php echo esc_html( get_theme_mod('moduler_team_member_3_text', __('Some quick example text to build on the card title and make up the bulk of the cards content.', 'moduler') ) ); ?></p>

              <a href="<?php echo esc_html( get_theme_mod('moduler_team_member_3_facebook', '#') ); ?>">
                <button type="button" class="btn btn-outline-primary" style="padding: 5px;">
                  <i class="fab fa-facebook-square"  style="font-size: 25px;"></i>
                </button>
              </a>

              <a href="<?php echo esc_html( get_theme_mod('moduler_team_member_3_twitter', '#') ); ?>">
                <button type="button" class="btn btn-outline-primary" style="padding: 5px;">
                  <i class="fab fa-twitter-square"  style="font-size:25px; "></i>
                </button>
              </a>
              <a href="mailto:<?php echo esc_html( get_theme_mod('moduler_team_member_3_email', '') ); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 5px;"><i class="fa fa-envelope-square"  style="font-size:25px; "></i></button></a>
            </div>
          </div>
    </div>
  </div>

 <br>     
 <h3 class="text-center"><?php echo esc_html( get_theme_mod('moduler_cta_title', __('The Call To Action Button', 'moduler') ) ); ?></h3><hr>
  <div class="row">
    <!--Full Scape-->
    <div class="col-12">
      <div class="jumbotron">
<blockquote class="blockquote text-center" >
  <h3><?php echo esc_html( get_theme_mod('moduler_cta_sub_title', __('Something, That is pre built', 'moduler') ) ); ?></h3>
  <p class="mb-0"><?php echo esc_html( get_theme_mod('moduler_cta_main_text', __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.', 'moduler') ) ); ?></p><br>
  <a href="<?php echo esc_html( get_theme_mod('moduler_cta_button_url', '#') ); ?>"><button type="button" class="btn btn-outline-primary moduler_button_check_out_cta"><b><?php echo esc_html( get_theme_mod('moduler_cta_button_text', __('Check Out', 'moduler') ) ); ?></b></button></a>
</blockquote>
      </div>
    </div>
  </div>
  <div class="row">
    <!--Grid-->

  </div>

  <h3 class="text-center"><?php echo esc_html( __('Latest Update From Blog', 'moduler') ); ?></h3><hr>
  <div class="row">

         <?php 
            $args_latest = array(           
            'post_type' => 'post',
            'ignore_sticky_posts' => 0,
            'posts_per_page' => 3       
        );
            $the_query = new WP_Query($args_latest); ?>

    <!--Blog Update-->
    <?php if(have_posts() ) : ?>
            <?php while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>


  <div class="col-4">
    <div class="card mb-4">
     <a href="<?php the_permalink(); ?>"> <img class="img-thumbnail moduler_image_thumabnail_area_img" src="
      <?php 
      if(has_post_thumbnail() ) {the_post_thumbnail_url();} else{ echo esc_html( get_template_directory_uri() . '/assets/binder-blank-book-bindings-479815.jpg'); } ?>"></a>
       <div class="card-body">
        <h4 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
        <p> <?php echo esc_html( __('On ', 'moduler') ); the_time('j F, Y'); echo esc_html( __(' by ', 'moduler') );  the_author_posts_link(); ?> </p>

        <p class="card-text"><?php the_excerpt() ?></p>
          <a class="btn btn-outline-primary" href="<?php the_permalink(); ?>"><?php echo esc_html( __('More >>', 'moduler') ); ?></a><br>
      </div>
    </div>
  </div>
<?php endwhile; ?>
  </div>
        <?php else : ?>
      <p><?php echo esc_html( __('No Posts Found', 'moduler') ); ?></p>
    <?php endif; ?>
  <br>

<h3 class="text-center"><?php echo esc_html( get_theme_mod('moduler_contact_title', __('Contact', 'moduler') ) ); ?></h3><hr>
  <div class="row mb-4">
    <!--Contact-->
    <div class="col-12">
      <div class="text-center">

        <a href="<?php echo esc_html( get_theme_mod('moduler_social_media_fb', '#') ); ?>">
          <button type="button" class="btn btn-outline-primary" style="padding: 15px;">
            <i class="fab fa-facebook-square"  style="font-size: 70px;"></i>
          </button>
        </a>

        <a href="<?php echo esc_html( get_theme_mod('moduler_social_media_google_plus', '#') ); ?>">
          <button type="button" class="btn btn-outline-primary" style="padding: 15px;">
            <i class="fab fa-google-plus-square"  style="font-size: 70px;"></i>
          </button>
        </a>

        <a href="<?php echo esc_html( get_theme_mod('moduler_social_media_twitter', '#') ); ?>">
          <button type="button" class="btn btn-outline-primary" style="padding: 15px;">
            <i class="fab fa-twitter-square"  style="font-size: 70px"></i>
          </button>
        </a>

        <a href="<?php echo  esc_html( get_theme_mod('moduler_social_media_linkedin', '#') ); ?>"><button type="button" class="btn btn-outline-primary" style="padding: 15px;"><i class="fab fa-linkedin"  style="font-size: 70px"></i>
        </button>
      </a>


      </div>

    </div>
  </div>
<?php get_footer(); ?> 