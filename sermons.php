<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 Template name: Sermons
 * @package fabthemes
 */

get_header(); ?>

<div class="page-head">
	<div class="container"><div class="row">
		<div class="col-md-12">
			<h2 class="page-title"> <?php _e('Sermons','fabthemes' ); ?></h2>
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
	<div class="col-md-12">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row grid-cover">
				<?php
				if ( get_query_var('paged') )
				    $paged = get_query_var('paged');
				elseif ( get_query_var('page') )
				    $paged = get_query_var('page');
				else
				    $paged = 1;
				$wp_query = new WP_Query(array('post_type' => 'sermon', 'paged' => $paged ));
				?>
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<div class="col-md-4">
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content-sermon' );
				?>
				</div>
			<?php endwhile; ?>
			<div class="clearfix"></div>
			<?php kriesi_pagination(); ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	</div>

</div></div>
<?php get_footer(); ?>
