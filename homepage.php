<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 Template name: Home
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
			while ( $loop->have_posts() ) : $loop->the_post(); 
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
		    wp_reset_postdata();
		?>
		</ul>
	</div>
</div>

<!-- Featured Slideshow Ends -->


<!-- Bible Quote -->


<div id="bible-quote" class="home-section">
	<div class="container">
		<div class="row">
			<h2 class="section-title"> <?php _e( 'Bible Quote of the day', 'fabthemes'); ?> </h2>
			<blockquote>  <?php if(ft_of_get_option('fabthemes_bquote') ): echo ft_of_get_option('fabthemes_bquote'); else : echo 'May the God of hope fill you with all joy and peace as you trust in him, so that you may overflow with hope by the power of the Holy Spirit.'; endif ; ?> </blockquote> 
			<span> <?php if(ft_of_get_option('fabthemes_bquote_from')): echo ft_of_get_option('fabthemes_bquote_from'); else : echo 'Romans 15:13'; endif ; ?>  </span>
		</div>
	</div>
</div>

<!-- Bible Quote Ends-->


<!-- Services section -->

<div id="fservices" class="home-section">
	<div class="container"><div class="row">

		<h2 class="section-title"> <?php _e( 'Our Services', 'fabthemes'); ?> </h2>
		
		<?php 
			$servecount = ft_of_get_option('fabthemes_servecount','3');
			$args = array( 'posts_per_page' => $servecount, 'post_type' => 'service' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
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
		?>

	</div></div>
</div>

<!-- Services section Ends -->


<!-- Combo-section -->


<div id="combo-section" class="home-section">
	<div class="container"> <div class="row">
		
		<!-- Events -->
		<div class="col-md-6">
			<h2 class="section-title"> <?php _e( 'Upcoming Events', 'fabthemes'); ?> </h2>

			<?php
				$eventcount = ft_of_get_option('fabthemes_eventcount','4'); 
				$args = array( 'posts_per_page' => $eventcount, 'post_type' => 'event' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 
			?>
			
					<div class="event-box">
						<div class="row">
							<div class="col-md-4">
								<?php 
								$thumb = get_post_thumbnail_id();
								$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
								$image = aq_resize( $img_url, 760, 460, true,true,true ); //resize & crop the image
								?>
								<?php if($image) : ?>
									<a href="<?php the_permalink();?>"> <img class="gridpic" src="<?php echo $image ?>" alt="<?php the_title(); ?>" /> </a>
								<?php endif; ?>
							</div>
							<div class="col-md-8">
								<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
								<span class="event-meta"> <i class="fa fa-map-marker"></i> <?php echo get_post_meta($post->ID, '_event_meta_event_location', true); ?></span>

								<?php $eventdate = get_post_meta($post->ID, '_event_meta_event_date', true); ?>
								<span class="event-meta"> <i class="fa fa-calendar"></i> <?php if (!empty($eventdate)) { echo date("F j, Y", $eventdate); } ?> </span>
								
								<?php $eventtime = get_post_meta($post->ID, '_event_meta_event_time', true); ?>
								<span class="event-meta"> <i class="fa fa-clock-o"></i> <?php if (!empty($eventtime)) { echo date("g:i a", $eventtime); } ?> </span>
							</div>
						</div>
					</div>
			
			<?php 
				endwhile;
			    wp_reset_postdata();
			?>	
		
		</div>
		<!-- Events End -->

		<!-- Sermons -->
		<div class="col-md-6">
			<h2 class="section-title"> <?php _e( 'Sermons', 'fabthemes'); ?> </h2>

			<?php 
				$sermoncount = ft_of_get_option('fabthemes_sermoncount','4'); 			
				$args = array( 'posts_per_page' => $sermoncount, 'post_type' => 'sermon' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 
			?>

			<div class="sermon-box">
				<div class="row">
					<div class="col-md-4">
						<?php 
						$thumb = get_post_thumbnail_id();
						$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
						$image = aq_resize( $img_url, 760, 460, true,true,true ); //resize & crop the image
						?>
						<?php if($image) : ?>
							<a href="<?php the_permalink();?>"> <img class="gridpic" src="<?php echo $image ?>" alt="<?php the_title(); ?>" /> </a>
						<?php endif; ?>						
					</div>
					<div class="col-md-8">
						<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
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
				</div>
			</div>

			<?php 
				endwhile;
			    wp_reset_postdata();
			?>	
			
		</div>
		<!-- Sermons End -->
	</div></div>
	
</div>

<!-- Combo-section Ends-->


<!-- Blog Section -->

<div id="fservices" class="home-section">
	<div class="container"><div class="row">
		<h2 class="section-title"> <?php _e( 'Latest news', 'fabthemes'); ?> </h2>
		
		<?php 
			$args = array( 'posts_per_page' => 3 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
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
				<?php the_excerpt(); ?>
				<a class="read-more" href="<?php the_permalink(); ?>"><?php _e( 'Read More', 'fabthemes' );?></a>				
			</div>
		</div>

		<?php 
			endwhile;
		    wp_reset_postdata();
		?>

	</div></div>
</div>


<!-- Blog Section Ends -->


<?php get_footer(); ?>