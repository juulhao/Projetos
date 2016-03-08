<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="post-comment padding-top-40">

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentyfifteen' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h3>

		<?php twentyfifteen_comment_nav(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php twentyfifteen_comment_nav(); ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfifteen' ); ?></p>
	<?php endif; ?>
	
	<?php
	$fields =  array(
		'author' => '<div class="form-group"><label for="author">' . __( 'Nome', 'twentyfifteen' ) . '</label> ' .
		( $req ? '<span class="required">*</span>' : '' ) .
		'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30"' . $aria_req . ' class="form-control" /></div>',
		
		'email' =>
		'<div class="form-group"><label for="email">' . __( 'Email', 'twentyfifteen' ) . '</label> ' .
		( $req ? '<span class="required">*</span>' : '' ) .
		'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		'" size="30"' . $aria_req . ' class="form-control" /></div>',
		
	);
	
	$args = array(
		'class_submit'	=>	'btn btn-primary',
		'comment_field'	=>	'<div class="form-group"><label for="comment">' . _x( 'Comentário', 'noun' ) .
    '</label><textarea id="comment" name="comment" class="form-control" rows="8" aria-required="true" >' .
    '</textarea></div>',
		'fields' => apply_filters( 'comment_form_default_fields', $fields )
	);
	
	comment_form( $args );
	
	?>

</div><!-- .comments-area -->