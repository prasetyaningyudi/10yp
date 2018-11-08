<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
 
<div class="comments-wrap">
 
            <div id="comments" class="row">
                <div class="col-full"> 
					<?php if ( have_comments() ) : ?>
						<h3 class="h2">
							<?php
								printf( _nx( 'One Comment ', '%1$s Comments ', get_comments_number(), 'comments title', 'yudiprasetya' ),
									number_format_i18n( get_comments_number() ), '' );
							?>
						</h3>
				 
						<ol class="commentlist">
							<?php wp_list_comments('type=comment&callback=format_comment'); ?>
						</ol><!-- .comment-list -->
				 
						<?php
							// Are there comments to navigate through?
							if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
						?>
						<nav class="navigation comment-navigation" role="navigation">
							<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'yudiprasetya' ); ?></h1>
							<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'yudiprasetya' ) ); ?></div>
							<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'yudiprasetya' ) ); ?></div>
						</nav><!-- .comment-navigation -->
						<?php endif; // Check for comment navigation ?>
				 
						<?php if ( ! comments_open() && get_comments_number() ) : ?>
						<p class="no-comments"><?php _e( 'Comments are closed.' , 'yudiprasetya' ); ?></p>
						<?php endif; ?>
				 
					<?php endif; // have_comments() ?>
                </div> <!-- end col-full -->
            </div> <!-- end comments -->
    
            <div class="row comment-respond">

                <!-- START respond -->
                <div id="respond" class="col-full">	
				<?php 
					$comments_args = array(
							// change the title of send button 
							'label_submit'=>'Send',
							// change the title of the reply section
							'title_reply'=>'Add comment<span>Your email address will not be published</span>',
							'comment_notes_before' => '',
							// remove "Text or HTML to be displayed after the set of comment fields"
							'comment_notes_after' => '',
							// redefine your own textarea (the comment body)
							'fields' => array(

							  'author' =>
								'<div class="form-field">' .
								'<input id="author" name="author" type="text" placeholder="Your Name*" class="full-width" value="' . esc_attr( $commenter['comment_author'] ) .
								'" ' . $aria_req . '></div>',

							  'email' =>
								'<div class="form-field">' .
								'<input id="email" name="email" type="text" placeholder="Your Email*" class="full-width" value="' . esc_attr(  $commenter['comment_author_email'] ) .
								'" ' . $aria_req . '></div>',

							  'url' =>
								'<div class="form-field">' .
								'<input id="url" name="url" type="text" class="full-width" placeholder="Website"  value="' . esc_attr( $commenter['comment_author_url'] ) .
								'"></div>',
							),
							'comment_field' => '<div class="message form-field">'
							. '<textarea id="comment" name="comment" aria-required="true" class="full-width" placeholder="Your Message*"></textarea></div>',
					);

					comment_form($comments_args);
				?>
				</div> <!-- end comment-respond -->

			</div> <!-- end comments-wrap -->	
 
</div><!-- #comments -->