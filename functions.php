<?php

	/* ========================================================================================================================
	
	Images

	- Set thumbnail sizes and add any additional featured images.
	
	======================================================================================================================== */
	

	add_theme_support('post-thumbnails');
	
	add_image_size('cartogram_small',400, 400, true);
	add_image_size('cartogram_rectangle',600, 400, false);
	add_image_size('cartogram_medium',750, 750, true);
	add_image_size('cartogram_large',1500, 1500, true);

	add_image_size('img-small',300, 200, true);
	add_image_size('img-logo',250, 250, false);
	add_image_size('img-featured',1500, 500, true);

	/* ========================================================================================================================
	
	Navigation Menus
	
	======================================================================================================================== */

	register_nav_menus( array(
		'nav_primary'	=>  'Primary Nav',
		'nav_artists' 	=>  'Artists Sub Nav',
		'nav_programs' 	=>  'Programs Sub Nav',
		'nav_about' 	=>  'About Sub Nav',
		'nav_get_involved' 	=>  'Get Involved Sub Nav',
		'nav_secondary' =>  'Secondary Sub Nav below the main links in the side panel'
	) );

	/* ========================================================================================================================
	
	Define Widgetized Areas
	
	======================================================================================================================== */

	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'description' => __('This is the default widget area for the sidebar. This will be displayed if the other sidebars have not been populated with widgets.', 'cartogram'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	/* ========================================================================================================================
	
	Cartogram Post Types and Taxonomies Functions v.1.0
	
	======================================================================================================================== */

	function create_post_types() {

		$testimonialsLabels = array(
			'name' => __( 'Testimonials' ),
			'singular_name' => __( 'Testimonials' ),
			'add_new' => __( 'Add New' ),
			'add_new_item' => __( 'Add New Testimonial' ),
			'edit' => __( 'Edit' ),
			'edit_item' => __( 'Edit Testimonial' ),
			'new_item' => __( 'New Testimonial' ),
			'view' => __( 'View Testimonials' ),
			'view_item' => __( 'View Testimonial' ),
			'search_items' => __( 'Search Testimonials' ),
			'not_found' => __( 'No Testimonials found' ),
			'not_found_in_trash' => __( 'No Testimonials found in Trash' ),
			'parent' => __( 'Parent Testimonial' ),
		);
		
		$testimonialsArgs = array(
			'labels' => $testimonialsLabels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'has_archive' => true,		
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'taxonomies' => array(''),
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail')
		); 	
		
		register_post_type( 'testimonials' , $testimonialsArgs );


		flush_rewrite_rules( false );

	}

	 function create_taxonomies() {
	
		

	  	$labels = array(
			'name' => __( 'Product' ),
			'singular_name' => __( 'Product' ),
			'search_items' =>  __( 'Search Products' ),
			'all_items' => __( 'All Products' ),
			'parent_item' => __( 'Parent Product' ),
			'parent_item_colon' => __( 'Parent Product:' ),
			'edit_item' => __( 'Edit Product' ),
			'update_item' => __( 'Update Product' ),
			'add_new_item' => __( 'Add New Product' ),
			'new_item_name' => __( 'New Product Name' )
	  	);

	  	register_taxonomy('product',array( 'faq', 'manuals', 'tutorials', 'diagrams', 'warranties', 'videos',),array(
			'hierarchical' => true,
			'labels' => $labels
	  	));

		flush_rewrite_rules( false );
	 }


	 /* ========================================================================================================================
	
	Add Fonts to Head
	
	======================================================================================================================== */
	

	function load_fonts() {
		echo "<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Lato:400,400italic' rel='stylesheet' type='text/css'>";
	}

	add_action('wp_print_styles', 'load_fonts');



	?>