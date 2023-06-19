<?php 

register_nav_menus(
    array('primary-menu'=>'top-menu')
);

add_theme_support('post-thumbnails');

add_theme_support('custom-header');


function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
add_filter( 'upload_mimes', 'cc_mime_types' );
function my_script(){
  

    //  Bootstrap 
    wp_register_style( 'cssBoot',get_template_directory_uri(). '/css/bootstrap.min.css');
    wp_enqueue_style ( 'cssBoot');

    // slick 
    wp_register_style( 'cssSlick',get_template_directory_uri(). '/css/slick.css');
    wp_enqueue_style ( 'cssSlick');

    wp_register_style( 'cssSliickTheme',get_template_directory_uri(). '/css/slick-theme.css');
    wp_enqueue_style ( 'cssSliickTheme');
	
	wp_register_style( 'css',get_template_directory_uri(). '/css/style.css');
    wp_enqueue_style ( 'css');




    //<!-- Stylesheet -->

    // <!-- Fancybox -->
    wp_register_style( 'cssjqueryfancybox',get_template_directory_uri(). '/css/jquery.fancybox.css');
    wp_enqueue_style ( 'cssjqueryfancybox');

    wp_register_style( 'cssfancybox',get_template_directory_uri(). '/css/fancybox.min.css');
    wp_enqueue_style ( 'cssfancybox');

//   <!-- Animate css -->
    wp_register_style( 'cssAnimate',get_template_directory_uri(). '/css/animate.min.css');
    wp_enqueue_style ( 'cssAnimate');



    wp_register_style( 'cssAnimateCompat',get_template_directory_uri(). '/css/animate.compat.css');
    wp_enqueue_style ( 'cssAnimateCompat');

    
    // <!-- jquery -->
    wp_register_script( 'jsJqueryMin',get_template_directory_uri().'/js/jquery-3.6.4.min.js');
	wp_enqueue_script( 'jsJqueryMin');
    
    
    wp_register_script( 'jsSlick',get_template_directory_uri().'/js/slick.min.js');
	wp_enqueue_script( 'jsSlick');
    
    wp_register_script( 'jsFancybox',get_template_directory_uri().'/js/fancybox.min.js');
	wp_enqueue_script( 'jsFancybox');
    
    // <!-- Bootstrap -->
    
    wp_register_script( 'jsPopper',get_template_directory_uri().'/js/popper.min.js');
	wp_enqueue_script( 'jsPopper');
    
    wp_register_script( 'jsBootstrap',get_template_directory_uri().'/js/bootstrap.min.js');
	wp_enqueue_script( 'jsBootstrap');

    wp_register_script( 'js', get_template_directory_uri().'/js/script.js');
     wp_enqueue_script( 'js');
    // <!-- JS -->
}
add_action('wp_enqueue_scripts','my_script');

function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
		'name'          => __( 'Footer Sidebar 1', 'textdomain' ),
		'id'            => 'footer-sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<ul id="%1$s" class="widget %2$s">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Sidebar 2', 'textdomain' ),
		'id'            => 'footer-sidebar-2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<ul id="%1$s" class="widget %2$s">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Sidebar 3', 'textdomain' ),
		'id'            => 'footer-sidebar-3',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<ul id="%1$s" class="widget %2$s">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Sidebar 4', 'textdomain' ),
		'id'            => 'footer-sidebar-4',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<ul id="%1$s" class="widget %2$s">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Sidebar 5', 'textdomain' ),
		'id'            => 'footer-sidebar-5',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<ul id="%1$s" class="widget %2$s">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Sidebar 6', 'textdomain' ),
		'id'            => 'footer-sidebar-6',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<ul id="%1$s" class="widget %2$s">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );

    
}

add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );



function custom_post_type() {
  
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'storage', 'Post Type General Name', 'twentytwentyone' ),
            'singular_name'       => _x( 'storage', 'Post Type Singular Name', 'twentytwentyone' ),
            'menu_name'           => __( 'storage', 'twentytwentyone' ),
            'parent_item_colon'   => __( 'Parent storage', 'twentytwentyone' ),
            'all_items'           => __( 'All storages', 'twentytwentyone' ),
            'view_item'           => __( 'View storage', 'twentytwentyone' ),
            'add_new_item'        => __( 'Add New storage', 'twentytwentyone' ),
            'add_new'             => __( 'Add New', 'twentytwentyone' ),
            'edit_item'           => __( 'Edit storage', 'twentytwentyone' ),
            'update_item'         => __( 'Update storage', 'twentytwentyone' ),
            'search_items'        => __( 'Search storage', 'twentytwentyone' ),
            'not_found'           => __( 'Not Found', 'twentytwentyone' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
        );
          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'category', 'twentytwentyone' ),
            'description'         => __( 'storage news and reviews', 'twentytwentyone' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'Category' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
          
        // Registering your Custom Post Type
        register_post_type( 'storage', $args );



        $labels = array(
            'name'              => _x( 'Category', 'taxonomy general name', 'textdomain' ),
            'singular_name'     => _x( 'Category', 'taxonomy singular name', 'textdomain' ),
            'search_items'      => __( 'Search Category', 'textdomain' ),
            'all_items'         => __( 'All Category', 'textdomain' ),
            'parent_item'       => __( 'Parent Category', 'textdomain' ),
            'parent_item_colon' => __( 'Parent Category:', 'textdomain' ),
            'edit_item'         => __( 'Edit Category', 'textdomain' ),
            'update_item'       => __( 'Update Category', 'textdomain' ),
            'add_new_item'      => __( 'Add New Category', 'textdomain' ),
            'new_item_name'     => __( 'New Category Name', 'textdomain' ),
            'menu_name'         => __( 'Category', 'textdomain' ),
        );
    
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'genre' ),
        );
    
       

        register_taxonomy('news-category', 'storage', $args);


        $labels = array(
            'name'                       => _x('Type', 'taxonomy general name', 'textdomain'),
            'singular_name'              => _x('Type', 'taxonomy singular name', 'textdomain'),
            'search_items'               => __('Search Type', 'textdomain'),
            'popular_items'              => __('Popular Type', 'textdomain'),
            'all_items'                  => __('All Type', 'textdomain'),
            'parent_item'                => null,
            'parent_item_colon'          => null,
            'edit_item'                  => __('Edit Writer', 'textdomain'),
            'update_item'                => __('Update Writer', 'textdomain'),
            'add_new_item'               => __('Add New Writer', 'textdomain'),
            'new_item_name'              => __('New Writer Name', 'textdomain'),
            'separate_items_with_commas' => __('Separate Type with commas', 'textdomain'),
            'add_or_remove_items'        => __('Add or remove Type', 'textdomain'),
            'choose_from_most_used'      => __('Choose from the most used Type', 'textdomain'),
            'not_found'                  => __('No Type found.', 'textdomain'),
            'menu_name'                  => __('Type', 'textdomain'),
        );
    
        $args = array(
            'hierarchical'          => true,
            'labels'                => $labels,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var'             => true,
            'rewrite'               => array('slug' => 'news-type'),
        );
    
        register_taxonomy('news-type', 'storage', $args);
		flush_rewrite_rules();
    }
      
    add_action( 'init', 'custom_post_type', 0 );

?>