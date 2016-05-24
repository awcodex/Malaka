<?php

// Events

// $event = register_cuztom_post_type( 'Event', array(
        // 'public'             => true,
        // 'publicly_queryable' => true,
        // 'show_ui'            => true,
        // 'show_in_menu'       => true,
        // 'query_var'          => true,
        // 'rewrite'            => array( 'slug' => 'events' ),
        // 'capability_type'    => 'post',
        // 'has_archive'        => true,
        // 'hierarchical'       => false,

    // 'supports' => array( 'title', 'editor', 'thumbnail' ),
    // 'menu_icon' => 'dashicons-calendar-alt' 
	// ));


// $event->add_meta_box( 
   // 'event_meta',
   // 'Event details', 
    // array(
        // array(
            // 'name'          => 'event_date',
            // 'label'         => 'Event date',
            // 'description'   => 'Date of the event',
            // 'type'          => 'date'
         // ),

        // array(
            // 'name'          => 'event_time',
            // 'label'         => 'Event time',
            // 'description'   => 'The timing of the event',
            // 'type'          => 'time'
        // ),    

        // array(
            // 'name'          => 'event_location',
            // 'label'         => 'Event location',
            // 'description'   => 'Location of the event',
            // 'type'          => 'text'
        // )
      // )
   // );


// Services

$service = register_cuztom_post_type( 'Service', array(
    'has_archive' => true,
    'supports' => array( 'title', 'editor', 'thumbnail' ),
    'menu_icon' => 'dashicons-lightbulb' 
	));


// Sermons

$sermon = register_cuztom_post_type( 'Sermon', array(
    'has_archive' => true,
    'supports' => array( 'title', 'editor', 'thumbnail' ),
    'menu_icon' => 'dashicons-book' 
	));

$sermon->add_meta_box( 
   'sermon_meta',
   'Sermon details', 
    array(
        array(
            'name'          => 'sermon_pastor',
            'label'         => 'Pastor name',
            'description'   => 'Name of the pastor',
            'type'          => 'text'
        ),
        array(
            'name'          => 'sermon_video',
            'label'         => 'Sermon Video',
            'description'   => 'Video of the sermon',
            'type'          => 'textarea'
        ),
        array(
            'name'          => 'sermon_audio',
            'label'         => 'Sermon Audio',
            'description'   => 'Audio of the sermon',
            'type'          => 'file'
        ),
        array(
            'name'          => 'sermon_file',
            'label'         => 'Sermon file',
            'description'   => 'PDF file of the sermon',
            'type'          => 'file'
        )

      )
   );



// Slides

$slide = register_cuztom_post_type( 'Slider_item', array(
    'has_archive' => false,
    'supports' => array( 'title' ),
    'menu_icon' => 'dashicons-images-alt' 
    ));

$slide->add_meta_box( 
   'slide_meta',
   'Slide details', 
    array(

        array(
            'name'          => 'slide_image',
            'label'         => 'Slide Image',
            'description'   => 'Slide image upload',
            'type'          => 'image'
        ),

        array(
            'name'          => 'slide_content',
            'label'         => 'Slide content',
            'description'   => 'Slide content text',
            'type'          => 'textarea'
        )


      )

   );
