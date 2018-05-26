<div class="col-12">
<div class="card card-body">
	<?php wp_list_comments(); ?>

		<?php if( previous_comments_link() ) : ?>
		  <li class="previous">
		    <?php previous_comments_link( __( '&larr; Older Comments', '' ) ); ?>
		  </li>
		<?php endif; ?>

		<?php if( next_comments_link() ) : ?>
		  <li class="next">
		    <?php next_comments_link( __( '&larr; Newer Comments', '' ) ); ?>
		  </li>
		<?php endif; ?>
			
	
	<?php $comments_args = array(
	        // change the title of send button 
	        'label_submit'=>__('Send', 'moduler'),
	        // change the title of the reply section
	        'title_reply'=> __('Write a Reply or Comment', 'moduler'),
	        // remove "Text or HTML to be displayed after the set of comment fields"
	        'comment_notes_after' => '',
	        // redefine your own textarea (the comment body)
	        'comment_field' => '<p class="comment-form-comment"><label for="comment"></label><textarea id="comment" name="comment" aria-required="true" placeholder="' . __('Write your comment here...', 'moduler') .'" required="required" rows="4"></textarea></p>',
	);

	comment_form($comments_args);

	?>
	 <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
</div>
</div>