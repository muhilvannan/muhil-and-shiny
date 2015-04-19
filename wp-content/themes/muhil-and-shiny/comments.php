<ol class="commentlist">
    <a id="Comments"></a>
	<?php wp_list_comments(); ?>
</ol>
            
<?php
		  
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
  
	$fields =  array(
	'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
				'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
	'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '  </label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
				'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
	'url'    => '',
); ?>
   
   
   
<?php comment_form(
	array(
	'fields' => apply_filters( 'comment_form_default_fields', $fields ),
    'comment_field' => '<p class="comment-form-comment"><label>Message</label><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
    'label_submit' => 'Post Message',
	'title_reply' => 'Leave a Message',
	'comment_notes_after' => ''
	)
); ?>
           
           