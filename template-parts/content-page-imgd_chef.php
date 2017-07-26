<?php
/**
* Template part for displaying page content in page.php.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package ENBIGA
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php //the_post_thumbnail('full-cropped'); ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php
			if (has_post_thumbnail()){
				the_post_thumbnail('chef-cropped');
			}
	?>
	<div class="entry-content">
		<?php
		the_content();

		echo wpdocs_custom_taxonomies_terms_links();

		 if ( class_exists( 'Jetpack_RelatedPosts' ) ) {
		      echo do_shortcode( '[jetpack-related-posts]' );
		}

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'turismointer' ),
			'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php
				edit_post_link(
				sprintf(
				// translators: %s: Name of current post /
				esc_html__( 'Edit %s', 'turismointer' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<span class="edit-link">',
			'</span>'
		);
		?>
	</footer><!-- .entry-footer -->
<?php endif; ?>
</article><!-- #post-## -->
