<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
    <div class="text-center">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div>
	</header><!-- .entry-header -->
    <!--<div class="text-center">
        <?php /*echo get_the_post_thumbnail( $post->ID, 'large',array('class' => 'img-responsive ')  ); */?>
    </div>-->
<!--    <div class="entry-meta">
        <?php /*understrap_posted_on(); */?>
    </div>--><!-- .entry-meta -->
	<div class="entry-content">

		<?php the_content(); ?>

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
