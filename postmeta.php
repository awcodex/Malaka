<?php $post_type = get_post_type();

	switch( $post_type )
	{
	    case 'post':

	       echo '<span><i class="fa fa-user"></i>';
	       the_author(); 
	       echo'</span>';	

	       echo '<span><i class="fa fa-clock-o"></i>';
	       the_time('F j, Y');
	       echo'</span>';

	       echo '<span><i class="fa fa-tags"></i>';
	       the_category(', '); 
	       echo'</span>';

	    break;
	    case 'event':

	       echo '<span><i class="fa fa-calendar"></i>';
	       		$eventdate = get_post_meta($post->ID, '_event_meta_event_date', true);
	       		if (!empty($eventdate)) { echo date("F j, Y", $eventdate); }
	       echo'</span>';	

	       echo '<span><i class="fa fa-map-marker"></i>';
	       echo get_post_meta($post->ID, '_event_meta_event_location', true);
	       echo'</span>';	

	       echo '<span><i class="fa fa-clock-o"></i>';
	       		$eventtime = get_post_meta($post->ID, '_event_meta_event_time', true);
	       		if (!empty($eventtime)) { echo date("g:i a", $eventtime); }
	       echo'</span>';	

	    break;
		case 'sermon':

	       echo '<span><i class="fa fa-user"></i>';
	       		echo get_post_meta($post->ID, '_sermon_meta_sermon_pastor', true);
	       echo'</span>';	

	       echo '<span><i class="fa fa-headphones"></i>'; ?>
	       		<a href="<?php echo get_post_meta($post->ID, '_sermon_meta_sermon_audio', true); ?>"> <?php _e( 'Listen', 'fabthemes' ); ?> </a> <?php
	       echo'</span>';	

	       echo '<span><i class="fa fa-file-pdf-o"></i> '; ?>
	       		<a href="<?php echo get_post_meta($post->ID, '_sermon_meta_sermon_file', true); ?>"> <?php _e( 'Read', 'fabthemes' ); ?> </a> <?php
	       echo'</span>';	

	       echo '<span><i class="fa fa-video-camera"></i> '; ?>
	       		<a class="fancybox" href='<?php echo get_post_meta($post->ID, '_sermon_meta_sermon_video', true); ?>'> <?php _e( 'Watch', 'fabthemes' ); ?> </a> <?php
	       	echo'</span>';	

	    break;

	} ?>