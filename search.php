<?php get_header(); ?>
    </div>
  </div>

  <div class="row">
    <!--Blog Update-->
    <div class="col-12">
    	<h2><p>Results for: <?php echo get_search_query(); ?></p></h2>
    </div>
    <?php if(have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>


  <div class="col-4">
    <div class="card mb-4">
     <a href="<?php the_permalink(); ?>"> <img style="height: 210px; width: 100%" class="img-thumbnail" src="
      <?php 
      if(has_post_thumbnail()) {the_post_thumbnail_url();} else{echo "http://via.placeholder.com/380x210";} ?>"></a>
       <div class="card-body">
        <h4 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
        <p>On <?php the_time('j F, Y') ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
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
  <!-- </div> -->
  <!-- </div> -->
<?php get_footer(); ?>