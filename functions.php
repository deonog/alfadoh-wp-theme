<?php

// Scripts

function alfadoh_scripts(){
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap/bootstrap.min.js', array( 'jquery' ), '4.5.0', true );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap/bootstrap.min.css', array(), '4.5.0', 'all' );
    wp_enqueue_script( 'alfadoh-script', get_template_directory_uri() . '/inc/js/script.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_style('alfadoh-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0','all' );
}


add_action('wp_enqueue_scripts', 'alfadoh_scripts');

// Menus

function alfadoh_config(){
    register_nav_menus(
        array(
            'top_menu' => 'Top Menu',
            'footer_menu' => 'Footer Menu',
            'footer_menu_2' => 'Footer Menu 2'
        )
	);
	add_theme_support('post-thumbnails');
    add_post_type_support( 'page', 'excerpt' );
}

add_action('after_setup_theme', 'alfadoh_config', 0);

// Excerpt Length

function alfadoh_custom_excerpt_length( $length ) {
    return 35;
}
add_filter( 'excerpt_length', 'alfadoh_custom_excerpt_length', 999 );

// Products Custom Post Type

function custom_post_type() {
	$labels = array(
		'name'               => _x( 'Products', 'post type general name'),
		'singular_name'      => _x( 'Product', 'post type singular name'),
		'menu_name'          => _x( 'Products', 'admin menu'),
		'name_admin_bar'     => _x( 'Products', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Product'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Products'),
		'edit_item'          => __( 'Edit Products'),
		'view_item'          => __( 'View Products'),
		'all_items'          => __( 'All Products'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Products'),
		'parent_item_colon'  => __( 'Parent Products:'),
		'not_found'          => __( 'No Products found.'),
		'not_found_in_trash' => __( 'No Products found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-buddicons-topics',
    	        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => false,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail', 'page-attributes', 'custom-fields')
    );
    
    flush_rewrite_rules();

	register_post_type( 'products', $args );

	register_taxonomy( 'categories', array('products'), array(
        'hierarchical' => true, 
        'label' => 'Categories', 
        'singular_label' => 'Category', 
        'rewrite' => array( 'slug' => 'categories', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'categories', 'products' ); // Better be safe than sorry
}

add_action( 'init', 'custom_post_type', 0 );

// Services Custom Post Type

function custom_post_type_2() {
	$labels = array(
		'name'               => _x( 'Services', 'post type general name'),
		'singular_name'      => _x( 'Service', 'post type singular name'),
		'menu_name'          => _x( 'Services', 'admin menu'),
		'name_admin_bar'     => _x( 'Services', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Service'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Services'),
		'edit_item'          => __( 'Edit Services'),
		'view_item'          => __( 'View Services'),
		'all_items'          => __( 'All Services'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Services'),
		'parent_item_colon'  => __( 'Parent Services:'),
		'not_found'          => __( 'No Services found.'),
		'not_found_in_trash' => __( 'No Services found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-clipboard',
    	        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => false,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail', 'custom-fields')
    );
    
    flush_rewrite_rules();

	register_post_type( 'services', $args );
	
}

add_action( 'init', 'custom_post_type_2', 0);

// Exhibitions Custom Post Type

function custom_post_type_3() {
	$labels = array(
		'name'               => _x( 'Exhibitions', 'post type general name'),
		'singular_name'      => _x( 'Exhibition', 'post type singular name'),
		'menu_name'          => _x( 'Exhibitions', 'admin menu'),
		'name_admin_bar'     => _x( 'Exhibitions', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Exhibition'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Exhibitions'),
		'edit_item'          => __( 'Edit Exhibitions'),
		'view_item'          => __( 'View Exhibitions'),
		'all_items'          => __( 'All Exhibitions'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Exhibitions'),
		'parent_item_colon'  => __( 'Parent Exhibitions:'),
		'not_found'          => __( 'No Exhibitions found.'),
		'not_found_in_trash' => __( 'No Exhibitions found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-tickets-alt',
    	        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => false,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail', 'custom-fields')
    );
    
    flush_rewrite_rules();

	register_post_type( 'exhibitions', $args );
	
}

add_action( 'init', 'custom_post_type_3', 0 );

// Experiences Custom Post Type

function custom_post_type_4() {
	$labels = array(
		'name'               => _x( 'Experiences', 'post type general name'),
		'singular_name'      => _x( 'Experiences', 'post type singular name'),
		'menu_name'          => _x( 'Experiences', 'admin menu'),
		'name_admin_bar'     => _x( 'Experiences', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Experience'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Experiences'),
		'edit_item'          => __( 'Edit Experiences'),
		'view_item'          => __( 'View Experiences'),
		'all_items'          => __( 'All Experiences'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Experiences'),
		'parent_item_colon'  => __( 'Parent Experiences:'),
		'not_found'          => __( 'No Experiences found.'),
		'not_found_in_trash' => __( 'No Experiences found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-businessman',
    	        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => false,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail', 'custom-fields')
    );
    
    flush_rewrite_rules();

	register_post_type( 'experiences', $args );
	
}

add_action( 'init', 'custom_post_type_4', 0 );


    // Widget Locations

    function wpb_init_widgets($id){
		register_sidebar(array(
			'name' => 'Sidebar',
			'id' => 'sidebar',
			'before_widget' => '<div class="sidebar-module card">',
			'after_widget' => '</div>',
			'before_title' => '<h5 class="card-header">',
			'after_title' => '</h5>'
		));
  
	}
  
	add_action('widgets_init','wpb_init_widgets');


	add_filter( 'pre_get_posts','search_only_blog_posts' );

	function search_only_blog_posts( $query ) {
	
		if ( $query->is_search ) {
	
			$query->set( 'post_type', 'post' );
		}
		return $query;
	}



// Customizer File

require get_template_directory(). '/inc/customizer/customizer.php';





/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);