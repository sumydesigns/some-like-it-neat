<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package digistarter
 */
?>
<?php tha_entry_before(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php tha_entry_top(); ?>
	<header class="entry-header">
		<?php
			if ( !is_front_page() ) { ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			<? } else {

			}
		?>

	</header><!-- .entry-header -->


	<div class="entry-content">

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'digistarter' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->
	<?php tha_entry_bottom(); ?>
	<?php edit_post_link( __( 'Edit', 'digistarter' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
	<?php tha_entry_bottom(); ?>
</article><!-- #post-## -->
<?php tha_entry_after(); ?>
