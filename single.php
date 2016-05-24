<?php
/**
 * The template for displaying all single posts.
 *
 * @package fabthemes
 */

get_header(); ?>
<div class="page-head">
	<div class="container"><div class="row">
		<div class="col-md-12">
			<h2 class="page-title"> 
				
				<?php $post_type = get_post_type();

				switch( $post_type )
				{
				    case 'post':
				        _e( 'Article', 'fabthemes' );
				    break;

				    case 'event':
				          _e( 'Event', 'fabthemes' );
					break;
					
				    case 'sermon':
				          _e( 'Sermon', 'fabthemes' );

				    break;
				    case 'service':
				          _e( 'Service', 'fabthemes' );

				    break;	

				} ?>
			</h2>
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
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

	

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_sidebar(); ?>
</div></div>
<?php get_footer(); ?>