<?php
/**
 * @package fabthemes
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('event-post'); ?>>

	<?php 
	$thumb = get_post_thumbnail_id();
	$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
	$image = aq_resize( $img_url, 760, 460, true,true,true ); //resize & crop the image
	?>
	<?php if($image) : ?>
		<a href="<?php the_permalink();?>"> <img class="post-pic" src="<?php echo $image ?>" alt="<?php the_title(); ?>" /> </a>
	<?php endif; ?>


	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<div class="entry-meta">
			<?php get_template_part('postmeta'); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<a class="read-more" href="<?php the_permalink();?>"> <?php _e('View details','fabthemes'); ?> </a>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
