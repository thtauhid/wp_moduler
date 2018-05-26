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
      if(has_post_thumbnail()) {the_post_thumbnail_url();} else{echo "http://via.placeholder.com/450x500";} ?>">
      
      <div class="card-body">
        <h2 class="card-title"><?php the_title() ?></h2>
        <p><?php echo __('On ', 'moduler') ?><?php the_time('j F, Y') ?> <?php echo __('by ', 'moduler') ?><?php the_author_posts_link(); ?></p>
        <p class="card-text"><?php the_content(); ?></p>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card mb-4">
      <div class="card-body">

<?php echo __('Categories: ', 'moduler');  the_category( ', ' ); ?>
      </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card mb-4">
      <div class="card-body">

    <?php echo __('Tags: ', 'moduler') . get_the_tag_list('', ', ', ''); ?>

      </div>
    </div>
  </div>

            <?php comments_template(); ?>

<?php endwhile; ?>
  </div>
        <?php else : ?>
      <p><?php __('No Posts Found', 'moduler'); ?></p>
    <?php endif; ?>
  <!-- </div> -->
  <!-- </div> -->
<?php get_footer(); ?>