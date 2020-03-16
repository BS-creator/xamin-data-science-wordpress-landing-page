<?php
function xamin_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
        if ( 'div' == $args['style'] ) {
            $tag = 'div';
            $add_below = 'comment';
        } else {
            $tag = 'li';
            $add_below = 'div-comment';
        }
    ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
        <p><?php esc_html__( 'Pingback:', 'xamin' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( '(Edit)', 'xamin' ), '<span class="edit-link">', '</span>' ); ?></p>
    <?php
            break;
        default :
        global $post;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
			<div class="iq-comments-media">
				<div class="iq-comment-wrap">
					<div class="iq-comments-photo">
						<?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
					</div>
					<div class="iq-comments-info">
						<h5 class="title">
							<?php printf( wp_kses( '%s ', 'xamin' ), sprintf( '%s', get_comment_author_link() ) ); ?>
						</h5>
						<div class="iq-comment-metadata">
							<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
								<time datetime="<?php comment_time( 'c' ); ?>">
									<i class="fa fa-calendar"></i>
									<?php printf( wp_kses( '%1$s at %2$s', '1: date, 2: time' ), get_comment_date(), get_comment_time()); ?>
								</time>
							</a>
							<?php edit_comment_link( esc_html__( 'Edit', 'xamin' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .comment-metadata -->
						<?php if ( '0' == $comment->comment_approved ) : ?>
						<p class="comment-awaiting-moderation"><?php esc_html__( 'Your comment is awaiting moderation.', 'xamin' ); ?></p>
						<?php endif; ?>
						<div class="comment-content">
							<?php comment_text(); ?>
						</div><!-- .comment-content -->
					</div><!-- .comment-author -->
					<div class="reply">
						<?php comment_reply_link( array_merge( $args, array( 'add_below' => 'div-comment', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
					</div><!-- .reply -->
				</div>
			</div>
        </article><!-- .comment-body -->
    <?php
        break;
	endswitch;
}
?>