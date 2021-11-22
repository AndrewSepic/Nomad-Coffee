<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php');

// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php');

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php');

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php');

//
// Site Custom functions
//

add_action('wp_enqueue_scripts','enqueue_stuff');
function enqueue_stuff() {
  wp_enqueue_style ('foundation-icons',  get_stylesheet_directory_uri() . '/assets/foundation-icons/foundation-icons.css');
}



// Setup Custom image size
add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_setup() {
    add_image_size( 'latest-thumb', 240, 240, true );
}

// Adds Custom Logo and Logo URL to login Page
add_action('login_head', 'custom_login_logo');
function custom_login_logo() {
		echo '<style type="text/css">
		h1 a { background-image:url('.get_stylesheet_directory_uri().'/assets/images/nomad-logo.svg) !important; background-size: 320px 88px !important;height: 88px !important; width: 320px !important; margin-bottom: 0 !important; padding-bottom: 10px !important; }
		.login form { margin-top: 10px !important; }
		</style>';
}

function url_login_logo(){
		return get_bloginfo( 'wpurl' );
}
add_filter('login_headerurl', 'url_login_logo');

// Custom Login Styles

function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_directory_uri() . '/assets/css/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

//Registers new SIDEBAR/WIDGET  callback below
function footer_widget1() {
	register_sidebar( array(
		'name'          => __( 'Footer1', 'theme_text_domain' ),
		'id'            => 'footer1',
		'description'   => '',
	  'class'         => '',
		'before_widget' => '<div class="small-12 large-4 columns">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	 ) );
}
add_action( 'widgets_init', 'footer_widget1' );

//Registers new SIDEBAR/WIDGET  callback below
function footer_widget2() {
	register_sidebar( array(
		'name'          => __( 'Footer2', 'theme_text_domain' ),
		'id'            => 'footer2',
		'description'   => '',
	  'class'         => '',
		'before_widget' => '<div class="small-12 large-8 columns">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	 ) );
}
add_action( 'widgets_init', 'footer_widget2' );
