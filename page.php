<?php get_header(); ?>
    </div>
  </div>

  <div class="row">
    <!--Blog Update-->
    <?php if(have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

  <div class="col-12">
    <div class="card mb-4">
      <img class="img-thumbnail" src="
      <?php 
      if(has_post_thumbnail()) {the_post_thumbnail_url();} else{ echo esc_html( get_template_directory_uri() . '/assets/binder-blank-book-bindings-479815.jpg'); } ?>">
      
      <div class="card-body">
        <h2 class="card-title"><?php the_title() ?></h2>
        <p><?php echo esc_html( __('On ', 'moduler') ); ?><?php the_time('j F, Y') ?> <?php echo esc_html( __('by ', 'moduler') ); ?><?php the_author_posts_link(); ?></p>
        <p class="card-text">
           <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php the_content(); ?>
            </div>

        </p>
      </div>
    </div>
  </div>


  <?php wp_link_pages( array(
  'before'      => '  <div class="col-12">
    <div class="card mb-4">
      <div class="card-body">' . __( 'Pages:', 'moduler' ) . '</span>',
  'after'       => '      </div>
    </div>
  </div>',
  'link_before' => '<span>',
  'link_after'  => '</span>',
  ) );
?>
            <?php comments_template(); ?>

<?php endwhile; ?>
  </div>
        <?php else : ?>
      <p><?php echo esc_html( __('No Posts Found', 'moduler') ); ?></p>
    <?php endif; ?>
  <!-- </div> -->
  <!-- </div> -->
<?php get_footer(); ?>