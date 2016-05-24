<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package fabthemes
 */

get_header(); ?>

<div class="page-head">
<div class="container"><div class="row">
	<div class="col-md-12">
			<?php
				the_archive_title( '<h2 class="page-title">', '</h2>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
			<p id="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
			    <?php if(function_exists('bcn_display'))
			    {
			        bcn_display();
			    }?>
			</p>
	</div>
</div></div>
</div>

<div class="container"><div class="row"> 
	<div class="col-md-8">
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php kriesi_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
	</div>
<?php get_sidebar(); ?>
</div></div>
<?php get_footer(); ?>
