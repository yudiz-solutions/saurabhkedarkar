<?php 

// <!-- slick slider link -->
// <link rel="stylesheet" href="./css/slick-theme.css">
// <link rel="stylesheet" href="./css/slick.css">
// <!-- css link -->
// <link rel="stylesheet" href="./css/all.css">
// <link rel='stylesheet' type='text/css' media='screen' href='./css/style.css'>


/**
 * Never worry about cache again!
 */
function my_load_scripts() {

	
	//wp_enqueue_script( 'custom_js', plugins_url( 'js/custom.js', __FILE__ ), array(), $my_js_ver );


	wp_register_style( 'slick-theme',get_template_directory_uri(). '/css/slick-theme.css');
	wp_enqueue_style ( 'slick-theme');


	wp_register_style( 'slick', get_template_directory_uri().'/css/slick.css');
	wp_enqueue_style ( 'slick');


	wp_register_style( 'all', get_template_directory_uri().'/css/all.css');
	wp_enqueue_style ( 'all');

	wp_register_style( 'style', get_template_directory_uri().'/css/style.css');
	wp_enqueue_style ( 'style');


	wp_enqueue_script('jquery');
	wp_register_script('jquery-theme', get_template_directory_uri().'/js/jquery-3.6.4.js',array(),'1.0.0',true);
	wp_enqueue_script('jquery-theme');

	wp_register_script('slick-js', get_template_directory_uri().'/js/slick.min.js',array(),'1.0.0',true);
	wp_enqueue_script('slick-js');

	wp_register_script('multi-animated-counter', get_template_directory_uri().'/js/multi-animated-counter.js',array(),'1.0.0',true);
	wp_enqueue_script('multi-animated-counter');


	wp_register_script('custom-theme-js', get_template_directory_uri().'/js/custom-theme.js',array(),'1.0.0',true);
	wp_enqueue_script('custom-theme-js');


}
add_action('wp_enqueue_scripts', 'my_load_scripts');



function theme_setup_one_setup(){
	$logo_width  = 300;
	$logo_height = 100;

	add_theme_support(
		'custom-logo',
		array(
			'height'               => $logo_height,
			'width'                => $logo_width,
			'flex-width'           => true,
			'flex-height'          => true,
			'unlink-homepage-logo' => true,
		)
	);
	register_nav_menus( array(
		'header_menu' => __( 'Header Menu', 'textdomain' )
	) );
}

add_action( 'after_setup_theme', 'theme_setup_one_setup' );


function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
add_filter( 'upload_mimes', 'cc_mime_types' );



/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Sidebar 1', 'textdomain' ),
		'id'            => 'footer-sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );


	register_sidebar( array(
		'name'          => __( 'Footer Sidebar 2', 'textdomain' ),
		'id'            => 'footer-sidebar-2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Sidebar 3', 'textdomain' ),
		'id'            => 'footer-sidebar-3',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

