<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 Template name: Home 2
 * @package fabthemes
 */
get_header(); ?>

<!-- Featured Slideshow -->

<div id="fslide">
	<div class="flexslider">
        <ul class="slides">
		<?php 
			$slidecount = ft_of_get_option('fabthemes_slidecount','3');
			$args = array( 'posts_per_page' => $slidecount, 'post_type' => 'slider_item' );
			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); 
		?>

				<?php 
				$thumb = get_post_meta($post->ID, '_slide_meta_slide_image', true);
				$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
				$image = aq_resize( $img_url, 1920, 600, true,true,true ); //resize & crop the image
				?>
				<?php if($image) : ?>
					<li> 

					<div class="flex-caption">
						<h3><?php the_title(); ?></h3>
						<p> <?php echo get_post_meta($post->ID, '_slide_meta_slide_content', true); ?></p>
					</div>
					<img class="slidepic" src="<?php echo $image ?>" alt="<?php the_title(); ?>" /> 
					
					</li>
				<?php endif; ?>

		<?php 
			endwhile;
		    wp_reset_postdata(); else :
		?> 
			<?php get_template_part('aw-template/default', 'slider');?>
		<?php endif ;?>
		</ul>
	</div>
</div> 
<div id="bible-quote" class="home-section">
	<div class="container">
		<div class="row">
			<h2 class="section-title"> <?php _e( 'Bible Quote of the day', 'fabthemes'); ?> </h2>
			<blockquote>  <?php echo ft_of_get_option('fabthemes_bquote'); ?> </blockquote> 
			<span> <?php echo ft_of_get_option('fabthemes_bquote_from'); ?>  </span>
		</div>
	</div>
</div>
<div id="fservices" class="home-section">
	<div class="container">
		<div class="row">
			<h2 class="section-title"> <?php _e( 'Our Services', 'fabthemes'); ?> </h2>
			
			<?php 
				$servecount = ft_of_get_option('fabthemes_servecount','3');
				$args = array( 'posts_per_page' => $servecount, 'post_type' => 'service' );
				$loop = new WP_Query( $args );
				if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); 
			?>

			<div class="col-md-4">
				<div class="grid-box service-box">

					<?php 
					$thumb = get_post_thumbnail_id();
					$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
					$image = aq_resize( $img_url, 760, 460, true,true,true ); //resize & crop the image
					?>
					<?php if($image) : ?>
						<a href="<?php the_permalink();?>"> <img class="gridpic" src="<?php echo $image ?>" alt="<?php the_title(); ?>" /> </a>
					<?php endif; ?>

					<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<?php the_excerpt(); ?>
					<a class="read-more" href="<?php the_permalink(); ?>"><?php _e( 'Read More', 'fabthemes' );?></a>

				</div>
			</div>

			<?php 
				endwhile;
				wp_reset_postdata();
				else :
			?>
			<div class="col-md-4">
				<div class="grid-box service-box">
					<a href="http://demo.fabthemes.com/malaka/service/outreach-program/"> <img alt="Outreach program" src="http://cdn.demo.fabthemes.com/malaka/files/2015/04/wallpaper-2306118-1-760x460.jpg" class="gridpic"> </a>

					<h2><a rel="bookmark" href="http://demo.fabthemes.com/malaka/service/outreach-program/">Outreach program</a></h2>				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At […]</p>
					<a href="http://demo.fabthemes.com/malaka/service/outreach-program/" class="read-more">Read More</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid-box service-box">
					<a href="http://demo.fabthemes.com/malaka/service/outreach-program/"> <img alt="Outreach program" src="http://cdn.demo.fabthemes.com/malaka/files/2015/04/wallpaper-2306118-1-760x460.jpg" class="gridpic"> </a>

					<h2><a rel="bookmark" href="http://demo.fabthemes.com/malaka/service/outreach-program/">Outreach program</a></h2>				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At […]</p>
					<a href="http://demo.fabthemes.com/malaka/service/outreach-program/" class="read-more">Read More</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="grid-box service-box">
					<a href="http://demo.fabthemes.com/malaka/service/outreach-program/"> <img alt="Outreach program" src="http://cdn.demo.fabthemes.com/malaka/files/2015/04/wallpaper-2306118-1-760x460.jpg" class="gridpic"> </a>

					<h2><a rel="bookmark" href="http://demo.fabthemes.com/malaka/service/outreach-program/">Outreach program</a></h2>				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At […]</p>
					<a href="http://demo.fabthemes.com/malaka/service/outreach-program/" class="read-more">Read More</a>
				</div>
			</div>
			<?php endif ;?>
		</div>
	</div>
