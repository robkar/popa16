<?php
/**
 * @package understrap
 */
?>
<?php
global $wp_query;
$loop_idx = $wp_query->current_post + 1;
 ?>

<article id="post-<?php the_ID(); ?>" <?php if ($loop_idx <= 2) { post_class('col-md-6'); } else { post_class('col-md-3');} ?>>

	<header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

       <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

		<div class="entry-content">

	            <?php
	                //the_excerpt();
                    echo '<p><a class="btn btn-secondary understrap-read-more-link" href="'. get_permalink( get_the_ID() ) . '">' . __('L&auml;s mer...', 'understrap')  . '</a></p>';
	            ?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				) );
			?>

		</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
