<?php

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function bottom_widgets_init() {
	register_sidebar( array(
		'name'          => 'Bottom 1',
		'id'            => 'bottom_1',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Bottom 2',
		'id'            => 'bottom_2',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Bottom 3',
		'id'            => 'bottom_3',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );	
}
add_action( 'widgets_init', 'bottom_widgets_init' );

function footer_widgets_init() {
	register_sidebar( array(
		'name'          => 'Footer 1',
		'id'            => 'footer_1',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Footer 2',
		'id'            => 'footer_2',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );	
}
add_action( 'widgets_init', 'footer_widgets_init' );

?>

<?php

    function format_comment($comment, $args, $depth) {
    
       $GLOBALS['comment'] = $comment; ?>
       
			<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

				<div class="comment__avatar">
					<?php echo get_avatar( $comment, 50 ); ?>
				</div>

				<div class="comment__content">

					<div class="comment__info">
						<div class="comment__author"><?php printf(__('%s'), get_comment_author_link()) ?></div>

						<div class="comment__meta">
							<div class="comment__time"><?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?></div>
							<div class="comment__reply">
								<?php comment_reply_link(array_merge( $args, array('reply_text' => 'Reply', 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
							</div>
						</div>
					</div>

					<?php if ($comment->comment_approved == '0') : ?>
						<em><php _e('Your comment is awaiting moderation.') ?></em><br />
					<?php endif; ?>					
					
					<div class="comment__text">
						<?php comment_text(); ?>
					</div>

				</div>   
        
<?php } ?>