</div>
<div id="fservices" class="home-section">
	<div class="container">
		<div class="row">
			<h2 class="section-title"> <?php _e( 'Sermons', 'fabthemes'); ?> </h2>
			<?php 
				$args = array( 'posts_per_page' => 3, 'post_type' => 'sermon' );
				$loop = new WP_Query( $args );
				if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); 
			?>
			<div class="col-md-4">
				<div class="grid-box news-box"> 
					<?php 
					$thumb = get_post_thumbnail_id();
					$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
					$image = aq_resize( $img_url, 760, 460, true,true,true ); //resize & crop the image
					?>
					<?php if($image) : ?>
						<a href="<?php the_permalink();?>"> <img class="gridpic" src="<?php echo $image ?>" alt="<?php the_title(); ?>" /> </a>
					<?php endif; ?>
					<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<?php //the_excerpt(); ?>
					<div class="clearfix listing-sermon-meta">
						<span class="sermon-meta"> 
							<i class="fa fa-user"></i> <?php echo get_post_meta($post->ID, '_sermon_meta_sermon_pastor', true); ?> 
						</span>
						<span class="sermon-meta"> 
							<i class="fa fa-headphones"></i> <a href="<?php echo get_post_meta($post->ID, '_sermon_meta_sermon_audio', true); ?>"> <?php _e( 'Listen', 'fabthemes' ); ?> </a>
						</span>
						<span class="sermon-meta"> 
							<i class="fa fa-file-pdf-o"></i> <a href="<?php echo get_post_meta($post->ID, '_sermon_meta_sermon_file', true); ?>"> <?php _e( 'Read', 'fabthemes' ); ?> </a>
						</span>
						<span class="sermon-meta"> 
							<i class="fa fa-video-camera"></i> <a class="fancybox" href='<?php echo get_post_meta($post->ID, '_sermon_meta_sermon_video', true); ?>'> <?php _e( 'Watch', 'fabthemes' ); ?> </a>
						</span>
					</div>
					<a class="read-more" href="<?php the_permalink(); ?>"><?php _e( 'Read More', 'fabthemes' );?></a>				
				</div>
			</div>
			<?php 
				endwhile;
				wp_reset_postdata();
				else :
			?>
			<div class="col-md-4">
				<div class="grid-box news-box"> 
					<a href="http://demo.fabthemes.com/malaka/2012/06/11/ut-commodo-ante-quis-arcu-fringilla-eget/"> <img alt="Ut commodo ante quis arcu fringilla eget" src="http://cdn.demo.fabthemes.com/malaka/files/2012/06/3rabwarez.com-55-760x460.jpg" class="gridpic"> </a>
					<h2><a rel="bookmark" href="http://demo.fabthemes.com/malaka/2012/06/11/ut-commodo-ante-quis-arcu-fringilla-eget/">Ut commodo ante quis arcu fringilla eget</a></h2>
					<div class="clearfix listing-sermon-meta">
						<span class="sermon-meta"> 
							<i class="fa fa-user"></i> Joyce Meyer 
						</span>
						<span class="sermon-meta"> 
							<i class="fa fa-headphones"></i> <a href="http://cdn.demo.fabthemes.com/malaka/files/2015/04/tail-toddle.mp3"> Listen </a>
						</span>
						<span class="sermon-meta"> 
							<i class="fa fa-file-pdf-o"></i> <a href="http://cdn.demo.fabthemes.com/malaka/files/2012/06/3rabwarez.com-7.jpg"> Read </a>
						</span>
						<span class="sermon-meta"> 
							<i class="fa fa-video-camera"></i> <a href="https://www.youtube.com/watch?v=fA6qohg1hQE" class="fancybox"> Watch </a>
						</span>	
					</div>
					<a href="http://demo.fabthemes.com/malaka/2012/06/11/ut-commodo-ante-quis-arcu-fringilla-eget/" class="read-more">Read More</a>				
				</div>
			</div>		
			<div class="col-md-4">
				<div class="grid-box news-box"> 
					<a href="http://demo.fabthemes.com/malaka/2012/06/11/ut-commodo-ante-quis-arcu-fringilla-eget/"> <img alt="Ut commodo ante quis arcu fringilla eget" src="http://cdn.demo.fabthemes.com/malaka/files/2012/06/3rabwarez.com-55-760x460.jpg" class="gridpic"> </a>
					<h2><a rel="bookmark" href="http://demo.fabthemes.com/malaka/2012/06/11/ut-commodo-ante-quis-arcu-fringilla-eget/">Ut commodo ante quis arcu fringilla eget</a></h2>
					<div class="clearfix listing-sermon-meta">
						<span class="sermon-meta"> 
							<i class="fa fa-user"></i> Joyce Meyer 
						</span>
						<span class="sermon-meta"> 
							<i class="fa fa-headphones"></i> <a href="http://cdn.demo.fabthemes.com/malaka/files/2015/04/tail-toddle.mp3"> Listen </a>
						</span>
						<span class="sermon-meta"> 
							<i class="fa fa-file-pdf-o"></i> <a href="http://cdn.demo.fabthemes.com/malaka/files/2012/06/3rabwarez.com-7.jpg"> Read </a>
						</span>
						<span class="sermon-meta"> 
							<i class="fa fa-video-camera"></i> <a href="https://www.youtube.com/watch?v=fA6qohg1hQE" class="fancybox"> Watch </a>
						</span>	
					</div>
					<a href="http://demo.fabthemes.com/malaka/2012/06/11/ut-commodo-ante-quis-arcu-fringilla-eget/" class="read-more">Read More</a>				
				</div>
			</div>		
			<div class="col-md-4">
				<div class="grid-box news-box"> 
					<a href="http://demo.fabthemes.com/malaka/2012/06/11/ut-commodo-ante-quis-arcu-fringilla-eget/"> <img alt="Ut commodo ante quis arcu fringilla eget" src="http://cdn.demo.fabthemes.com/malaka/files/2012/06/3rabwarez.com-55-760x460.jpg" class="gridpic"> </a>
					<h2><a rel="bookmark" href="http://demo.fabthemes.com/malaka/2012/06/11/ut-commodo-ante-quis-arcu-fringilla-eget/">Ut commodo ante quis arcu fringilla eget</a></h2>
					<div class="clearfix listing-sermon-meta">
						<span class="sermon-meta"> 
							<i class="fa fa-user"></i> Joyce Meyer 
						</span>
						<span class="sermon-meta"> 
							<i class="fa fa-headphones"></i> <a href="http://cdn.demo.fabthemes.com/malaka/files/2015/04/tail-toddle.mp3"> Listen </a>
						</span>
						<span class="sermon-meta"> 
							<i class="fa fa-file-pdf-o"></i> <a href="http://cdn.demo.fabthemes.com/malaka/files/2012/06/3rabwarez.com-7.jpg"> Read </a>
						</span>
						<span class="sermon-meta"> 
							<i class="fa fa-video-camera"></i> <a href="https://www.youtube.com/watch?v=fA6qohg1hQE" class="fancybox"> Watch </a>
						</span>	
					</div>
					<a href="http://demo.fabthemes.com/malaka/2012/06/11/ut-commodo-ante-quis-arcu-fringilla-eget/" class="read-more">Read More</a>				
				</div>
			</div>			
			<?php endif;?>
		</div>
	</div>
</div>
<?php get_footer(); ?>