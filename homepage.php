<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 Template name: Home 1
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
<div id="combo-section" class="home-section">
	<div class="container">
		<div class="row">
		<!-- Events -->
			<div class="col-md-6">
				<h2 class="section-title"> <?php _e( 'Upcoming Events', 'fabthemes'); ?> </h2>
				<?php
					$eventcount = ft_of_get_option('fabthemes_eventcount','4'); 
					$args = array( 'posts_per_page' => $eventcount, 'post_type' => 'event' );
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) :while ( $loop->have_posts() ) : $loop->the_post(); 
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
					else :
				?>
				<div class="event-box"><!--default event -->
					<div class="row">
						<div class="col-md-4">
							<a href="http://demo.fabthemes.com/malaka/events/prayer-meet/"> <img alt="Prayer meet" src="http://cdn.demo.fabthemes.com/malaka/files/2015/04/tumblr_n8zm3lrclm1st5lhmo1_1280-760x460.jpg" class="gridpic"> </a>
						</div>
						<div class="col-md-8">
							<h3><a rel="bookmark" href="http://demo.fabthemes.com/malaka/events/prayer-meet/">Prayer meet</a></h3>
							<span class="event-meta"> <i class="fa fa-map-marker"></i> New York</span>
							<span class="event-meta"> <i class="fa fa-calendar"></i> May 13, 2015 </span>
							<span class="event-meta"> <i class="fa fa-clock-o"></i> 6:30 pm </span>
						</div>
					</div>
				</div>	
				<div class="event-box"><!--default event -->
					<div class="row">
						<div class="col-md-4">
							<a href="http://demo.fabthemes.com/malaka/events/prayer-meet/"> <img alt="Prayer meet" src="http://cdn.demo.fabthemes.com/malaka/files/2015/04/tumblr_n8zm3lrclm1st5lhmo1_1280-760x460.jpg" class="gridpic"> </a>
						</div>
						<div class="col-md-8">
							<h3><a rel="bookmark" href="http://demo.fabthemes.com/malaka/events/prayer-meet/">Prayer meet</a></h3>
							<span class="event-meta"> <i class="fa fa-map-marker"></i> New York</span>
							<span class="event-meta"> <i class="fa fa-calendar"></i> May 13, 2015 </span>
							<span class="event-meta"> <i class="fa fa-clock-o"></i> 6:30 pm </span>
						</div>
					</div>
				</div>	
				<div class="event-box"><!--default event -->
					<div class="row">
						<div class="col-md-4">
							<a href="http://demo.fabthemes.com/malaka/events/prayer-meet/"> <img alt="Prayer meet" src="http://cdn.demo.fabthemes.com/malaka/files/2015/04/tumblr_n8zm3lrclm1st5lhmo1_1280-760x460.jpg" class="gridpic"> </a>
						</div>
						<div class="col-md-8">
							<h3><a rel="bookmark" href="http://demo.fabthemes.com/malaka/events/prayer-meet/">Prayer meet</a></h3>
							<span class="event-meta"> <i class="fa fa-map-marker"></i> New York</span>
							<span class="event-meta"> <i class="fa fa-calendar"></i> May 13, 2015 </span>
							<span class="event-meta"> <i class="fa fa-clock-o"></i> 6:30 pm </span>
						</div>
					</div>
				</div>			
				<?php endif ;?>			
			</div>
			<!-- Events End -->
			<!-- Sermons -->
			<div class="col-md-6">
				<h2 class="section-title"> <?php _e( 'Events Calendar', 'fabthemes'); ?> </h2> 
				<div class="sermon-box"> 
					<?php
						$args= array('before_widget ' => '<div class="aw-calendar">', 'after_widget' => '</div>');
						$instance=['title'=> ' '];
						the_widget( 'EM_Widget_Calendar', $instance, $args );
					?> 
				</div> 
			</div>
			<!-- Sermons End -->
		</div>
	</div>
</div>
<!-- Combo-section Ends-->
<!-- Blog Section -->
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
<!-- Blog Section Ends -->
<?php get_footer(); ?>