<?php get_header(); ?>
    </div>
  </div>
  <div class="row">
    <!--Blog Update-->
    <?php if(have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>


  <div class="col-4">
    <div class="card mb-4">
     <a href="<?php the_permalink(); ?>"> <img style="height: 210px; width: 100%" class="img-thumbnail" src="
      <?php 
      if(has_post_thumbnail()) {the_post_thumbnail_url();} else{echo "http://via.placeholder.com/380x210";} ?>"></a>
       <div class="card-body">
        <h4 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
        <p>On <?php the_time('j F, Y') ?> by <?php the_author_posts_link(); ?> </p>

        <p class="card-text"><?php the_excerpt() ?></p>
          <button type="button" class="a btn btn-outline-primary"><a href="<?php the_permalink() ?>"><?php echo __('More >>', 'moduler') ?></a></button><br>
      </div>
    </div>
  </div>
<?php endwhile; ?>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="text-right">
        <?php previous_posts_link(__('Newer', 'moduler')); ?>
      </div>
      <div class="text-left">
        <?php next_posts_link(__('Older', 'moduler')); ?>
      </div>
    </div>
  </div>
        <?php else : ?>
      <p><?php __('No Posts Found', 'moduler'); ?></p>
    <?php endif; ?>
  <!-- </div> -->
  <!-- </div> -->
<?php get_footer(); ?>