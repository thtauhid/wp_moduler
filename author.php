<?php get_header(); ?>
    </div>
  </div>

  <div class="row">
    <!--Blog Update-->
    <div class="col-12">
    	<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
    	<h2><p><?php echo __('Author: ', 'moduler') ?><?php echo $curauth->nickname; ?></p></h2>
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
        <p><?php echo __('On ', 'moduler') ?><?php the_time('j F, Y') ?> <?php echo __('by ', 'moduler') ?><?php the_author_posts_link(); ?></a></p>
        <p class="card-text"><?php the_excerpt() ?></p>
          <button type="button" class="a btn btn-outline-primary"><a href="<?php the_permalink() ?>">More >></a></button><br>
      </div>
    </div>
  </div>
<?php endwhile; ?>
  </div>
        <?php else : ?>
      <p><?php __('No Posts Found', 'moduler'); ?></p>
    <?php endif; ?>
  <!-- </div> -->
  <!-- </div> -->
<?php get_footer(); ?>