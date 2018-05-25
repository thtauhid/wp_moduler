<div class="col-12">
<div class="card card-body">
	<?php $args = array(
	'walker'            => null,
	'max_depth'         => '',
	'style'             => 'ol',
	'callback'          => null,
	'end-callback'      => null,
	'type'              => 'all',
	'reply_text'        => 'Reply',
	'page'              => '',
	'per_page'          => '',
	'avatar_size'       => 80,
	'reverse_top_level' => null,
	'reverse_children'  => '',
	'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
	'short_ping'        => false,   // @since 3.6
	'echo'              => true     // boolean, default is true
	); ?>

	<?php
	wp_list_comments($args, $comments);

	$comments_args = array(
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
</div>
</div>