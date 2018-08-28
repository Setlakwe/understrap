<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


	<header class="entry-header">
        <div class="text-center">

        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h2>' ); ?>
            			<div class="entry-meta">
            				<?php understrap_posted_on(); ?>
            			</div>

        </div>

        <?php  if ( ! is_single() ) { ?>
            <div class="text-center img-container">
                <?php echo get_the_post_thumbnail( $post->ID, null ,array('class' => 'img-responsive ') ); ?>
            </div>
        <?php  } ?>

		<?php if ( 'post' == get_post_type() ) : ?>
<!--			<div class="entry-meta">-->
<!--				--><?php //understrap_posted_on(); ?>
<!--			</div> -->
            <!-- .entry-meta -->
		<?php endif; ?>

	</header><!-- .entry-header -->


	<div class="entry-content">

		<?php
		the_excerpt();
		?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php /*understrap_entry_footer(); */?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
